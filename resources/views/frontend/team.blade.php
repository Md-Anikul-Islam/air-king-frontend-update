@extends('frontend.app')
@section('home_content')
<!-- MD message section Start -->
<section class="md-message-section about-section section-bg">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 pe-lg-5">
                <div class="about-img">
                    <img src="{{URL::to('assets/images/about/md.jpg')}}" class="img-fluid w-100" alt="about-img" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content">
                    <div class="section-title">
                        <h6 class="sub-title">MD's Message</h6>
                        <h2 class="title">
                            "Quality is Our Top Priority"
                        </h2>
                    </div>
                    <p class='mt-3'>
                        "At Air King Electrical & Electronic Co. Ltd., we are committed to providing innovative and
                        cost-effective solutions to our valued customers. Our mission is to be a leader in the field of
                        Electrical and Electronics Engineering by offering high-quality products and services that meet
                        the needs of our customers. We strive to continuously improve our products and services through
                        research and development, while maintaining a strong focus on customer satisfaction and safety."
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MD message section end -->

<!-- Chairman message section Start -->
<section class="about-section chairman-msg-section py-120">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 order-2 order-md-1">
                <div class="about-content">
                    <div class="section-title">
                        <h6 class="sub-title">Chairman's Message</h6>
                        <h2 class="title">
                            "Innovate for a Better Tomorrow"
                        </h2>
                    </div>
                    <p class='mt-2'>
                        "At Air King Electrical & Electronic Co. Ltd., we believe in driving progress and innovation to
                        build a better future. Our commitment is to deliver excellence in every product and service we
                        offer, ensuring that we meet the evolving needs of our customers. We are dedicated to fostering
                        a culture of integrity, quality, and sustainability, while continuously striving to enhance
                        customer satisfaction and trust."
                    </p>
                </div>
            </div>
            <div class="col-md-6 ps-lg-5 order-1 order-md-2">
                <div class="about-img">
                    <img src="{{URL::to('assets/images/about/chairman.jpg')}}" class="img-fluid w-100"
                        alt="about-img" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Chairman message section end -->

<!-- team section start -->
<section class="team-section py-120 section-bg">
    <div class="container">
        <div class="section-title text-center mb-1">
            <h2 class="sub-title">Our Team</h2>
        </div>
        <div
            class="row g-3 g-sm-4 align-items-center mt-md-5 justify-content-center justify-content-md-between">
            <div class="col-6 col-lg-4 col-xl-3">
                <div class="team-card p-4 bg-white rounded-3 border-1 border border-primary">
                    <div class="team-content d-flex flex-column align-items-center gap-2">
                        <img src="{{URL::to('assets/images/team/team-img-1.png')}}" class="img-fluid w-100"
                            alt="team-img">
                        <h4 class="team-name">Julia Smith</h4>
                        <p class="team-desc text-center">
                            Asst. Manager
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-xl-3">
                <div class="team-card p-4 bg-white rounded-3 border-1 border border-primary">
                    <div class="team-content d-flex flex-column align-items-center gap-2">
                        <img src="{{URL::to('assets/images/team/team-img-1.png')}}" class="img-fluid w-100"
                            alt="team-img">
                        <h4 class="team-name">Jolly Catherine</h4>
                        <p class="team-desc text-center">
                            Hr Manager
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-xl-3">
                <div class="team-card p-4 bg-white rounded-3 border-1 border border-primary">
                    <div class="team-content d-flex flex-column align-items-center gap-2">
                        <img src="{{URL::to('assets/images/team/team-img-2.png')}}" class="img-fluid w-100"
                            alt="team-img">
                        <h4 class="team-name">John Doe</h4>
                        <p class="team-desc text-center">
                            Project Manager
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-4 col-xl-3">
                <div class="team-card p-4 bg-white rounded-3 border-1 border border-primary">
                    <div class="team-content d-flex flex-column align-items-center gap-2">
                        <img src="{{URL::to('assets/images/team/team-img-1.png')}}" class="img-fluid w-100"
                            alt="team-img">
                        <h4 class="team-name">Jolly Catherine</h4>
                        <p class="team-desc text-center">
                            Factory Manager
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team section start -->
@endsection