@props([
    'source' => __('Contact Form Default Source'),
    'title' => __('Contact Form Title'),
    'subtitle' => __('Contact Form Subtitle'),
])

@php
    $formId = \Illuminate\Support\Str::slug($source);
    $recaptchaSiteKey = config('services.recaptcha.site_key');
@endphp

<section class="py-4 py-md-5 bg-vr-second" id="contact-form-section">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-12 col-lg-5">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-white text-uppercase fw-semibold small shadow-sm mb-3">
                    {{ __('Contact Form Badge') }}
                </div>
                <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ $title }}</h2>
                <p class="lead mb-3">{{ $subtitle }}</p>
                <p class="text-muted mb-0">{{ __('Contact Form Privacy') }}</p>
            </div>
            <div class="col-12 col-lg-7">
                <div class="bg-white rounded-4 shadow-sm p-4 p-md-5">
                    @if (session('contact_success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('contact_success') }}
                        </div>
                    @endif

                    @if (session('contact_error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('contact_error') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{ __('Contact Form Validation Error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit', ['lang' => app()->getLocale()]) }}" class="mb-0 js-contact-form">
                        @csrf
                        <input type="hidden" name="source" value="{{ $source }}">
                        <input type="hidden" name="page_url" value="{{ url()->current() }}">
                        <input type="hidden" name="recaptcha_action" value="contact_form">
                        <input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off">

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" for="contact-name-{{ $formId }}">{{ __('Contact Form Name') }}</label>
                                <input name="name" id="contact-name-{{ $formId }}" placeholder="{{ __('Contact Form Name Placeholder') }}"
                                    class="form-control @error('name') is-invalid @enderror" type="text" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" for="contact-email-{{ $formId }}">{{ __('Contact Form Email') }}</label>
                                <input name="email" id="contact-email-{{ $formId }}" placeholder="{{ __('Contact Form Email Placeholder') }}"
                                    class="form-control @error('email') is-invalid @enderror" type="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label class="form-label fw-semibold" for="contact-phone-{{ $formId }}">{{ __('Contact Form Phone') }}</label>
                                <input name="phone" id="contact-phone-{{ $formId }}" placeholder="{{ __('Contact Form Phone Placeholder') }}"
                                    class="form-control @error('phone') is-invalid @enderror" type="tel" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label class="form-label fw-semibold" for="contact-message-{{ $formId }}">{{ __('Contact Form Message') }}</label>
                                <textarea name="message" id="contact-message-{{ $formId }}" placeholder="{{ __('Contact Form Message Placeholder') }}"
                                    rows="5" class="form-control @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            @if ($recaptchaSiteKey)
                                <input type="hidden" name="g-recaptcha-response" class="js-recaptcha-token">
                                @error('g-recaptcha-response')
                                    <div class="col-md-12">
                                        <div class="text-danger small">{{ $message }}</div>
                                    </div>
                                @enderror
                            @endif
                            <div class="col-md-12">
                                <button class="btn btn-warning fw-bolder text-uppercase px-4 py-3" type="submit" style="border-radius: 14px;">
                                    {{ __('Contact Form Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@once
    @if (config('services.recaptcha.site_key'))
        <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
        <script>
            document.addEventListener('submit', function(event) {
                const form = event.target.closest('.js-contact-form');

                if (!form || form.dataset.recaptchaReady === 'true') {
                    return;
                }

                const tokenInput = form.querySelector('.js-recaptcha-token');

                if (!tokenInput || typeof grecaptcha === 'undefined') {
                    return;
                }

                event.preventDefault();

                grecaptcha.ready(function() {
                    grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {
                        action: 'contact_form'
                    }).then(function(token) {
                        tokenInput.value = token;
                        form.dataset.recaptchaReady = 'true';
                        form.submit();
                    });
                });
            }, true);
        </script>
    @endif
@endonce
