<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Throwable;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers {
        login as protected performLogin;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/vr/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
        $this->middleware('throttle:10,1')->only('login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'website' => ['nullable', 'size:0'],
            'recaptcha_action' => ['required', 'string', 'in:admin_login'],
            'g-recaptcha-response' => ['required', 'string'],
        ]);

        try {
            $verification = Http::asForm()
                ->timeout(8)
                ->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => config('services.recaptcha.secret_key'),
                    'response' => $validated['g-recaptcha-response'],
                    'remoteip' => $request->ip(),
                ]);
        } catch (Throwable $exception) {
            Log::warning('Admin login reCAPTCHA verification unavailable', [
                'message' => $exception->getMessage(),
                'ip' => $request->ip(),
            ]);

            throw ValidationException::withMessages([
                'g-recaptcha-response' => [__('Security verification failed. Please try again.')],
            ]);
        }

        $passed = $verification->successful()
            && $verification->json('success')
            && $verification->json('action') === 'admin_login'
            && (float) $verification->json('score', 0) >= 0.7;

        if (! $passed) {
            throw ValidationException::withMessages([
                'g-recaptcha-response' => [__('Security verification failed. Please try again.')],
            ]);
        }

        return $this->performLogin($request);
    }
}
