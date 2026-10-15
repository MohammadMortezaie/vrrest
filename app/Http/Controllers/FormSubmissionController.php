<?php

namespace App\Http\Controllers;

use App\Models\FormSubmission;
use Illuminate\Http\Request;

class FormSubmissionController extends Controller
{
    private function authorizeAdmin(Request $request): void
    {
        abort_unless($request->user()->is_admin && $request->user()->is_active, 403);
    }

    public function index(Request $request)
    {
        $this->authorizeAdmin($request);

        return view('admin.submissions.index', [
            'submissions' => FormSubmission::query()->latest('id')->paginate(25),
        ]);
    }

    public function show(Request $request, string $submission)
    {
        $this->authorizeAdmin($request);

        return view('admin.submissions.show', [
            'submission' => FormSubmission::findOrFail($submission),
        ]);
    }
}
