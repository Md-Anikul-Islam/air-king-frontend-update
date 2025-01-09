@extends('frontend.app')
@section('home_content')

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
                        <div class="product-content px-lg-2 d-flex justify-content-between align-items-center flex-column flex-lg-row">
                            <div>
                                <h4 class="product-title">Hi-Cool</h4>
                                <p class="product-desc">
                                    Aluminium (56")
                                </p>
                            </div>
                            <a href="" class="btn btn-outline-primary text-nowrap buy-btn mt-1 mt-lg-0">Request To Buy</a>
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
                        <div class="product-content px-lg-2 d-flex justify-content-between align-items-center flex-column flex-lg-row">
                            <div>
                                <h4 class="product-title">Deluxe Classic</h4>
                                <p class="product-desc">
                                    Aluminium (56")
                                </p>
                            </div>
                            <a href="" class="btn btn-outline-primary text-nowrap buy-btn mt-1 mt-lg-0">Request To Buy</a>
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
                        <div class="product-content px-lg-2 d-flex justify-content-between align-items-center flex-column flex-lg-row">
                            <div>
                                <h4 class="product-title">Deluxe</h4>
                                <p class="product-desc">
                                    Aluminium (56")
                                </p>
                            </div>
                            <a href="" class="btn btn-outline-primary text-nowrap buy-btn mt-1 mt-lg-0">Request To Buy</a>
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
                        <div class="product-content px-lg-2 d-flex justify-content-between align-items-center flex-column flex-lg-row">
                            <div>
                                <h4 class="product-title">Deluxe Popular</h4>
                                <p class="product-desc">
                                    Steel (56")
                                </p>
                            </div>
                            <a href="" class="btn btn-outline-primary text-nowrap buy-btn mt-1 mt-lg-0">Request To Buy</a>
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
                        <div class="product-content px-lg-2 d-flex justify-content-between align-items-center flex-column flex-lg-row">
                            <div>
                                <h4 class="product-title">Deluxe Smart</h4>
                                <p class="product-desc">
                                    Aluminium (36")
                                </p>
                            </div>
                            <a href="" class="btn btn-outline-primary text-nowrap buy-btn mt-1 mt-lg-0">Request To Buy</a>
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
                        <div class="product-content px-lg-2 d-flex justify-content-between align-items-center flex-column flex-lg-row">
                            <div>
                                <h4 class="product-title">Deluxe Mini</h4>
                                <p class="product-desc">
                                    Steel (36")
                                </p>
                            </div>
                            <a href="" class="btn btn-outline-primary text-nowrap buy-btn mt-1 mt-lg-0">Request To Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product section end -->
@endsection
