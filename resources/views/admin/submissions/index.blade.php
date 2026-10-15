@extends('layouts.app')

@section('header')
    <title>Form Submissions</title>
    <meta name="robots" content="noindex, nofollow">
@endsection

@section('content')
    <div class="container section">
        <a href="{{ route('home') }}" class="btn btn-outline-dark mb-3">Back to admin</a>
        <h1 class="h3">Form Submissions</h1>
        <p class="text-muted">{{ $submissions->total() }} submissions · Dates shown in America/Vancouver</p>
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead><tr><th>ID</th><th>Received</th><th>Name</th><th>Email</th><th>Phone</th><th>Source</th><th>Email notification</th><th>Details</th></tr></thead>
                <tbody>
                    @forelse ($submissions as $submission)
                        <tr>
                            <td>{{ $submission->id }}</td>
                            <td class="text-nowrap">{{ $submission->created_at->timezone('America/Vancouver')->format('Y-m-d H:i:s T') }}</td>
                            <td>{{ $submission->name }}</td>
                            <td>{{ $submission->email }}</td>
                            <td>{{ $submission->phone }}</td>
                            <td>{{ $submission->source ?? '—' }}</td>
                            <td>{{ ucfirst($submission->email_status) }}</td>
                            <td><a class="btn btn-sm btn-dark" href="{{ route('form-submissions.show', $submission) }}">View #{{ $submission->id }}</a></td>
                        </tr>
                    @empty
                        <tr><td colspan="8" class="text-center py-4">No form submissions yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $submissions->links('pagination::bootstrap-5') }}
    </div>
@endsection
