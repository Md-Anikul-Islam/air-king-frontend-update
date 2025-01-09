@extends('frontend.app')
@section('home_content')

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
                                Airking Electrical and Electronics Co. Ltd. Holding Number: 111/1, Ward No: 1, Street Name: Madhabpur Road, Area: Shibramapur, Nagar Bhaban, Gazipur
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
                            Airking Electrical and Electronics Co. Ltd. Holding Number: 111/1, Ward No: 1, Street Name: Madhabpur Road, Area: Shibramapur, Nagar Bhaban, Gazipur
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Branch section end -->

    <!-- Map section Start -->
    <section class="map-section py-120">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h4 class="sub-title">Our Location on Map</h4>
                <h2 class="title">
                    Find Our Location on Map
                </h2>
            </div>
            <!-- map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.348832385361!2d90.25773797590065!3d23.91269868252525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e9edefc0469d%3A0x405b65d31a1f445e!2sSENA%20Shopping%20Complex!5e0!3m2!1sen!2sbd!4v1736429589330!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- map -->
        </div>
    </section>
    <!-- map section end -->
@endsection
