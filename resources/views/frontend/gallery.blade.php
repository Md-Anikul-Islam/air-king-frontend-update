@extends('frontend.app')
@section('home_content')
<style>
    /* Apply to all images inside the gallery */
    .gallery-section img {
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    /* Hover effect */
    .gallery-section img:hover {
        transform: scale(1.05);
        /* Slight zoom effect */
        opacity: 0.9;
        /* Slight fade effect */
    }
</style>
<!-- Gallery -->
<section class="gallery-section py-120 mt-5 mt-lg-2">
    <div class="container">
        <div class="section-title text-center mb-lg-5 mb-3">
            <h2 class="sub-title">Explore Our Gallery</h2>
            <h2 class="title">
                Discover The Beauty of Our Memories
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                    class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
            </div>
        </div>
    </div>
</section>

<!-- Gallery -->
@endsection