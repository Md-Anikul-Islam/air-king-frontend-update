@extends('frontend.app')
@section('home_content')
    <!-- Banner Section Start -->
    <section class="banner-section">
        <div class="banner-slider">
            <div>
                <img
                    src="{{URL::to('assets/images/banner/slider-1.jpg')}}"
                    class="object-fit-contain w-100"
                    alt="banner-img"
                />
            </div>
        </div>
    </section>
    <!-- Banner section end -->
    <!-- About section Start -->
    <section class="about-section py-120 section-bg">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 pe-lg-5">
                    <div class="about-img">
                        <img
                            src="{{URL::to('assets/images/about/about-img-1.webp')}}"
                            class="img-fluid w-100"
                            alt="about-img"
                        />
                    </div>
                </div>
                <div class="col-md-6">
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
                            <a href="./about.html" class="learn-more">Learn More..</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end -->

    <!-- Upcoming section Start -->
    <section class="upcoming-section py-120">
        <div class="container">
            <div class="section-title text-center mb-1">
                <h2 class="sub-title">Our Upcoming Product</h2>
            </div>
            <div
                class="row align-items-center mt-md-5 justify-content-center gap-2 gap-md-0 justify-content-md-between"
            >
                <div
                    class="col-5 col-md-4 col-lg-2 text-center p-3 shadow-sm rounded value-card"
                >
                    <div class="mb-1 fs-1">
                        <img
                            src="{{URL::to('assets/images/upcoming-product/upcoming-product-1.jpeg')}}"
                            alt="upcoming-product-1"
                            class="img-fluid object-fit-contain"
                        />
                    </div>
                    <h4 class="">A.K. Mobile</h4>
                </div>
                <div
                    class="col-5 col-md-4 col-lg-2 text-center p-3 shadow-sm rounded value-card"
                >
                    <div class="mb-1 fs-1">
                        <img
                            src="{{URL::to('assets/images/upcoming-product/upcoming-product-2.jpg')}}"
                            alt="upcoming-product-2"
                            class="img-fluid object-fit-contain"
                        />
                    </div>
                    <h4 class="">A.K. Television</h4>
                </div>
                <div
                    class="col-5 col-md-4 col-lg-2 text-center p-3 shadow-sm rounded value-card"
                >
                    <div class="mb-1 fs-1">
                        <img
                            src="{{URL::to('assets/images/upcoming-product/upcoming-product-3.jpg')}}"
                            alt="upcoming-product-3"
                            class="img-fluid object-fit-contain"
                        />
                    </div>
                    <h4 class="">A.K. Fridge</h4>
                </div>
                <div
                    class="col-5 col-md-4 col-lg-2 text-center p-3 shadow-sm rounded value-card"
                >
                    <div class="mb-1 fs-1">
                        <img
                            src="{{URL::to('assets/images/upcoming-product/upcoming-product-4.jpg')}}"
                            alt="upcoming-product-6"
                            class="img-fluid object-fit-contain"
                        />
                    </div>
                    <h4 class="">A.K. Air Condition</h4>
                </div>
                <div
                    class="col-5 col-md-4 col-lg-2 text-center p-3 shadow-sm rounded value-card"
                >
                    <div class="mb-1 fs-1">
                        <img
                            src="{{URL::to('assets/images/upcoming-product/upcoming-product-5.jpeg')}}"
                            alt="upcoming-product-5"
                            class="img-fluid object-fit-contain"
                        />
                    </div>
                    <h4 class="">A.K. Anamel Wire</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Upcoming section end -->

    <!-- Product section Start -->
    <section class="product-section py-120 section-bg">
        <div class="container">
            <div class="section-title text-center mb-1">
                <h2 class="sub-title">Our Products</h2>
            </div>
            <div class="row g-4 mt-5">
                <div class="col-6 col-md-4">
                    <div class="product-card">
                        <div class="product-img">
                            <img
                                src="{{URL::to('assets/images/product/fan-img-1.png')}}"
                                class="img-fluid w-100"
                                alt="product-img"
                            />
                        </div>
                        <div class="product-content">
                            <h4 class="product-title">Hi-Cool</h4>
                            <p class="product-desc">
                                Aluminium (56")
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="product-card">
                        <div class="product-img">
                            <img
                                src="{{URL::to('assets/images/product/fan-img-2.png')}}"
                                class="img-fluid w-100"
                                alt="product-img"
                            />
                        </div>
                        <div class="product-content">
                            <h4 class="product-title">Deluxe Classic</h4>
                            <p class="product-desc">
                                Aluminium (56")
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="product-card">
                        <div class="product-img">
                            <img
                                src="{{URL::to('assets/images/product/fan-img-3.png')}}"
                                class="img-fluid w-100"
                                alt="product-img"
                            />
                        </div>
                        <div class="product-content">
                            <h4 class="product-title">Deluxe</h4>
                            <p class="product-desc">
                                Aluminium (56")
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="product-card">
                        <div class="product-img">
                            <img
                                src="{{URL::to('assets/images/product/fan-img-4.png')}}"
                                class="img-fluid w-100"
                                alt="product-img"
                            />
                        </div>
                        <div class="product-content">
                            <h4 class="product-title">Deluxe Popular</h4>
                            <p class="product-desc">
                                Steel (56")
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="product-card">
                        <div class="product-img">
                            <img
                                src="{{URL::to('assets/images/product/fan-img-5.png')}}"
                                class="img-fluid w-100"
                                alt="product-img"
                            />
                        </div>
                        <div class="product-content">
                            <h4 class="product-title">Deluxe Smart</h4>
                            <p class="product-desc">
                                Aluminium (36")
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="product-card">
                        <div class="product-img">
                            <img
                                src="{{URL::to('assets/images/product/fan-img-6.png')}}"
                                class="img-fluid w-100"
                                alt="product-img"
                            />
                        </div>
                        <div class="product-content">
                            <h4 class="product-title">Deluxe Mini</h4>
                            <p class="product-desc">
                                Steel (36")
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product section end -->

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
                                এয়ারকিং ইলেকট্রিক্যাল এন্ড ইলেকট্রনিক্স কোঃ লিঃ মালিকের নামঃ মোঃ হাবিবুর রহমান, হোল্ডিং নম্বরঃ ১১১/১, ওয়ার্ড নংঃ ১, রাস্তার নামঃ মাধবপুর রোড, মহল্লাঃ শিবরামপুর,নগর ভবন, গাজীপুর
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
                                এয়ারকিং ইলেকট্রিক্যাল এন্ড ইলেকট্রনিক্স কোঃ লিঃ মালিকের নামঃ মোঃ হাবিবুর রহমান, হোল্ডিং নম্বরঃ ১১১/১, ওয়ার্ড নংঃ ১, রাস্তার নামঃ মাধবপুর রোড, মহল্লাঃ শিবরামপুর,নগর ভবন, গাজীপুর
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Branch section end -->
@endsection
