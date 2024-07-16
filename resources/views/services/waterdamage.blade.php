@extends('layouts.app')

@section('header')
    <title>Water Damage Restoration</title>
@endsection

@section('content')
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/water-damage.jpeg') }}" alt="Water Damage">
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h1 class="fs-1 fw-bolder">Water Damage Restoration Services</h1>
                            <hr>
                            <p class="lead mb-5 txt-def">
                                With our cutting-edge equipment, years of experience, and unmatched knowledge, VR PLUS
                                Restoration can effectively restore any residential or commercial property damaged by
                                flooding or water leaks. Postponing water damage services may result in future, more
                                expensive repairs. It is highly recommended that you read
                                <a class="txt-vr fw-bold " href="#"> Why Rapid Response is Essential?</a>

                            </p>
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
                        Water Damage Restoration with Moisture Detection and IICRC-Certified Specialists
                    </h2>

                    <p class="lead txt-def">
                        Our water damage restoration experts are skilled in locating concealed moisture using infrared
                        cameras and moisture meters. We can precisely and quickly dry areas that have been flooded by water
                        thanks to our specialized equipment and scientific knowledge. At VR PLUS, we thoroughly inspect the
                        damage and provide an understandable assessment of the degree of the water damage to your property.
                        We also manage the necessary paperwork and assist your insurance company with the claims procedure.
                        Our methodical approach and specialized skill sets guarantee that your property is properly dried
                        and restored. Our specialists have a high degree of training in water remediation, as evidenced by
                        their IICRC certification in water restoration.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <section class="py-3 py-md-5  ">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 ">
                <div class="col-md-6 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                        What To DO
                    </h2>


                    <ul class="txt-def">
                        <li>
                            <strong>
                                Turn off the water supply:
                            </strong>
                            If possible, shut off the water supply to prevent further flooding. If you're
                            unable to do so, contact a qualified professional immediately.
                        </li>


                        <li>
                            <strong>
                                Turn off circuit breakers:
                            </strong>
                            If it's safe, turn off circuit breakers for the affected areas to avoid
                            electrical hazards.
                        </li>

                        <li>
                            <strong>
                                Mop and blot:
                            </strong>
                            Use mops and blotting techniques to remove excess water from floors and surfaces.
                        </li>

                        <li>
                            <strong>
                                Remove wet upholstery cushions:
                            </strong>
                            Take out wet cushions and prop them up to dry evenly. Avoid washing
                            cushion covers as this can cause damage.
                        </li>

                        <li>
                            <strong>
                                Protect furniture:
                            </strong>
                            Place aluminum foil or wood blocks under the legs of furniture to prevent water
                            damage.
                        </li>

                        <li>
                            <strong>
                                Move valuables:
                            </strong>
                            Place aluminum foil or wood blocks under the legs of furniture to prevent water
                            damage. Hang furs and leather products: Hang these items separately at room temperature to dry
                            properly.
                        </li>
                    </ul>

                </div>
                <div class="col-md-6 mb-3">
                    <h2 class="fs-2 fw-bolder section-title-h1">
                        What Not To DO
                    </h2>


                    <ul class="txt-def">
                        <li>
                            <strong>
                                Avoid electrical hazards:
                            </strong>
                            Do not enter areas where electrical outlets, switches, or equipment are exposed to water.

                        </li>


                        <li>
                            <strong>
                                Do not use personal vacuums:
                            </strong>
                            Using personal vacuums to remove water can cause electrical shock or damage the vacuum.

                        </li>

                        <li>
                            <strong>
                                Do not turn on ceiling fixtures:
                            </strong>
                            If the ceiling is wet, do not turn on ceiling fixtures or enter rooms with sagging ceilings to
                            avoid the risk of collapse.
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

                        Restoration and Property Management
                    </h2>

                    <p class="lead">
                        Restoration companies and property managers relations that enhances operational efficiency, ensures
                        rapid emergency response, and promotes proactive maintenance. Property managers rely on restoration
                        companies for quick and professional handling of emergencies like water or fire damage, minimizing
                        disruption and costs. Restoration companies provide 24/7 emergency services, giving property
                        managers peace of mind and helping maintain safety and property value.
                        <button class="btn btn-link txt-vr" type="button" data-bs-toggle="collapse"
                            onclick="scrollToText()" data-bs-target="#collapseVrRestoration" aria-expanded="false"
                            aria-controls="collapseVrRestoration">
                            Read More >>
                        </button>
                    </p>

                </div>
                <div class="col-md-5 mb-3">

                    <img class="img-fluid rounded" loading="lazy" src="{{ asset('img/water-damage2.jpeg') }}"
                        alt="About 1">
                </div>

                <div class="collapse" id="collapseVrRestoration">
                    <div class="card card-body " id="textToScrollTo">
                        <p class="lead">
                            Beyond emergencies, restoration companies offer routine inspections and preventative services,
                            helping property managers address issues early and avoid costly repairs. This proactive approach
                            extends the lifespan of building components and improves tenant satisfaction.
                            <br>
                            <br>
                            Over time, this relationship often evolves into a long-term partnership characterized by trust
                            and reliability. Restoration companies become essential allies in maintaining and protecting
                            properties, while property managers gain a dependable resource for efficient property
                            management. This collaboration ultimately enhances the quality and effectiveness of property
                            management, benefiting both parties.
                            <br>
                            <br>

                            Restoration companies and property managers have a mutually beneficial relationship that
                            improves efficiency, emergency response, and maintenance. Property managers depend on
                            restoration companies to quickly and professionally handle emergencies like water or fire
                            damage, reducing disruption and costs. Restoration companies provide 24/7 services, giving
                            property managers reassurance and helping maintain safety and property value.
                            <br>
                            <br>
                            In addition to emergencies, restoration companies offer regular inspections and preventive
                            services, helping property managers address issues early and avoid expensive repairs. This
                            proactive approach extends the life of building components and boosts tenant satisfaction.
                            <br>
                            <br>
                            This relationship often grows into a long-term partnership based on trust and reliability.
                            Restoration companies become vital allies in maintaining and protecting properties, while
                            property managers gain a reliable resource for effective property management. This collaboration
                            ultimately enhances the quality and efficiency of property management.

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
                        Water Restoration Process
                    </h2>
                    <hr>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            1) Emergency Contact</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">
                                When you reach out to us, our expert will ask you a few questions to understand your
                                specific water emergency. This helps us respond effectively and schedule a prompt inspection
                                of your property by a VR PLUS professional, who will create a tailored restoration plan for
                                you.


                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            2) Inspection and Water Damage Assessment</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">
                                Upon arrival, our professionals will thoroughly assess the extent of the water damage,
                                identify any potential hazards, and determine what can be salvaged. If needed, we will also
                                help stop the source of the water damage. This crucial step enables us to devise an
                                effective action plan for successful property restoration.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            3) Water Removal</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">
                                Our service typically begins with a comprehensive extraction of water to prevent its spread
                                and reduce drying time. Using powerful pumps and extraction units, we remove hundreds or
                                even thousands of gallons of water during this process.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            4) Damaged Material Removal</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">
                                If certain materials cannot be restored, we will inform you and promptly remove them to
                                speed up the drying of the restorable materials.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            5) Cleaning, Sanitizing, and Deodorization</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">
                                Water damage often requires cleaning, sanitizing, or deodorizing floors, furniture, and
                                other personal belongings. VR PLUS professionals utilize specially formulated products,
                                top-tier equipment, and proven techniques to address these needs.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            6) Drying</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">
                                After removing the bulk of the water, our specialists employ advanced drying equipment to
                                eliminate hidden moisture within materials, restoring them to their normal moisture levels.
                                This equipment is typically set up during our initial visit and is tailored to your specific
                                situation and industry standards.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            7) Monitoring</div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text">
                                Throughout the drying process, our specialists will visit your property daily to ensure
                                materials are drying correctly, check the performance of drying equipment, and make
                                necessary adjustments. This monitoring is essential for effective and efficient drying.

                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="card  border-2  mb-3 rounded">
                        <div class="card-header bg-vr text-white fw-bold fs-5">
                            8) Repairs and Construction
                        </div>
                        <div class="card-body card-vr-custom">
                            <p class="card-text ">
                                Once these initial steps are completed, your property may require construction work to
                                return it to its pre-loss condition. This can range from minor repairs to rebuilding entire
                                areas. VR PLUS simplifies the restoration process by handling both the initial damage
                                mitigation and the reconstruction, saving you time and reducing costs.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Faq Section -->
    <section id="faq" class="faq  bg-vr-second">

        <div class="container">


            <div class="col-md-12 mb-3">
                <h2 class="fs-2 fw-bolder section-title-h1">
                    Frequently Asked Questions
                </h2>
                <hr>
            </div>

            <div class="row ">

                <div class="col-lg-12">

                    <div class="faq-container">

                        <div class="faq-item rounded-3 faq-active" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>What is water damage restoration?</h3>
                            <div class="faq-content">
                                <p>
                                    Water damage restoration is the process of cleaning, drying, and repairing your property
                                    after it has been affected by water damage. This can include water removal, damage
                                    assessment, and repairs to restore your property to its pre-damage condition.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>How quickly should water damage be addressed? </h3>
                            <div class="faq-content">
                                <p>
                                    Water damage should be addressed as soon as possible to prevent further damage and mold
                                    growth. Quick action helps to minimize the extent of the damage and reduce restoration
                                    costs.
                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>What types of equipment are used in water damage restoration? </h3>
                            <div class="faq-content">
                                <p>
                                    Our water damage restoration experts use advanced equipment such as infrared cameras,
                                    moisture meters, powerful pumps, extraction units, and industrial-grade dehumidifiers to
                                    effectively dry and restore your property.

                                </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="500">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Can water-damaged materials be restored, or do they need to be replaced? </h3>
                            <div class="faq-content">
                                <p>
                                    Many water-damaged materials can be restored if addressed quickly and properly. Our
                                    specialists will assess the damage and determine whether materials can be salvaged or
                                    need to be removed and replaced. </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Does VR PLUS assist with insurance claims for water damage restoration?
                            </h3>
                            <div class="faq-content">
                                <p>Yes, VR PLUS helps manage the necessary paperwork and assists with the insurance claims
                                    process. We work closely with your insurance company to ensure a smooth and hassle-free
                                    claims experience.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item rounded-3" data-aos="fade-up" data-aos-delay="600">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>What certifications do your water damage restoration specialists have?

                            </h3>
                            <div class="faq-content">
                                <p>Our specialists are highly trained and hold IICRC certification in water restoration.
                                    This certification ensures they have the expertise and knowledge to effectively handle
                                    water damage restoration. </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Faq Section -->
@endsection

@section('scripts')
    <script>
        function scrollToText() {
            const collapseElement = document.getElementById('collapseVrRestoration');

        collapseElement.addEventListener('shown.bs.collapse', function () {
            const textToScrollTo = document.getElementById('textToScrollTo');
            textToScrollTo.scrollIntoView({ behavior: 'smooth' });
        });
        }
    </script>
@endsection
