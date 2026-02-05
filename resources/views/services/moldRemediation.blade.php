@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}
@endsection

@section('content')
    <section class="py-5" style="background: radial-gradient(circle at 15% 20%, rgba(255, 193, 7, 0.16), transparent 35%), radial-gradient(circle at 80% 10%, rgba(13, 110, 253, 0.12), transparent 30%), #f8fafc;">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-12 col-lg-6 order-lg-2">
                    <div class="position-relative shadow rounded-4 overflow-hidden bg-white">
                        <img class="img-fluid" loading="lazy" src="{{ asset('img/mold.jpeg') }}"
                            alt="Mold remediation Vancouver team restoring a residential property">
                        <div class="position-absolute top-0 end-0 m-3 bg-dark text-white px-3 py-2 rounded-pill small fw-semibold">
                            24/7 Emergency Mold Help
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mt-4 justify-content-center align-items-center">
                        <img src="{{ asset('img/VRCALogo.png') }}" alt="VRCA certified mold remediation Vancouver" style="height: 80px; object-fit: contain;">
                        <img src="{{ asset('img/IICRCLogo.avif') }}" alt="IICRC certified mold remediation experts" style="height: 90px; object-fit: contain;">
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-lg-1 text-dark">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-warning text-dark fw-semibold mb-3">
                        <span class="text-uppercase" style="letter-spacing: 0.08em;">{{ __('Mold Hero Badge 1') }}</span>
                        <span class="badge bg-dark text-warning">{{ __('Mold Hero Badge 2') }}</span>
                    </div>
                    <h1 class="fs-1 fw-bolder mb-3">{{ __('Mold Hero Title') }}</h1>
                    <p class="lead mb-3">{{ __('Mold Hero Lead 1') }}</p>
                    <p class="mb-4">{{ __('Mold Hero Lead 2') }}</p>
                    <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3" style="border-radius: 14px; box-shadow: 0 10px 30px rgba(0,0,0,0.35);">
                            📞 {{ __('Mold 1-66') }}
                        </a>
                        <div class="text-muted small">
                            {{ __('Mold Hero CTA Note') }}
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="p-3 rounded-4 bg-white text-dark h-100 shadow-sm">
                                <div class="fw-bold mb-1">{{ __('Mold Hero Card 1 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold Hero Card 1 Text') }}</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-4 bg-white text-dark h-100 shadow-sm">
                                <div class="fw-bold mb-1">{{ __('Mold Hero Card 2 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold Hero Card 2 Text') }}</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-3 rounded-4 bg-white text-dark shadow-sm">
                                <div class="fw-bold mb-1">{{ __('Mold Hero Card 3 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold Hero Card 3 Text') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-4 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-12 col-lg-7">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-white text-uppercase fw-semibold small shadow-sm mb-3">
                        <span class="text-warning">{{ __('Mold Block2 Badge 1') }}</span>
                        <span class="text-secondary">{{ __('Mold Block2 Badge 2') }}</span>
                    </div>
                    <h2 class="fs-2 fw-bolder mb-3">{{ __('Mold Block2 Title') }}</h2>
                    <p class="lead mb-3">{{ __('Mold Block2 Lead 1') }}</p>
                    <p class="mb-4">{{ __('Mold Block2 Lead 2') }}</p>
                    <div class="row g-3">
                        <div class="col-12 col-md-4">
                            <div class="p-3 h-100 bg-white rounded-4 shadow-sm">
                                <div class="fw-bold mb-1">{{ __('Mold Block2 Feature 1 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold Block2 Feature 1 Text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="p-3 h-100 bg-white rounded-4 shadow-sm">
                                <div class="fw-bold mb-1">{{ __('Mold Block2 Feature 2 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold Block2 Feature 2 Text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="p-3 h-100 bg-white rounded-4 shadow-sm">
                                <div class="fw-bold mb-1">{{ __('Mold Block2 Feature 3 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold Block2 Feature 3 Text') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center gap-3 mt-4">
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3" style="border-radius: 14px; box-shadow: 0 10px 30px rgba(0,0,0,0.25);">
                            📞 Call Now: +1 604-800-3900
                        </a>
                        <div class="text-muted small">
                            {{ __('Mold Block2 Service Note') }}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="bg-white rounded-4 shadow-lg overflow-hidden">
                        <img class="img-fluid" loading="lazy" src="{{ asset('img/mold-refrigerator.jpg') }}"
                            alt="Mold remediation Vancouver removing mold inside a residential refrigerator">
                        <div class="p-3 d-flex justify-content-between align-items-center">
                            <span class="fw-semibold">Fridge Mold Removal</span>
                            <span class="badge bg-warning text-dark">Same-Day Fix</span>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mt-3 align-items-center justify-content-center">
                        <img src="{{ asset('img/googleg.png') }}" alt="Google Guaranteed for mold remediation Vancouver" style="height: 140px; object-fit: contain;">
                        <span class="text-muted">{{ __('Mold Block2 Rating Note') }}</span>
                    </div>
                </div>
            </div>

            <div class="row g-3 mt-4">
                <div class="col-12 col-md-4">
                    <div class="p-3 bg-white rounded-4 shadow-sm h-100">
                        <div class="fw-bold mb-1">Transparent Reporting</div>
                        <div class="small text-muted">{{ __('Mold Block2 Assurance 1') }}</div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="p-3 bg-white rounded-4 shadow-sm h-100">
                        <div class="fw-bold mb-1">Insurance Friendly</div>
                        <div class="small text-muted">{{ __('Mold Block2 Assurance 2') }}</div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="p-3 bg-white rounded-4 shadow-sm h-100">
                        <div class="fw-bold mb-1">People & Pet Safe</div>
                        <div class="small text-muted">{{ __('Mold Block2 Assurance 3') }}</div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 g-3">
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm" src="https://vrrestoration.ca/storage/uploads/X725gdW8nm48gtp2Ko5uKh4IV4FxBhakF5jLT4w7.jpg" alt="Before and after mold remediation in a Vancouver basement">
                </div>
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm" src="https://vrrestoration.ca/storage/uploads/0edMscVZ1fslkgJKQ0U2lIaqiCB4sf22kNPyaQuC.jpg" alt="Severe black mold removal in Burnaby interior wall">
                </div>
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm" src="https://vrrestoration.ca/storage/uploads/jVRdp1R67F6HFk6oaXP7lyuWQxhdT3hAgAfJDRzl.jpg" alt="Certified mold cleanup in a Surrey bathroom">
                </div>
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm" src="https://vrrestoration.ca/storage/uploads/O1xy2uqf9wcYNCfJzTxSVYFjVKxqcBmF7RBxK6tq.jpg" alt="Professional mold remediation crew in a Vancouver home">
                </div>
            </div>

            <div class="col-12 mt-5">
                <h2 class="fs-2 fw-bolder section-title-h1">{{ __('Mold About Title') }}</h2>
                <hr>
                <h3 class="fs-4 fw-bold">{{ __('Mold About Subtitle') }}</h3>
                <p class=" mb-2">{{ __('Mold About Body 1') }}</p>
                <p class=" mb-3">{{ __('Mold About Body 2') }}</p>
                <p class="text-muted small mb-3">{{ __('Mold About SEO Line') }}</p>
                <ul class="txt-vr d-flex flex-wrap gap-3">
                    <li class="lead px-2">Greater Vancouver</li>
                    <li class="lead px-2">Metro Vancouver</li>
                    <li class="lead px-2">North Shore</li>
                    <li class="lead px-2">Downtown</li>
                    <li class="lead px-2">Sea to Sky</li>
                    <li class="lead px-2">Tri-Cities</li>
                    <li class="lead px-2">Fraser Valley</li>
                    <li class="lead px-2">Howe Sound</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-4 py-md-5">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-md-5">
                    <div class="rounded-4 shadow-lg overflow-hidden">
                        <img class="img-fluid" loading="lazy" src="{{ asset('img/moldtype.jpeg') }}"
                            alt="Types of mold identified during Vancouver remediation assessment">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-warning text-dark fw-semibold small mb-3">
                        {{ __('Mold Process Badge') }}
                    </div>
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ __('Mold Process Title') }}</h2>
                    <p class="lead mb-3">{{ __('Mold Process Lead') }}</p>
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <div class="p-3 bg-white rounded-4 shadow-sm h-100">
                                <div class="fw-bold mb-1">{{ __('Mold Process Step1 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold Process Step1 Text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="p-3 bg-white rounded-4 shadow-sm h-100">
                                <div class="fw-bold mb-1">{{ __('Mold Process Step2 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold Process Step2 Text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="p-3 bg-white rounded-4 shadow-sm h-100">
                                <div class="fw-bold mb-1">{{ __('Mold Process Step3 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold Process Step3 Text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="p-3 bg-white rounded-4 shadow-sm h-100">
                                <div class="fw-bold mb-1">{{ __('Mold Process Step4 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold Process Step4 Text') }}</div>
                            </div>
                        </div>
                    </div>
                    <p class="lead  mt-4 mb-2">{{ __('Mold Process Note') }}</p>
                    <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3" style="border-radius: 14px; box-shadow: 0 10px 30px rgba(0,0,0,0.25);">
                        📞 Call Now: +1 604-800-3900
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 py-md-5 bg-vr-second">
        <div class="container">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-white text-uppercase fw-semibold small shadow-sm mb-3">
                <span class="text-warning">{{ __('Mold SEO Badge 1') }}</span>
                <span class="text-secondary">{{ __('Mold SEO Badge 2') }}</span>
            </div>
            <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ __('Mold SEO Title') }}</h2>
            <p class="lead  mb-4">{{ __('Mold SEO Intro') }}</p>

            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="p-3 bg-white rounded-4 shadow-sm h-100">
                        <div class="fw-bold mb-2">{{ __('Mold SEO Causes Title') }}</div>
                        <p class="small text-muted mb-2">{{ __('Mold SEO Causes Text') }}</p>
                        <ul class="small text-muted ps-3 mb-0">
                            <li>{{ __('Mold SEO Cause 1') }}</li>
                            <li>{{ __('Mold SEO Cause 2') }}</li>
                            <li>{{ __('Mold SEO Cause 3') }}</li>
                            <li>{{ __('Mold SEO Cause 4') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="p-3 bg-white rounded-4 shadow-sm h-100">
                        <div class="fw-bold mb-2">{{ __('Mold SEO Signs Title') }}</div>
                        <p class="small text-muted mb-2">{{ __('Mold SEO Signs Text') }}</p>
                        <ul class="small text-muted ps-3 mb-0">
                            <li>{{ __('Mold SEO Sign 1') }}</li>
                            <li>{{ __('Mold SEO Sign 2') }}</li>
                            <li>{{ __('Mold SEO Sign 3') }}</li>
                            <li>{{ __('Mold SEO Sign 4') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="p-3 bg-white rounded-4 shadow-sm h-100">
                        <div class="fw-bold mb-2">{{ __('Mold SEO Types Title') }}</div>
                        <p class="small text-muted mb-2">{{ __('Mold SEO Types Text') }}</p>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-light text-dark border">{{ __('Mold SEO Type 1') }}</span>
                            <span class="badge bg-light text-dark border">{{ __('Mold SEO Type 2') }}</span>
                            <span class="badge bg-light text-dark border">{{ __('Mold SEO Type 3') }}</span>
                            <span class="badge bg-light text-dark border">{{ __('Mold SEO Type 4') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3 mt-3">
                <div class="col-12 col-lg-8">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="badge bg-warning text-dark text-uppercase">{{ __('Mold Process Badge') }}</span>
                            <span class="small text-muted">{{ __('Mold SEO Process Note') }}</span>
                        </div>
                        <h3 class="h4 fw-bold mb-3">{{ __('Mold SEO Process Title') }}</h3>
                        <div class="row g-2">
                            <div class="col-12 col-md-6">
                                <div class="p-3 rounded-4 bg-light h-100">
                                    <div class="fw-bold mb-1">{{ __('Mold Process Step1 Title') }}</div>
                                    <div class="small text-muted">{{ __('Mold Process Step1 Text') }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="p-3 rounded-4 bg-light h-100">
                                    <div class="fw-bold mb-1">{{ __('Mold Process Step2 Title') }}</div>
                                    <div class="small text-muted">{{ __('Mold Process Step2 Text') }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="p-3 rounded-4 bg-light h-100">
                                    <div class="fw-bold mb-1">{{ __('Mold Process Step3 Title') }}</div>
                                    <div class="small text-muted">{{ __('Mold Process Step3 Text') }}</div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="p-3 rounded-4 bg-light h-100">
                                    <div class="fw-bold mb-1">{{ __('Mold Process Step4 Title') }}</div>
                                    <div class="small text-muted">{{ __('Mold Process Step4 Text') }}</div>
                                </div>
                            </div>
                        </div>
                        <p class="small text-muted mt-3 mb-0">{{ __('Mold Process Note') }}</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100 d-flex flex-column gap-3">
                        <div>
                            <div class="fw-bold mb-1">{{ __('Mold SEO Free Title') }}</div>
                            <p class="small text-muted mb-0">{{ __('Mold SEO Free Text') }}</p>
                        </div>
                        <div>
                            <div class="fw-bold mb-1">{{ __('Mold SEO Insurance Title') }}</div>
                            <p class="small text-muted mb-0">{{ __('Mold SEO Insurance Text') }}</p>
                        </div>
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3 w-100" style="border-radius: 14px; box-shadow: 0 10px 30px rgba(0,0,0,0.25);">
                            📞 {{ __('Mold 1-66') }}
                        </a>
                        <div>
                            <div class="fw-bold mb-2">{{ __('Mold SEO Locations Title') }}</div>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-light text-dark border">Vancouver</span>
                                <span class="badge bg-light text-dark border">Burnaby</span>
                                <span class="badge bg-light text-dark border">Richmond</span>
                                <span class="badge bg-light text-dark border">North Shore</span>
                                <span class="badge bg-light text-dark border">Tri-Cities</span>
                                <span class="badge bg-light text-dark border">Fraser Valley</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-4 py-md-5" style="background: radial-gradient(circle at 20% 20%, rgba(255, 193, 7, 0.12), transparent 45%), radial-gradient(circle at 80% 0%, rgba(13, 110, 253, 0.12), transparent 35%), #ffffff;">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-12 col-lg-5">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-dark text-white text-uppercase fw-semibold small shadow-sm mb-3">
                        <span>{{ __('Mold SEO Services Badge 1') }}</span>
                        <span class="badge bg-warning text-dark">{{ __('Mold SEO Services Badge 2') }}</span>
                    </div>
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ __('Mold SEO Services Title') }}</h2>
                    <p class="lead mb-3">{{ __('Mold SEO Services Lead') }}</p>
                    <p class="mb-4">{{ __('Mold SEO Services SubLead') }}</p>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-light text-dark border">{{ __('Mold SEO Services Tag 1') }}</span>
                        <span class="badge bg-light text-dark border">{{ __('Mold SEO Services Tag 2') }}</span>
                        <span class="badge bg-light text-dark border">{{ __('Mold SEO Services Tag 3') }}</span>
                        <span class="badge bg-light text-dark border">{{ __('Mold SEO Services Tag 4') }}</span>
                    </div>
                    <div class="p-3 p-md-4 bg-white rounded-4 shadow-sm">
                        <div class="fw-bold mb-1">{{ __('Mold SEO Services Note Title') }}</div>
                        <p class="small text-muted mb-3">{{ __('Mold SEO Services Note Text') }}</p>
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-2" style="border-radius: 12px; box-shadow: 0 10px 24px rgba(0,0,0,0.2);">
                            📞 {{ __('Mold 1-66') }}
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                                <div class="fw-bold mb-2">{{ __('Mold SEO Service Card 1 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold SEO Service Card 1 Text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                                <div class="fw-bold mb-2">{{ __('Mold SEO Service Card 2 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold SEO Service Card 2 Text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                                <div class="fw-bold mb-2">{{ __('Mold SEO Service Card 3 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold SEO Service Card 3 Text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                                <div class="fw-bold mb-2">{{ __('Mold SEO Service Card 4 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold SEO Service Card 4 Text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                                <div class="fw-bold mb-2">{{ __('Mold SEO Service Card 5 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold SEO Service Card 5 Text') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                                <div class="fw-bold mb-2">{{ __('Mold SEO Service Card 6 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold SEO Service Card 6 Text') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-4 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-7">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-white text-uppercase fw-semibold small shadow-sm mb-3">
                        <span class="text-warning">{{ __('Mold 1-50-badge1') }}</span>
                        <span class="text-secondary">{{ __('Mold 1-50-badge2') }}</span>
                    </div>
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ __('Mold 1-50') }}</h2>
                    <p class="lead  mb-3">{{ __('Mold 1-51') }}</p>
                    <p class=" mb-4">{{ __('Mold 1-58') }}</p>
                    <div class="row g-3">
                        <div class="col-12 col-md-4">
                            <div class="p-3 h-100 bg-white rounded-4 shadow-sm">
                                <div class="fw-bold mb-1">{{ __('Mold 1-52') }}</div>
                                <div class="small text-muted">{{ __('Mold 1-53') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="p-3 h-100 bg-white rounded-4 shadow-sm">
                                <div class="fw-bold mb-1">{{ __('Mold 1-62') }}</div>
                                <div class="small text-muted">{{ __('Mold 1-63') }}</div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="p-3 h-100 bg-white rounded-4 shadow-sm">
                                <div class="fw-bold mb-1">{{ __('Mold 1-64') }}</div>
                                <div class="small text-muted">{{ __('Mold 1-65') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap align-items-center gap-3 mt-4">
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3" style="border-radius: 14px; box-shadow: 0 10px 30px rgba(0,0,0,0.25);">
                            📞 {{ __('Mold 1-66') }}
                        </a>
                        <div class="text-muted small">{{ __('Mold 1-67') }}</div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-white rounded-4 shadow-lg overflow-hidden">
                        <img class="img-fluid" loading="lazy" src="{{ asset('img/Fogging.jpeg') }}"
                            alt="Fogging used during mold remediation Vancouver to neutralize spores">
                        <div class="p-3 d-flex justify-content-between align-items-center">
                            <span class="fw-semibold">{{ __('Mold 1-54') }}</span>
                            <span class="badge bg-warning text-dark">HEPA + Fogging</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-lg-7">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                        <h3 class="h4 section-title-h1 mb-2">{{ __('Mold 1-54') }}</h3>
                        <p class=" mb-3">{{ __('Mold 1-55') }}</p>
                        <h4 class="h5 fw-bold mb-2">{{ __('Mold 1-56') }}</h4>
                        <p class=" mb-3">{{ __('Mold 1-57') }}</p>
                        <ul class=" ps-3 mb-0">
                            <li>{{ __('Mold 1-59') }}</li>
                            <li>{{ __('Mold 1-60') }}</li>
                            <li>{{ __('Mold 1-61') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="fw-bold text-uppercase text-warning mb-2">Mold Remediation Vancouver</div>
                        <p class=" mb-3">{{ __('Mold 1-58') }}</p>
                        <div class="d-flex gap-2 flex-wrap small text-muted">
                            <span class="badge bg-light text-dark border">{{ __('Mold 1-52') }}</span>
                            <span class="badge bg-light text-dark border">{{ __('Mold 1-54') }}</span>
                            <span class="badge bg-light text-dark border">HEPA + Drying</span>
                            <span class="badge bg-light text-dark border">Odor Control</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-4 py-md-5" style="background: linear-gradient(140deg, rgba(13, 110, 253, 0.08), rgba(255, 193, 7, 0.08));">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-warning text-dark fw-semibold small mb-3">
                            {{ __('Mold SEO Timeline Badge') }}
                        </div>
                        <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ __('Mold SEO Timeline Title') }}</h2>
                        <p class="lead mb-4">{{ __('Mold SEO Timeline Lead') }}</p>
                        <div class="d-grid gap-3">
                            <div class="p-3 rounded-4 bg-light">
                                <div class="fw-bold mb-1">{{ __('Mold SEO Timeline Step 1 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold SEO Timeline Step 1 Text') }}</div>
                            </div>
                            <div class="p-3 rounded-4 bg-light">
                                <div class="fw-bold mb-1">{{ __('Mold SEO Timeline Step 2 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold SEO Timeline Step 2 Text') }}</div>
                            </div>
                            <div class="p-3 rounded-4 bg-light">
                                <div class="fw-bold mb-1">{{ __('Mold SEO Timeline Step 3 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold SEO Timeline Step 3 Text') }}</div>
                            </div>
                            <div class="p-3 rounded-4 bg-light">
                                <div class="fw-bold mb-1">{{ __('Mold SEO Timeline Step 4 Title') }}</div>
                                <div class="small text-muted">{{ __('Mold SEO Timeline Step 4 Text') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100 d-flex flex-column">
                        <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-dark text-white text-uppercase fw-semibold small mb-3">
                            {{ __('Mold SEO Cost Badge') }}
                        </div>
                        <h3 class="h4 fw-bold mb-2">{{ __('Mold SEO Cost Title') }}</h3>
                        <p class="small text-muted mb-3">{{ __('Mold SEO Cost Lead') }}</p>
                        <ul class="small text-muted ps-3 mb-4">
                            <li>{{ __('Mold SEO Cost Factor 1') }}</li>
                            <li>{{ __('Mold SEO Cost Factor 2') }}</li>
                            <li>{{ __('Mold SEO Cost Factor 3') }}</li>
                            <li>{{ __('Mold SEO Cost Factor 4') }}</li>
                        </ul>
                        <div class="mt-auto">
                            <div class="fw-bold mb-1">{{ __('Mold SEO Estimate Title') }}</div>
                            <p class="small text-muted mb-3">{{ __('Mold SEO Estimate Text') }}</p>
                            <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-2" style="border-radius: 12px; box-shadow: 0 10px 24px rgba(0,0,0,0.2);">
                                📞 {{ __('Mold 1-66') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-4 py-md-5">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-md-5">
                    <div class="rounded-4 shadow-lg overflow-hidden position-relative">
                        <img class="img-fluid" loading="lazy" src="{{ asset('img/mold3.jpeg') }}"
                            alt="Common mold growth areas addressed during mold remediation Vancouver">
                        <div class="position-absolute top-0 start-0 m-3 bg-warning text-dark px-3 py-2 rounded-pill small fw-semibold">
                            {{ __('Mold 1-10-badge') }}
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h2 class="fs-2 fw-bolder section-title-h1 mb-3">{{ __('Mold 1-10') }}</h2>
                    <p class="lead  mb-3">{{ __('Mold 1-11') }}</p>
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <a class="badge bg-light text-dark border text-decoration-none px-3 py-2" href="#">{{ __('Mold 1-12') }}</a>
                        <a class="badge bg-light text-dark border text-decoration-none px-3 py-2" href="#">{{ __('Mold 1-13') }}</a>
                        <a class="badge bg-light text-dark border text-decoration-none px-3 py-2" href="#">{{ __('Mold 1-68') }}</a>
                    </div>
                    <p class=" mb-2">{{ __('Mold 1-14') }}</p>
                    <p class=" mb-0">{{ __('Mold 1-15') }}</p>
                    <div class="text-muted small mt-3">{{ __('Mold 1-69') }}</div>
                </div>
            </div>
        </div>
    </section>




    <section class="py-3 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-md-12 mb-3">
                    <h2 class="section-title-h1">{{ __('Mold 1-16') }}

                    </h2>
                    <hr>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            1){{ __('Mold 1-17') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Mold 1-18') }}

                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            2) {{ __('Mold 1-19') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">
                                {{ __('Mold 1-20') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            3) {{ __('Mold 1-21') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">
                                {{ __('Mold 1-22') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            4) {{ __('Mold 1-23') }}
                        </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text"> {{ __('Mold 1-24') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            5) {{ __('Mold 1-25') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Mold 1-26') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            6) {{ __('Mold 1-27') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Mold 1-28') }}

                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            7) {{ __('Restoration') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Mold 1-29') }}

                            </p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>



    <!-- Faq Section -->
    <section id="faq" class="faq  ">

        <div class="container">


            <div class="col-md-12 mb-3">
                <h2 class="fs-2 fw-bolder section-title-h1">{{ __('Frequently Asked Questions') }}

                </h2>
                <hr>
            </div>

            <div class="row ">

                <div class="col-lg-12">

                    <div class="faq-container">

                        <div class="faq-item rounded-3 faq-active" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-30') }} </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-31') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-32') }} </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-33') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-34') }} </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-35') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-36') }} </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-37') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-38') }} </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-39') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-40') }}
                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-41') }} </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>
                                {{ __('Mold 1-42') }}
                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-43') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->


                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-44') }}

                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-45') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-46') }}

                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-47') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->


                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Mold 1-48') }}

                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Mold 1-49') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->



                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Faq Section -->
@endsection
