@extends('layouts.app')

@section('header')
    <title>Submission #{{ $submission->id }}</title>
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
    <div class="container section">
        <a href="{{ route('form-submissions.index') }}" class="btn btn-outline-dark mb-3">Back to submissions</a>
        <div class="card"><div class="card-body">
            <h1 class="h3 mb-4">Submission #{{ $submission->id }}</h1>
            <dl class="row" style="overflow-wrap: anywhere;">
                <dt class="col-sm-3">Received (Vancouver)</dt><dd class="col-sm-9">{{ $submission->created_at->timezone('America/Vancouver')->format('Y-m-d H:i:s T') }}</dd>
                <dt class="col-sm-3">Name</dt><dd class="col-sm-9">{{ $submission->name }}</dd>
                <dt class="col-sm-3">Email</dt><dd class="col-sm-9">{{ $submission->email }}</dd>
                <dt class="col-sm-3">Phone</dt><dd class="col-sm-9">{{ $submission->phone }}</dd>
                <dt class="col-sm-3">Source</dt><dd class="col-sm-9">{{ $submission->source ?? '—' }}</dd>
                <dt class="col-sm-3">Page URL</dt><dd class="col-sm-9">{{ $submission->page_url ?? '—' }}</dd>
                <dt class="col-sm-3">Language</dt><dd class="col-sm-9">{{ $submission->locale }}</dd>
                <dt class="col-sm-3">Email notification</dt><dd class="col-sm-9">{{ ucfirst($submission->email_status) }}</dd>
                <dt class="col-sm-3">Email sent (Vancouver)</dt><dd class="col-sm-9">{{ $submission->email_sent_at?->timezone('America/Vancouver')->format('Y-m-d H:i:s T') ?? '—' }}</dd>
                <dt class="col-sm-3">Message</dt><dd class="col-sm-9" style="white-space: pre-wrap;">{{ $submission->message }}</dd>
            </dl>
        </div></div>
    </div>
@endsection
