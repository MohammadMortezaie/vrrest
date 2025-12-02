@extends('layouts.app')

@section('header')
    {!! seo($SEOData) !!}


    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <section class="py-md-5 d-flex ">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="rounded-4 overflow-hidden shadow-sm">
                        <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy"
                            src="{{ asset('img/water-damage.jpeg') }}" alt="{{ __('Water Damage 1-1') }}">
                    </div>
                    <div class="d-flex gap-3 mt-4 justify-content-center align-items-center">
                        <img src="{{ asset('img/VRCALogo.png') }}" alt="VRCA Logo" style="height: 80px; object-fit: contain;">
                        <img src="{{ asset('img/IICRCLogo.avif') }}" alt="IICRC Logo" style="height: 80px; object-fit: contain;">
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="p-2 p-md-3">
                        <div class="d-inline-flex align-items-center bg-warning text-dark fw-semibold px-3 py-2 rounded-pill mb-3">
                            {{ __('Water Damage 1-3') }}
                        </div>
                        <h1 class="fs-1 fw-bolder mb-3">{{ __('Water Damage 1-1') }}</h1>
                        <p class="lead mb-3">
                            {{ __('Water Damage 1-2') }}
                        </p>
                        <p class="lead fw-semibold mb-4">
                            {{ __('Water Damage 1-2-2') }} <a href="tel:+16048003900" class="text-warning"> {{ __('Water Damage Hero CTA Number') }}</a>.
                            {{ __('Water Damage Hero CTA') }}
                        </p>

                        <div class="row g-3 mb-4">
                            <div class="col-sm-6 d-flex align-items-start gap-2">
                                <span class="badge bg-warning-subtle text-dark mt-1">✓</span>
                                <p class="mb-0 text-muted">{{ __('Water Damage Hero Bullet 1') }}</p>
                            </div>
                            <div class="col-sm-6 d-flex align-items-start gap-2">
                                <span class="badge bg-warning-subtle text-dark mt-1">✓</span>
                                <p class="mb-0 text-muted">{{ __('Water Damage Hero Bullet 2') }}</p>
                            </div>
                            <div class="col-sm-6 d-flex align-items-start gap-2">
                                <span class="badge bg-warning-subtle text-dark mt-1">✓</span>
                                <p class="mb-0 text-muted">{{ __('Water Damage Hero Bullet 3') }}</p>
                            </div>
                            <div class="col-sm-6 d-flex align-items-start gap-2">
                                <span class="badge bg-warning-subtle text-dark mt-1">✓</span>
                                <p class="mb-0 text-muted">{{ __('Water Damage Hero Bullet 4') }}</p>
                            </div>
                        </div>

                        <div class="d-flex flex-column flex-md-row align-items-md-center gap-3">
                            <a href="tel:+16048003900" class="btn btn-warning btn-lg px-4 fw-bold shadow-sm text-dark">
                                📞 +1 604-800-3900
                            </a>
                            <div class="text-muted">
                                {{ __('Water Damage Types CTA Button') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-3 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">

                <div class="col-lg-5 mb-4 mb-lg-0">
                    <!-- Image card with overlay label -->
                    <div class="position-relative rounded-4 overflow-hidden shadow-sm h-100">
                        <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy"
                            src="{{ asset('img/water-damage-vr.jpeg') }}"
                            alt="Water Damage Restoration Vancouver - VR Plus Restoration">

                        <div class="position-absolute bottom-0 start-0 end-0 px-3 px-md-4 py-2"
                            style="background: linear-gradient( to top, rgba(0,0,0,0.65), rgba(0,0,0,0) );">
                            <span class="badge rounded-pill bg-warning text-dark fw-semibold px-3 py-2 small">
                                On-Site Water Damage Drying in Vancouver
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 mb-3">
                    <!-- Content card -->
                    <div class="bg-white rounded-4 shadow-sm p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
                        <!-- Heading + intro -->
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <h2 class="mb-0 fs-2 fw-bolder section-title-h1">
                                    {{ __('Water Damage 1-3-1') }}
                                </h2>
                            </div>

                            <p class="text-muted mb-3">
                                {{ __('Water Damage 1-3-2') }}
                            </p>

                            <!-- Bullet list -->
                            <ul class="mb-0 ps-3" style="font-size: 1.02rem; line-height: 1.6;">
                                <li>{{ __('Water Damage 1-63') }}</li>
                                <li>{{ __('Water Damage 1-64') }}</li>
                                <li>{{ __('Water Damage 1-65') }}</li>
                                <li>{{ __('Water Damage 1-66') }}</li>
                                <li>{{ __('Water Damage 1-67') }}</li>
                            </ul>
                        </div>

                        <!-- CTA row -->
                        <div class="mt-4 pt-3 border-top">
                            <div class="d-flex flex-column flex-md-row align-items-center gap-3">
                                <div class="text-center text-md-start">
                                    <strong class="d-block mb-2" style="font-size: 1.05rem;">
                                        {{ __('Mold 1-3-7') }}
                                    </strong>
                                    <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                                        style="font-size: 1rem; border-radius: 30px; box-shadow: 0 8px 18px rgba(0, 0, 0, 0.22);">
                                        📞 Call Now: +1 604-800-3900
                                    </a>
                                </div>
                                <p class="mb-0 small text-muted text-center text-md-start">
                                    {{ __('Mold 1-3-8') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 mb-3">
                    <h2 class="mt-5 fs-2 fw-bolder section-title-h1">
                        {{ __('Water Damage Why Choose Title') }}</h2>


                    <div class="row g-4">
                        <!-- Faster On-Site Arrival -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <span
                                                class="badge rounded-circle text-bg-primary d-inline-flex align-items-center justify-content-center"
                                                style="width: 40px; height: 40px;">
                                                1
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Why Choose 1 Title') }}</h3>
                                            <p class="card-text text-muted mb-0">
                                                {{ __('Water Damage Why Choose 1 Text') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Certified & Experienced Technicians -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <span
                                                class="badge rounded-circle text-bg-primary d-inline-flex align-items-center justify-content-center"
                                                style="width: 40px; height: 40px;">
                                                2
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Why Choose 2 Title') }}</h3>
                                            <p class="card-text text-muted mb-0">{!! __('Water Damage Why Choose 2 Text') !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Full Insurance Support -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <span
                                                class="badge rounded-circle text-bg-primary d-inline-flex align-items-center justify-content-center"
                                                style="width: 40px; height: 40px;">
                                                3
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Why Choose 3 Title') }}</h3>
                                            <p class="card-text text-muted mb-2">
                                                {{ __('Water Damage Why Choose 3 Text') }}
                                            </p>
                                            <ul class="text-muted mb-0 ps-3">
                                                <li>{{ __('Water Damage Why Choose 3 List 1') }}</li>
                                                <li>{{ __('Water Damage Why Choose 3 List 2') }}</li>
                                                <li>{{ __('Water Damage Why Choose 3 List 3') }}</li>
                                                <li>{{ __('Water Damage Why Choose 3 List 4') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Local Vancouver Expertise -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <span
                                                class="badge rounded-circle text-bg-primary d-inline-flex align-items-center justify-content-center"
                                                style="width: 40px; height: 40px;">
                                                4
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Why Choose 4 Title') }}</h3>
                                            <p class="card-text text-muted mb-0">
                                                {{ __('Water Damage Why Choose 4 Text') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Industrial-Grade Equipment -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <span
                                                class="badge rounded-circle text-bg-primary d-inline-flex align-items-center justify-content-center"
                                                style="width: 40px; height: 40px;">
                                                5
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Why Choose 5 Title') }}</h3>
                                            <p class="card-text text-muted mb-0">
                                                {{ __('Water Damage Why Choose 5 Text') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Transparent Pricing -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 border-0 shadow-sm rounded-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <span
                                                class="badge rounded-circle text-bg-primary d-inline-flex align-items-center justify-content-center"
                                                style="width: 40px; height: 40px;">
                                                6
                                            </span>
                                        </div>
                                        <div>
                                            <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Why Choose 6 Title') }}</h3>
                                            <p class="card-text text-muted mb-0">
                                                {{ __('Water Damage Why Choose 6 Text') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End-to-End CTA card -->
                    <div class="row my-5">
                        <div class="col-lg-10 mx-auto">
                            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                                <div class="row g-0 align-items-center">
                                    <div class="col-lg-8">
                                        <div class="card-body p-4 p-lg-5">
                                            <h3 class="h4 fw-bold mb-2">{{ __('Water Damage End-to-End Title') }}</h3>
                                            <p class="text-muted mb-0">{!! __('Water Damage End-to-End Text') !!}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-center text-lg-end pe-lg-4 pb-4 pb-lg-0">
                                        <a href="tel:+16048003900"
                                            class="btn btn-primary btn-lg mt-3 mt-lg-0 px-4 w-auto">
                                            {{ __('Water Damage End-to-End CTA') }}
                                        </a>
                                        <p class="small text-muted mt-2 mb-0">
                                            {{ __('Water Damage End-to-End Note') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



<div class="col-12">
    <div class="bg-white rounded-4 shadow-sm p-4 p-md-5">
        <div class="row g-4 align-items-center">
            <!-- Image -->
            <div class="col-lg-5">
              <div class="d-flex flex-column gap-3">
                    <!-- Main image -->
                    <div>
                        <img
                            src="https://vrrestoration.ca/storage/uploads/tEXGP8Eq74pnGLvjntnh4sv81t2PKBrQmQRQ8Id5.jpg"
                            alt="Ceiling leak and early signs of water damage in a Vancouver home"
                            class="img-fluid rounded-4 w-100"
                            style="object-fit: cover;"
                            loading="lazy"
                        >
                    </div>

                    <!-- Second supporting image -->
                    <div>
                        <img
                            src="https://vrrestoration.ca/storage/uploads/fMRNAGtDLSgEtiIrakZB8oJpTobB6gGVeSbsjsxq.jpg"
                            alt="Water damage drying equipment used in a Vancouver home"
                            class="img-fluid rounded-4 w-100"
                            style="object-fit: cover;"
                            loading="lazy"
                        >
                    </div>
                </div>

            </div>

            <!-- Text -->
            <div class="col-lg-7">
                <!-- Title block with accent bar -->
                <div class="mb-3">
                    <p class="text-uppercase small fw-semibold text-warning mb-1">
                        {{ __('Water Damage Causes Label') }}
                    </p>
                    <h2 class="fw-bold mb-0 section-title-h1">
                        {{ __('Water Damage Causes Title') }}
                    </h2>
                </div>

                <p class="text-muted mb-4">
                    {{ __('Water Damage Causes Intro') }}
                </p>

                <div class="row g-4">
                    <!-- Common Causes -->
                    <div class="col-md-6">
                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Causes Column Title') }}</h3>
                        <ul class="mb-0 ps-3" style="font-size: 0.98rem; line-height: 1.6;">
                            <li>{{ __('Water Damage Causes 1') }}</li>
                            <li>{{ __('Water Damage Causes 2') }}</li>
                            <li>{{ __('Water Damage Causes 3') }}</li>
                            <li>{{ __('Water Damage Causes 4') }}</li>
                            <li>{{ __('Water Damage Causes 5') }}</li>
                            <li>{{ __('Water Damage Causes 6') }}</li>
                            <li>{{ __('Water Damage Causes 7') }}</li>
                            <li>{{ __('Water Damage Causes 8') }}</li>
                        </ul>
                    </div>

                    <!-- Early Warning Signs -->
                    <div class="col-md-6">
                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Signs Column Title') }}</h3>
                        <ul class="mb-0 ps-3" style="font-size: 0.98rem; line-height: 1.6;">
                            <li>{{ __('Water Damage Signs 1') }}</li>
                            <li>{{ __('Water Damage Signs 2') }}</li>
                            <li>{{ __('Water Damage Signs 3') }}</li>
                            <li>{{ __('Water Damage Signs 4') }}</li>
                            <li>{{ __('Water Damage Signs 5') }}</li>
                            <li>{{ __('Water Damage Signs 6') }}</li>
                            <li>{{ __('Water Damage Signs 7') }}</li>
                            <li>{{ __('Water Damage Signs 8') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



                <div class="row align-items-center my-4">
                    <div class="col-md-4 my-3 text-center mb-md-0">
                        <div class="bg-white shadow-sm rounded-4 p-3 d-inline-block">
                            <img src="{{ asset('img/googleg.png') }}" alt="Google Guaranteed Service Provider"
                                class="img-fluid" style="max-height: 180px;">
                        </div>
                    </div>

                    <div class="col-md-8 mb-3">
                        <!-- Heading + intro -->
                        <h2 class="mt-3 fs-2 fw-bolder section-title-h1">
                            {{ __('Water Damage 1-60') }}
                        </h2>

                        <p class=" text-muted mb-3">
                            {{ __('Water Damage 1-61') }}
                        </p>

                        <!-- CTA card -->
                        <div class="mt-4">
                            <div class="bg-white rounded-4 shadow-sm p-4 p-md-4 text-center text-md-start">
                                <strong class="d-block mb-3" style="font-size: 1.1rem;">
                                    {{ __('Mold 1-3-7') }}
                                </strong>

                                <div class="d-flex flex-column flex-md-row align-items-center gap-3">
                                    <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                                        style="font-size: 1rem; border-radius: 30px; box-shadow: 0 6px 14px rgba(0, 0, 0, 0.18);">
                                        📞 Call Now: +1 604-800-3900
                                    </a>

                                    <p class="mb-0 small text-muted">
                                        {{ __('Mold 1-3-8') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-6">
                    <h2 class="mt-5 fs-2 fw-bolder section-title-h1">
                        {{ __('Water Damage 1-4') }}
                    </h2>
                    <p class="lead ">{{ __('Water Damage 1-5') }}
                    </p>
                </div>

                <div class="col-md-6 mt-5">
                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/water-damagelivingroom.jpeg') }}"
                        alt="Water Damage Restoration Vancouver Fix issue immediately after flood in bc">

                </div>

                <div class="col-md-12">
                    <div class="text-center mt-3">
                        <strong class="d-block mb-2" style="font-size: 1.2rem;">{{ __('Mold 1-3-7') }} </strong>
                        <a href="tel:+16048003900" class="btn btn-warning fw-bolder text-uppercase px-4 py-3"
                            style="font-size: 1.0rem; border-radius: 30px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                            📞 Call Now: +1 604-800-3900
                        </a>
                        <p class="mt-2" style="font-size: 0.95rem; color: #555;">{{ __('Mold 1-3-8') }} </p>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="mt-3">
                        <h2 class="mt-5 fs-2 fw-bolder section-title-h1">{{ __('waterDamage 1-68') }}</h2>
                        <p>
                            {{ __('watedamage 1-69') }}
                        </p>

                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6 my-3">
                        <img class="img-fluid rounded" src="{{ asset('img/water-damage -vancouver2.jpg') }}"
                            alt="Technician using a moisture meter for wall leak detection in West Vancouver">
                    </div>

                    <div class="col-md-6 my-3">
                        <img class="img-fluid rounded" src="{{ asset('img/water-damage -vancouver3.jpg') }}"
                            alt="West Vancouver technician checking water damaged drywall with a moisture meter">
                    </div>

                </div>


                <div class="row">

                    <div class="col-md-12 my-3">
                        <h2 class="mt-5 fs-2 fw-bolder section-title-h1">
                            {{ __('Water Damage Types Title') }}</h2>

                    </div>

                    <div class="col-md-12 my-3">
                        <p>{{ __('Water Damage Types Intro') }}</p>

                        <div class="row g-4">
                            <!-- Burst Pipes -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body">
                                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Type 1 Title') }}</h3>
                                        <p class="card-text text-muted mb-0">
                                            {{ __('Water Damage Type 1 Text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Appliance Leaks -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body">
                                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Type 2 Title') }}</h3>
                                        <p class="card-text text-muted mb-0">
                                            {{ __('Water Damage Type 2 Text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Toilet Overflow & Sewage -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body">
                                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Type 3 Title') }}</h3>
                                        <p class="card-text text-muted mb-0">
                                            {{ __('Water Damage Type 3 Text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Basement Flooding -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body">
                                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Type 4 Title') }}</h3>
                                        <p class="card-text text-muted mb-0">
                                            {{ __('Water Damage Type 4 Text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Roof Leaks -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body">
                                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Type 5 Title') }}</h3>
                                        <p class="card-text text-muted mb-0">
                                            {{ __('Water Damage Type 5 Text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Rainstorm Water Intrusion -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body">
                                        <h3 class="h5 fw-bold mb-2">{{ __('Water Damage Type 6 Title') }}</h3>
                                        <p class="card-text text-muted mb-0">
                                            {{ __('Water Damage Type 6 Text') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Optional CTA under the grid -->
                        <div class="row mt-5">
                            <div class="col text-center">
                                <p class="mb-3 fw-semibold">
                                    {{ __('Water Damage Types CTA Text') }}
                                </p>
                                <a href="tel:+16048003900" class="btn btn-primary btn-lg px-4">
                                    {{ __('Water Damage Types CTA Button') }}
                                </a>
                            </div>
                        </div>


                    </div>

                </div>



            </div>
        </div>
    </section>



    <section class="py-3 py-md-5  ">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">



                <div class="col-md-7 mb-4 pb-4">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('Water Damage 1-70') }}
                    </h2>
                    <p>{!! __('Water Damage 1-71') !!}</p>

                    <ul>
                        <li>{{ __('Water Damage 1-72') }}</li>
                        <li>{{ __('Water Damage 1-73') }}</li>
                        <li>{{ __('Water Damage 1-74') }}</li>
                        <li>{{ __('Water Damage 1-75') }}</li>
                    </ul>

                </div>
                <div class="col-md-5 mb-4 pb-4">

                    <img class="img-fluid rounded " loading="lazy"
                        src="{{ asset('img/water-damage-restoration-vancouver-equipment.jpg') }}"
                        alt="Water Damage Restoration Vancouver in basement after flood emegency situation">

                </div>







                <div class="col-md-5 mb-3">

                    <img class="img-fluid rounded " loading="lazy"
                        src="{{ asset('img/water-damage-restorationbath.jpeg') }}"
                        alt="Water Damage Restoration Vancouver in basement after flood emegency situation">

                </div>
                <div class="col-md-7 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1"> {{ __('What Not To DO') }}

                    </h2>


                    <ul class="txt-def">
                        <li>
                            <strong>{{ __('Water Damage 1-18') }}

                            </strong>{{ __('Water Damage 1-19') }}


                        </li>


                        <li>
                            <strong>{{ __('Water Damage 1-20') }}

                            </strong>{{ __('Water Damage 1-21') }}


                        </li>

                        <li>
                            <strong>{{ __('Water Damage 1-22') }}

                            </strong>{{ __('Water Damage 1-23') }}

                        </li>


                    </ul>

                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('What To DO') }}
                    </h2>


                    <ul class="txt-def">
                        <li>
                            <strong>{{ __('Water Damage 1-6') }}

                            </strong>{{ __('Water Damage 1-7') }}

                        </li>


                        <li>
                            <strong>{{ __('Water Damage 1-8') }}

                            </strong>{{ __('Water Damage 1-9') }}

                        </li>

                        <li>
                            <strong>{{ __('Water Damage 1-10') }}

                            </strong>{{ __('Water Damage 1-11') }}

                        </li>

                        <li>
                            <strong>{{ __('Water Damage 1-12') }}

                            </strong>{{ __('Water Damage 1-13') }}

                        </li>

                        <li>
                            <strong>{{ __('Water Damage 1-14') }}

                            </strong>
                            {{ __('Water Damage 1-15') }}
                        </li>

                        <li>
                            <strong> {{ __('Water Damage 1-16') }}

                            </strong>
                            {{ __('Water Damage 1-17') }}
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>


    <section class="py-3 py-md-5 bg-vr-second ">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-md-7 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('Water Damage 1-24') }}

                    </h2>

                    <p class="lead"> {{ __('Water Damage 1-25') }}

                        <button class="btn btn-link txt-vr" type="button" data-bs-toggle="collapse"
                            onclick="scrollToText()" data-bs-target="#collapseVrRestoration" aria-expanded="false"
                            aria-controls="collapseVrRestoration"> {{ __('Read More') }} >>
                        </button>
                    </p>

                </div>
                <div class="col-md-5 mb-3">

                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/water-damage-vancouver.jpg') }}"
                        alt="Water damage restoration in Vancouver services">
                </div>

                <div class="collapse" id="collapseVrRestoration">
                    <div class="card card-body " id="textToScrollTo">
                        <p class="lead">
                            {{ __('Water Damage 1-26') }}

                            <br>
                            <br>
                            {{ __('Water Damage 1-27') }}

                            <br>
                            <br>
                            {{ __('Water Damage 1-28') }}


                            <br>
                            <br>
                            {{ __('Water Damage 1-29') }}
                            <br>
                            <br>
                            {{ __('Water Damage 1-30') }}

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-3 py-md-5 ">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-md-12 mb-3">
                    <h2 class="section-title-h1">
                        {{ __('Water Damage 1-31') }}

                    </h2>
                    <hr>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            1) {{ __('Water Damage 1-32') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-33') }}
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            2) {{ __('Water Damage 1-34') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-35') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            3){{ __('Water Damage 1-36') }} </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-37') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            4) {{ __('Water Damage 1-38') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text"> {{ __('Water Damage 1-39') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            5) {{ __('Water Damage 1-40') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-41') }}

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            6) {{ __('Water Damage 1-42') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-43') }}
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            7) {{ __('Water Damage 1-44') }}</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">{{ __('Water Damage 1-45') }}
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            8) {{ __('Water Damage 1-46') }}
                        </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text ">{{ __('Water Damage 1-47') }}

                            </p>
                        </div>
                    </div>
                </div>



                <div class="col-md-12 my-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                        {{ __('About 1-9') }}
                    </h2>
                    <hr>

                    <h3 class="fs-4 fw-bold">
                        {{ __('Water Damage 1-46-1') }}
                    </h3>
                    <p>
                        {{ __('Water Damage 1-46-2') }}
                    </p>


                    <div class="d-flex flex-wrap gap-2 pb-3">
                        <a href="https://vrrestoration.ca/en/blog/9/what-number-to-call-for-water-damage-in-vancouver"
                            class="btn btn-warning btn-sm">

                            {{ __('Water Damage 1-46-3') }}
                        </a>
                    </div>
                    <ul class="txt-vr d-flex flex-wrap gap-3">
                        <li class="lead px-2">Vancouver</li>
                        <li class="lead px-2">West Vancouver</li>
                        <li class="lead px-2">North Shore</li>
                        <li class="lead px-2">Downtown</li>
                        <li class="lead px-2">Greater Vancouver</li>
                        <li class="lead px-2">Metro Vancouver</li>
                        <li class="lead px-2">Coquitlam</li>
                        <li class="lead px-2">Sea to Sky</li>
                        <li class="lead px-2">Tri-Cities</li>
                        <li class="lead px-2">Fraser Valley</li>
                        <li class="lead px-2">Howe Sound</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <!-- Faq Section -->
    <section id="faq" class="faq  bg-vr-second">

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
                            <h3>{{ __('Water Damage 1-48') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-49') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-50') }}</h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-51') }}

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>
                                <p>{{ __('Water Damage 1-52') }}
                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-53') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-54') }} </h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-55') }}
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-56') }}
                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-57') }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>{{ __('Water Damage 1-58') }}

                            </h3>
                            <div class="faq-content">
                                <p>{{ __('Water Damage 1-59') }} </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Faq Section -->

    <!-- Recommended For You -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">

                <div class="section-title">
                    <h2 class="fs-2 fw-bolder section-title-h1">{{ __('Recommended For You') }} </h2>
                </div>


                <div class="container">

                    <div class="swiper"
                        data-swiper-config=' {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                              "delay": 4000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                              "el": ".swiper-pagination",
                              "type": "bullets",
                              "clickable": true
                            },
                            "breakpoints": {
                              "320": {
                                "slidesPerView": 1,
                                "spaceBetween": 30
                              },
                              "480": {
                                "slidesPerView": 1,
                                "spaceBetween": 30
                              },
                              "640": {
                                "slidesPerView": 2,
                                "spaceBetween": 30
                              },
                              "992": {
                                "slidesPerView": 3,
                                "spaceBetween": 30
                              }
                            }
                          }'>
                        <div class="swiper-wrapper ">
                            @foreach ($blog as $b)
                                <div class="swiper-slide my-3 ">
                                    <div class="card border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="card-title txt-vr h5">{{ $b->title }}</h3>
                                            <hr>
                                            <p class="card-text">
                                                {{ $b->subtitle }}
                                            </p>
                                            <a href="{{ route('blog.post', ['lang' => app()->getLocale(), 'blog' => $b->id, 'slug' => $b->slug]) }}"
                                                class="text-decoration-none text-black">{{ __('Read More') }}
                                                <i class="bi bi-chevron-double-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>


    </section><!-- /Recommended For You -->
@endsection

@section('scripts')
    <script>
        function scrollToText() {
            const collapseElement = document.getElementById('collapseVrRestoration');

            collapseElement.addEventListener('shown.bs.collapse', function() {
                const textToScrollTo = document.getElementById('textToScrollTo');
                textToScrollTo.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        }
    </script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script>
        function initSwiper() {
            document.querySelectorAll('.swiper').forEach(function(swiper) {
                let config = JSON.parse(swiper.getAttribute('data-swiper-config'));
                new Swiper(swiper, config);
            });
        }
        window.addEventListener('load', initSwiper);
    </script>
@endsection
