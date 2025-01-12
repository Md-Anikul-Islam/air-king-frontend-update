@extends('frontend.app')
@section('home_content')

    <!-- Upcoming section Start -->
    <section class="upcoming-section py-120 mt-5 mt-lg-2">
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


    <section class="product-section py-120 section-bg">
        <div class="container">
            <div class="section-title text-center mb-1">
                <h2 class="sub-title">Our Products</h2>
            </div>
            <div class="row g-4 mt-5">
                <!-- Product 1: Hi-Cool -->
                <div class="col-6 col-md-4">
                    <form action="{{route('product.request')}}" method="post" id="product-form-1">
                        @csrf
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
                                    <input type="hidden" name="product_name" value="Hi-Cool">
                                </div>
                                <button type="button" class="btn btn-outline-primary text-nowrap buy-btn mt-1 mt-lg-0" data-bs-toggle="modal" data-bs-target="#buyModal" data-product="Hi-Cool">Request To Buy</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Product 2: FanMaster -->
                <div class="col-6 col-md-4">
                    <form action="{{route('product.request')}}" method="post" id="product-form-2">
                        @csrf
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
                                    <input type="hidden" name="product_name" value="Deluxe Classic">
                                </div>
                                <button type="button" class="btn btn-outline-primary text-nowrap buy-btn mt-1 mt-lg-0" data-bs-toggle="modal" data-bs-target="#buyModal" data-product="Deluxe-Classic">Request To Buy</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Product 3: AirFlow -->
                <div class="col-6 col-md-4">
                    <form action="{{route('product.request')}}" method="post" id="product-form-3">
                        @csrf
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
                                    <input type="hidden" name="product_name" value="Deluxe">
                                </div>
                                <button type="button" class="btn btn-outline-primary text-nowrap buy-btn mt-1 mt-lg-0" data-bs-toggle="modal" data-bs-target="#buyModal" data-product="Deluxe">Request To Buy</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-6 col-md-4">
                    <form action="{{route('product.request')}}" method="post">
                        @csrf
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
                                    <input type="hidden" name="product_name" value="Deluxe Popular">
                                </div>
                                <button type="button" class="btn btn-outline-primary text-nowrap buy-btn mt-1 mt-lg-0" data-bs-toggle="modal" data-bs-target="#buyModal" data-product="Deluxe-Popular">Request To Buy</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-6 col-md-4">
                    <form action="{{route('product.request')}}" method="post">
                        @csrf
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
                                    <input type="hidden" name="product_name" value="Deluxe Smart">
                                </div>
                                <button type="button" class="btn btn-outline-primary text-nowrap buy-btn mt-1 mt-lg-0" data-bs-toggle="modal" data-bs-target="#buyModal" data-product="Deluxe-Smart">Request To Buy</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-6 col-md-4">
                    <form action="{{route('product.request')}}" method="post">
                        @csrf
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
                                    <input type="hidden" name="product_name" value="Deluxe Mini">
                                </div>
                                <button type="button" class="btn btn-outline-primary text-nowrap buy-btn mt-1 mt-lg-0" data-bs-toggle="modal" data-bs-target="#buyModal" data-product="Deluxe-Mini">Request To Buy</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="buyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buyModalLabel">Request to Buy</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('product.request')}}" method="post">
                        @csrf
                        <input type="hidden" name="product_name" id="modal-product-name">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" required></textarea>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Submit Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Capture the product name and set it in the modal form
        const modal = document.getElementById('buyModal');
        modal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget; // Button that triggered the modal
            const productName = button.getAttribute('data-product'); // Extract info from data attributes
            const modalProductName = modal.querySelector('#modal-product-name');
            modalProductName.value = productName;
        });
    </script>

@endsection
