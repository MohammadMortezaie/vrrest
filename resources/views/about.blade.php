@extends('layouts.app')

@section('header')
    <title>About</title>
@endsection

@section('content')
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 ">
                    <img class="img-fluid rounded" loading="lazy" style="max-height: 400px; width: 100%"
                        src="{{ asset('img/hero-bg.jpeg') }}" alt="About 1">
                </div>
            </div>
        </div>
    </section>


    <section class="py-3 py-md-5 bg-vr-second">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-12 col-lg-7">
                    <h1 class="section-title-h1">About Us</h1>
                    <p class="txt-def  mb-3">

                        At VR Plus restoration, we provide comprehensive property damage emergency services and restoration
                        24/7, 365 days a year. Our qualified, licensed, and highly trained crews work efficiently to restore
                        your residential or commercial property to its pre-loss condition, specializing in flood, fire,
                        wind, mold, and asbestos restoration.

                    </p>
                    <ul>
                        <li>
                            VR Plus restoration technicians are ready to respond to your property damage, 24/7
                        </li>
                        <li>
                            Our fully equipped team will be onsite within half and hour
                        </li>
                        <li>
                            We will provide you with thorough documentation
                        </li>
                        <li>We get it! Property damage of any kind can be devastating. We care and concerned for our
                            customers
                        </li>
                        <li>Our team consists of certified, qualified and professional members. The technicians at VR Plus
                            restoration have trained in IICRC approved courses (Institute of Inspection, Cleaning and
                            Restoration Certification)
                        </li>
                    </ul>
                    <p class="txt-def">
                        Your Greater Vancouver Restoration Experts
                        When disaster strikes, our experienced technicians in Greater Vancouver area are ready to restore
                        your home or business with prompt and efficient restoration service. When we’re notified that you
                        need help, we contact you within 30 minutes and. If you are in the Greater Vancouver area, you can
                        always depend on us!
                        When disaster strikes, you can rely on rapid and professional restoration service from VR Plus
                        restoration. Our technicians are on call 24-hours a day, seven days a week and will arrive at your
                        doorstep within half an hour. VR Plus restoration is fully certified by the Institute of Inspection,
                        Cleaning and Restoration Certification. The IICRC has served as the industry guardian for
                        inspection, restoration and cleaning services for over 30 years.
                    </p>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="row ">
                        <div class="col-12 col-xl-11">
                            <h2 class="section-title-h1">Certifications</h2>
                            <ul class="txt-vr">
                                <li class="fs-5">Home Inspector Certified</li>
                                <li class="fs-5">IICRC Certified</li>
                                <li class="fs-5">ASBESTOS Certified</li>
                                <li class="fs-5">General Safety Certified</li>
                            </ul>
                            <hr class="my-4">
                            <h2 class="section-title-h1">Service Area</h2>
                            <ul class="txt-vr">
                                <li class="fs-5">Greater Vancouver</li>
                                <li class="fs-5">Metro Vancouver</li>
                                <li class="fs-5">North Shore </li>
                                <li class="fs-5">Downtown </li>
                                <li class="fs-5">Sea to Sky </li>
                                <li class="fs-5">Tri-Cities </li>
                                <li class="fs-5">Fraser Valley </li>
                                <li class="fs-5">Howe Sound </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
