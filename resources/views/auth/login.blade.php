@extends('layouts.app')

@section('header')
    <title>{{ __('Login') }} | VR Plus Restoration</title>
    <meta name="robots" content="noindex, nofollow, noarchive, nosnippet">
    <meta name="googlebot" content="noindex, nofollow, noarchive, nosnippet">
@endsection

@section('content')
@php($recaptchaSiteKey = config('services.recaptcha.site_key'))
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="js-admin-login-form">
                        @csrf
                        <input type="hidden" name="recaptcha_action" value="admin_login">
                        <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off" aria-hidden="true">
                        @if ($recaptchaSiteKey)
                            <input type="hidden" name="g-recaptcha-response" class="js-admin-recaptcha-token">
                        @endif

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                @error('g-recaptcha-response')
                                    <div class="alert alert-danger py-2" role="alert">{{ $message }}</div>
                                @enderror

                                <button type="submit" class="btn btn-primary js-admin-login-submit">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <div class="small text-muted mt-3"><i class="bi bi-shield-check" aria-hidden="true"></i> {{ __('Protected by reCAPTCHA') }}</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@if ($recaptchaSiteKey)
    <script src="https://www.google.com/recaptcha/api.js?render={{ $recaptchaSiteKey }}"></script>
    <script>
        document.addEventListener('submit', function (event) {
            const form = event.target.closest('.js-admin-login-form');
            if (!form || form.dataset.recaptchaReady === 'true') return;

            const tokenInput = form.querySelector('.js-admin-recaptcha-token');
            const submitButton = form.querySelector('.js-admin-login-submit');
            if (!tokenInput || typeof grecaptcha === 'undefined') return;

            event.preventDefault();
            submitButton.disabled = true;

            grecaptcha.ready(function () {
                grecaptcha.execute('{{ $recaptchaSiteKey }}', { action: 'admin_login' }).then(function (token) {
                    tokenInput.value = token;
                    form.dataset.recaptchaReady = 'true';
                    form.submit();
                }).catch(function () {
                    submitButton.disabled = false;
                });
            });
        }, true);
    </script>
@endif
@endsection
