<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Throwable;

class CommentController extends Controller
{




    // Admin Controller
    public function index()
    {
        return view('admin.posts.comment');
    }

    public function all(Request $request)
    {
        $results = Comment::activeAll();

        return response()->json($results, 200);
    }

    public function store(Request $request, $id)
    {
        $requestedReturnUrl = (string) $request->input('page_url', url()->previous());
        $requestedHost = parse_url($requestedReturnUrl, PHP_URL_HOST);
        $safeReturnUrl = filter_var($requestedReturnUrl, FILTER_VALIDATE_URL)
            && $requestedHost === $request->getHost()
                ? $requestedReturnUrl
                : url('/');
        $redirectUrl = rtrim($safeReturnUrl, '#').'#reply-title';

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'comment' => ['required', 'string', 'max:3000'],
            'page_url' => [
                'nullable',
                'url',
                'max:500',
                function ($attribute, $value, $fail) use ($request) {
                    if (parse_url((string) $value, PHP_URL_HOST) !== $request->getHost()) {
                        $fail(__('The return URL is invalid.'));
                    }
                },
            ],
            'website' => ['nullable', 'size:0'],
            'g-recaptcha-response' => ['required', 'string'],
            'recaptcha_action' => ['required', 'string', 'in:blog_comment'],
        ]);

        if ($validator->fails()) {
            return redirect($redirectUrl)->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        try {
            $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => config('services.recaptcha.secret_key'),
                'response' => $validated['g-recaptcha-response'],
                'remoteip' => $request->ip(),
            ]);
        } catch (Throwable $exception) {
            Log::warning('Blog comment reCAPTCHA verification failed', [
                'message' => $exception->getMessage(),
                'post_id' => $id,
            ]);

            return redirect($redirectUrl)->withInput()
                ->with('comment_error', __('Blog Recaptcha Error'));
        }

        $recaptchaPassed = $recaptchaResponse->json('success')
            && $recaptchaResponse->json('action') === $validated['recaptcha_action']
            && (float) $recaptchaResponse->json('score', 0) >= 0.5;

        if (!$recaptchaPassed) {
            return redirect($redirectUrl)->withInput()
                ->with('comment_error', __('Blog Recaptcha Error'));
        }

        $comment = new Comment();
        $comment->post_id = $id;
        $comment->name = $validated['name'];
        $comment->email = $validated['email'];
        $comment->comment = $validated['comment'];

        $comment->save();

        return redirect($redirectUrl)->with('success', __('Blog Comment Success'));
    }

    public function update(Request $request,Comment $comment)
    {

        if ($comment) {
            $comment->is_active = $request->is_active;
            $comment->save();

            return response()->json("Done", 200);
        }
    }
}
