@extends('frontend.app')
@section('home_content')
    <!-- About section Start -->
    <section class="about-section py-120 mt-5 mt-lg-2">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 pe-lg-5 animate__animated animate__backInLeft">
                    <div class="about-img">
                        <img
                            src="{{URL::to('assets/images/about/about-img-1.webp')}}"
                            class="img-fluid w-100"
                            alt="about-img"
                        />
                    </div>
                </div>
                <div class="col-md-6 animate__animated animate__backInRight">
                    <div class="about-content">
                        <div class="section-title">
                            <h6 class="sub-title">About Us</h6>
                            <h2 class="title">
                                Air King Electrical & Electronic Co. Ltd.
                            </h2>
                        </div>
                        <p>
                            With a firm commitment to advancing this technology-driven
                            world in a new dimension and brightening the future of
                            developing Bangladesh using local technology, our journey
                            begins with unwavering determination. Located in the renowned
                            industrial area of Madhabpur, Kashimpur (near Zirani Bazaar)
                            in Gazipur, on its own expansive land, "Air King Electrical
                            and Electronic Company Ltd." emerges as a prominent entity.
                            This is a Private Limited Company registered under the Joint
                            Stock Companies of the Government of Bangladesh.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end -->

    <!-- Branch section Start -->
    <section class="branch-section py-120 section-bg">
        <div class="container">
            <div class="section-title text-center mb-1">
                <h4 class="sub-title">Our Branches</h4>
                <h2 class="title">
                    Connecting You Through Our Nationwide Presence
                </h2>
            </div>
            <div class="row mt-3 mt-lg-5 g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="branch-card p-5 bg-white rounded-3 border-1 border border-primary">
                        <div class="branch-content d-flex flex-column align-items-center gap-2">
                            <h4 class="branch-title">Head Office</h4>
                            <p class="branch-desc text-center">
                                Shena Shopping Complex, Shop No: E-74, 5th Floor, Nabinagar,
                                Savar, Dhaka
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="branch-card p-5 bg-white rounded-3 border-1 border border-primary">
                        <div class="branch-content d-flex flex-column align-items-center gap-2">
                            <h4 class="branch-title">Sylhet Office</h4>
                            <p class="branch-desc text-center">
                                Al-Fala Complex (2nd Floor), Laal Bazar, Zinda Bazar, Sylhet
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="branch-card p-5 bg-white rounded-3 border-1 border border-primary">
                        <div class="branch-content d-flex flex-column align-items-center gap-2">
                            <h4 class="branch-title">Factory</h4>
                            <p class="branch-desc text-center">
                                Madhobpur, Kashimpur, Gazipur, Bangladesh
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Branch section end -->

    <!-- Why-us section Start -->
    <section class="why-us py-120">
        <div class="container">
            <div class="section-title text-center mb-1">
                <h4 class="sub-title">Why We?</h4>
                <h2 class="title">
                    Discover What Sets Us Apart
                </h2>
            </div>
            <div class="row mt-2 mt-lg-5 g-4">
                <div class="col-md-6">
                    <div class="why-us-content p-2">
                        <h3 class="why-title">What Makes Air King Ceiling Fans Different from Other Fans:</h3>
                        <ul class="list-unstyled why-list">
                            <li class="why-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Fully designed by BSc. Engineers.</span>
                            </li>
                            <li class="why-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Fan quality is consistently monitored under the supervision of skilled engineers.</span>
                            </li>
                            <li class="why-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Airflow is tested in a digital air lab, the first of its kind in Bangladesh.</span>
                            </li>
                            <li class="why-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Experienced engineers are constantly working to improve fan quality through R&D.</span>
                            </li>
                            <li class="why-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Armature winding, paper insertion, and wedge insertion are precisely done using CNC machines.</span>
                            </li>
                            <li class="why-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Quality control certified by BSTI.</span>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="why-us-content p-2">
                        <h3 class="why-title">Why Choose Air King Ceiling Fan:</h3>
                        <ul class="list-unstyled why-list">
                            <li class="why-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Crafted with attractive designs and a variety of colors.</span>
                            </li>
                            <li class="why-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Operates vibration-free and silently.</span>
                            </li>
                            <li class="why-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Ensures a constant flow of cool air.</span>
                            </li>
                            <li class="why-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Made with high-quality materials for long-lasting performance.</span>
                            </li>
                            <li class="why-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Energy-efficient, saving electricity.</span>
                            </li>
                            <li class="why-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Armature winding is done with 100% pure copper wire manufactured in-house.</span>
                            </li>
                            <li class="why-item">
                                <i class="fa-solid fa-check"></i>
                                <span>High power factor ≥ 0.9 for optimal performance.</span>
                            </li>
                            <li class="why-item">
                                <i class="fa-solid fa-check"></i>
                                <span>Made with double-Z bearings, high-voltage resistant capacitors, and superior raw materials.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why-us section end -->

@endsection
