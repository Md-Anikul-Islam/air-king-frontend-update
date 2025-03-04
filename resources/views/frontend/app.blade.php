<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0, user-scalable=yes"
    />
    <title>AirKing - An Electrical & Electronic Co. Ltd.</title>

    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="./assets/images/favicon.png"
    />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/fontawsome/css/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
</head>

<body>
<!-- Header section start -->
<header class="header-section" id="sticky-header">
    <nav class="navbar navbar-expand-xl d-none d-xl-flex">
        <div class="container navbar-main">
            <a class="navbar-brand" href="/">
                <img
                    src="{{URL::to('assets/images/logo/logo.png')}}"
                    style="max-width: 70px"
                    class="img-fluid"
                    alt="logo"
                />
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"
                        >Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('product')}}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Our Team <i class="fa-solid fa-angle-down"></i>
                    </a>
                        <ul class="sub-menu list-unstyled">
                            <li><a href="{{route('team')}}">Executive Team</a></li>
                            <li><a href="{{route('gallery')}}">Gallery</a></li>
                        </ul>
                    </li>
                </ul>
                <a
                    href="tel:+8801615755001"
                    class="call-to-action d-flex align-items-center"
                >
                    <div class="icon rounded-pill">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="info">
                        <p>Want A Discount?</p>
                        <h6>+880 1615-755001</h6>
                    </div>
                </a>
            </div>
        </div>
    </nav>

    <!-- mobile navbar part start -->
    <div class="mobile-menu-area d-block d-xl-none">
        <div class="container">
            <!-- mobile topbar -->
            <div class="mobile-topbar">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="/">
                            <img
                                src="{{URL::to('assets/images/logo/logo.png')}}"
                                style="max-width: 70px"
                                class="img-fluid"
                                alt="logo"
                            />
                        </a>
                    </div>
                    <div class="bars">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="mobile-menu-overlay"></div>
        <div class="mobile-menu-main">
            <div class="d-flex align-items-center justify-content-between pe-2">
                <div class="logo">
                    <a href="/">
                        <img
                            src="{{URL::to('assets/images/logo/logo.png')}}"
                            style="width: 100px"
                            class="img-fluid"
                            alt="logo"
                        />
                        <!-- <h2 class="">Air King</h2> -->
                    </a>
                </div>
                <div class="close-mobile-menu"><i class="fas fa-times"></i></div>
            </div>
            <div class="menu-body">
                <div class="menu-list">
                    <ul class="list-unstyled">
                        <li class="sub-mobile-menu">
                            <a href="/">Home </a>
                        </li>
                        <li class="sub-mobile-menu">
                            <a href="{{route('about')}}">About Us</a>
                        </li>
                        <li class="sub-mobile-menu">
                            <a href="{{route('product')}}">Products </a>
                        </li>
                        <li class="sub-mobile-menu">
                            <a href="{{route('contact')}}">Contact</a>
                        </li>
                        <li class="sub-mobile-menu">
                            <a>Our Team <i class="fas fa-chevron-down float-end"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('team')}}">Executive Team</a></li>
                                <li><a href="{{route('gallery')}}">Gallery</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="call-us p-4">
                <a
                    href="tel:+8801615755001"
                    class="call-to-action d-flex align-items-center"
                >
                    <div
                        class="icon d-flex justify-content-center align-items-center rounded-pill"
                    >
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="info">
                        <p class="help">Want A Discount?</p>
                        <h5 class="number">+880 1615-755001</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- mobile navbar part end -->
</header>
<!-- Header section end -->
<!-- Main area Start -->
<main>
    @yield('home_content')
</main>
<!-- Main area end -->
<!-- Footer section start -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-top">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="footer-widget">
                        <div class="footer-logo mb-3">
                            <a
                                href="index.html"
                                class="d-flex align-items-center gap-2 text-white fw-bold fs-1"
                            >
                                <img
                                    src="{{URL::to('assets/images/logo/logo.png')}}"
                                    style="max-width: 70px"
                                    class="img-fluid"
                                    alt="logo"
                                />
                                Air king
                            </a>
                        </div>
                        <p class="footer-desc">
                            We started our journey with a strong goal to make this
                            technology-driven world better and help develop Bangladesh by
                            using local technology. Our company,
                            <strong
                            >Air King Electrical and Electronic Company Ltd.</strong
                            >, is located on our own large land in Madhabpur, Kashimpur
                            (near Zirani Bazaar) in Gazipur. It is a Private Limited
                            Company registered with the Government of Bangladesh.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 d-lg-flex justify-content-center">
                    <div class="footer-widget">
                        <h4 class="widget-title">Quick Links</h4>
                        <ul class="list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="product.html">Products</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-widget">
                        <h4 class="widget-title">Contact Us</h4>
                        <ul class="list-unstyled">
                            <li class="d-flex gap-2 align-items-start">
                                <i class="fa-solid fa-map-marker mt-2"></i>
                                <span
                                >Airking Electrical and Electronics Co. Ltd. Holding Number: 111/1, Ward No: 1, Street Name: Madhabpur Road, Area: Shibramapur, Nagar Bhaban, Gazipur</span
                                >
                            </li>
                            <li class="d-flex gap-2 align-items-center">
                                <i class="fa-solid fa-envelope"></i>

                                <a href="mailto:airkingbd@gmail.com" class="text-lowercase">airkingbd@gmail.com</a>
                            </li>
                            <li class="d-flex gap-2 align-items-center">
                                <i class="fa-solid fa-phone"></i>

                                <a href="tel:+8801615755001">(+880)1615-755001</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer section end -->

<!-- All Js File -->
<script src="{{asset('assets/js/vendor/jquery-3.6.4.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
