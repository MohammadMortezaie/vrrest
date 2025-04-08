@extends('layouts.app')

@section('header')
{!! seo($SEOData) !!}
@endsection

@section('content')<section class="py-3 py-md-5">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-5">
                <img class="img-fluid rounded" loading="lazy"
                    src="{{ asset('img/construction2.jpeg') }}"
                    alt="{{ __('constructionEmergencyAlt') }}">
                    <div class="d-flex gap-3 mt-4 justify-content-center align-items-center">
                        <img src="{{ asset('img/VRCALogo.png') }}" alt="VRCA Logo" style="height: 80px; object-fit: contain;">
                        <img src="{{ asset('img/IICRCLogo.avif') }}" alt="IICRC Logo" style="height: 90px; object-fit: contain;">
                    </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="row justify-content-xl-center">
                    <div class="col-12 col-xl-11">
                        <h1 class="fs-1 fw-bolder">{{ __('constructionRestorationHeading') }}</h1>
                        <hr>
                        <p class="txt-def mb-5">
                            {{ __('constructionRestorationDescription') }}
                        </p>
                    </div>
                    <div class="text-center mt-3">
                        <strong class="d-block mb-2" style="font-size: 1.2rem;">{{ __('Mold 1-3-7') }} </strong>
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                            style="font-size: 1.0rem; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            📞 Call Now: +1 604-800-3900
                        </a>
                        <p class="mt-2" style="font-size: 0.95rem; color: #555;">{{ __('Mold 1-3-8') }} </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-3 py-md-5 bg-vr-second">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 ">
            <div class="col-12 mb-3">
                <h2 class="fs-2 fw-bolder section-title-h1">
                    {{ __('comprehensivePropertyDamageSolutionsHeading') }}
                </h2>
                <p class="txt-def">
                    {{ __('comprehensivePropertyDamageSolutionsDescription') }}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-3 py-md-5">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0">
            <div class="col-md-4 mb-3">
                <img class="img-fluid rounded" loading="lazy"
                    src="{{ asset('img/construction.jpeg') }}"
                    alt="{{ __('constructionRestorationServicesAlt') }}">
            </div>
            <div class="col-md-7 mb-3 mt-4">
                <h2 class="fs-2 fw-bolder section-title-h1">
                    {{ __('specializedEquipmentAndTechniquesHeading') }}
                </h2>
                <hr>
                <p class="txt-def">
                    {{ __('specializedEquipmentAndTechniquesDescription') }}
                </p>
                <a href="{{ route('contact', ['lang' => app()->getLocale()]) }}" class="px-btn theme">
                    <span>{{ __('contactUs') }}</span>
                    <i class="arrow"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-3 py-md-5 bg-vr-second">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0">
            <div class="col-md-7 mb-3">
                <h2 class="fs-2 fw-bolder section-title-h1">
                    {{ __('comprehensiveReconstructionServicesHeading') }}
                </h2>
                <p class="txt-def">
                    {{ __('comprehensiveReconstructionServicesDescription') }}
                </p>
                <h3>{{ __('ourServicesIncludeHeading') }}</h3>
                <ul>
                    <li>{{ __('inspectionsAndAppraisals') }}</li>
                    <li>{{ __('emergencyBoardUps') }}</li>
                    <li>{{ __('completeEstimates') }}</li>
                    <li>{{ __('demolitionAndDebrisRemoval') }}</li>
                    <li>{{ __('residentialAndCommercialReconstruction') }}</li>
                    <li>{{ __('generalConstructionServices') }}</li>
                    <li>{{ __('permitAcquisition') }}</li>
                </ul>
            </div>
            <div class="col-md-5 mb-3">
                <img class="img-fluid rounded" loading="lazy"
                    src="{{ asset('img/construction4.jpeg') }}"
                    alt="{{ __('aboutImageAlt') }}">
            </div>
        </div>
    </div>
</section>

<section class="py-3 py-md-5">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0">
            <div class="col-md-5 mb-3">
                <img class="img-fluid rounded" loading="lazy"
                    src="{{ asset('img/construction5.jpeg') }}"
                    alt="{{ __('collaborationWithInsuranceCompaniesAlt') }}">
            </div>
            <div class="col-md-7 mb-3">
                <h2 class="fs-2 fw-bolder section-title-h1">
                    {{ __('collaborationWithInsuranceCompaniesHeading') }}
                </h2>
                <p class="txt-def">
                    {{ __('collaborationWithInsuranceCompaniesDescription') }}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-3 py-md-5 bg-vr-second">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0">
            <div class="col-md-12 mb-3">
                <h2 class="fs-2 fw-bolder section-title-h1">
                    {{ __('commitmentToQualityAndSafetyHeading') }}
                </h2>
                <p>
                    {{ __('commitmentToQualityAndSafetyDescription') }}
                </p>
                <a href="https://www.vrplusconstruction.com/" target="_blank" class="px-btn theme">
                    <span>{{ __('Read More') }}</span>
                    <i class="arrow"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="faq" class="faq">
    <div class="container">
        <div class="col-md-12 mb-3">
            <h2 class="fs-2 fw-bolder">
                {{ __('faqHeading') }}
            </h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="faq-container">
                    <div class="faq-item rounded-3 faq-active" data-aos="fade-up" data-aos-delay="200">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>{{ __('faqQuestion1') }}</h3>
                        <div class="faq-content">
                            <p>{{ __('faqAnswer1') }}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>
                    <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="300">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>{{ __('faqQuestion2') }}</h3>
                        <div class="faq-content">
                            <p>{{ __('faqAnswer2') }}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>
                    <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="400">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>{{ __('faqQuestion3') }}</h3>
                        <div class="faq-content">
                            <p>{{ __('faqAnswer3') }}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>
                    <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="500">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>{{ __('faqQuestion4') }}</h3>
                        <div class="faq-content">
                            <p>{{ __('faqAnswer4') }}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>
                    <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                        <i class="faq-icon bi bi-question-circle"></i>
                        <h3>{{ __('faqQuestion5') }}</h3>
                        <div class="faq-content">
                            <p>{{ __('faqAnswer5') }}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
