<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UBook | Home Page</title>

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="../admins/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../admins/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="../admins/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../admins/css/style.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../customers/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../customers/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../customers/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../customers/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../customers/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../customers/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../customers/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../customers/css/style.css" type="text/css">

    <!-- Stolen -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>



    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">

                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="{{url('admins\index')}}" target="_blank">Admin Panel</a>
                            </div>

                            <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <img class="rounded-circle me-lg-2" src="../admins/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <span class="d-none d-lg-inline-flex">{{Session::get('userLogin')}}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                <a href="{{url('customers/customers-edit/'. Session::get('userLogin'))}}" class="dropdown-item">My Profile</a>
                                <a href="{{url('customers/logout')}}" class="dropdown-item">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
<a href="./index.html"><img src="../customers/img/logo.png" alt=""></a>
                    </div>
                </div>

            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">

                        </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <img src="../customers/product/logo.jpg" style="
                                width: 119px;
                                height: 50px;
                            ">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="indexlog">Home</a></li>
                                <li><a href="shop-grid-log">Shop</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="about-us-log">About Us</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-log">Contact</a></li>
                                <li><a href="{{url('customers/customers-edit-A/'. Session::get('userLogin'))}}">Profile</a></li>
                            </ul>
                        </nav>
                    </div>
            <div class="container">
                <div class="row">


                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
        <!-- Header Section End -->

        <!-- Hero Section Begin -->
        <section class="hero hero-normal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="hero__categories">
                            <div class="hero__categories__all">
                                <i class="fa fa-bars"></i>
                                <span>All departments</span>
                            </div>
                            <ul>
                                <li><a href="#">Em Ai El Eff</a></li>
                                <li><a href="#">En tee Er</a></li>
                                <li><a href="#">Local Milk Nir Mii</a></li>
                                <li><a href="#">Baal Koo Nein Peeko</a></li>
                                <li><a href="#">Hide Skull Dee Iks Dee</a></li>
                                <li><a href="#">Chapter 16.5</a></li>
                                <li><a href="#">Seno Demo Sonnan Ja Dame</a></li>
                                <li><a href="#">Your Sugar No Source Bra</a></li>
                                <li><a href="#">Aim Horn-E</a></li>
                                <li><a href="#">A</a></li>
                                <li><a href="#">Segs Brutal</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">

                        <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                            <div class="hero__text">
                                <span>AUTHENTIC BOOK</span>
                                <h2>Book <br />100% Refund Counterfeit Goods</h2>
                                <p>Free Pickup and Delivery Available</p>
                                <a href="shop-grid" class="primary-btn">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->
<!--                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form> -->

                            <div class="container">

                                <div class="row">
                                    <div class="col-sm-2">

                                        @if(session('cart'))
                                            <a href="shopping-cart" class="btn btn-primary  mt-3 mb-3 btn-block">

                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                 Cart
                                                <!-- this code count product of choose tha user choose -->

                                                <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                                            </a>
                                    </div>


                                    <div class="col-sm-4 text-center">

                                            @if(session('success'))
                                                <p class="btn-success  mt-3 mb-3 btn-block session" style='padding: .375rem .75rem;'>
                                                  {{ session('success') }}
                                                </p>
                                    </div>

                                            @endif
                                   <!-- if user dont choose any product -->
                                            @else

                                                <a href="shopping-cart" class="btn text-light bg-warning mt-3 mb-3" role="button">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                Cart Empty
                                                </a>

                                                @endif



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <section class="categories">
                                <div class="container">
                                    <div class="row">
                                        <div class="categories__slider owl-carousel">


                                                    @foreach ($data as $product)
                                                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                                                        <div class="featured__item">
                                                            <div class="featured__item__pic set-bg" data-setbg="../customers/product/{{$product->productImage}}">
                                                                <ul class="featured__item__pic__hover">
                                                                    <li><a href="{{ url('customers/AddToCart'.$product->productID) }}"><i class="fa fa-shopping-cart"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="featured__item__text">
                                                                <h6><a href="#">{{$product->productName}}</a></h6>
                                                                <h5>${{$product->productPrice}}</h5>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    @endforeach


                                        </div>
                                    </div>
                                </div>
                            </section>
    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($data as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="../customers/product/{{$product->productImage}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="{{ url('customers/AddToCart'.$product->productID) }}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">{{$product->productName}}</a></h6>
                            <h5>${{$product->productPrice}}</h5>
                        </div>
                    </div>
                </div>

                @endforeach




    <!-- Js Plugins -->
    <script src="../customers/js/jquery-3.3.1.min.js"></script>
    <script src="../customers/js/bootstrap.min.js"></script>
    <script src="../customers/js/jquery.nice-select.min.js"></script>
    <script src="../customers/js/jquery-ui.min.js"></script>
    <script src="../customers/js/jquery.slicknav.js"></script>
    <script src="../customers/js/mixitup.min.js"></script>
    <script src="../customers/js/owl.carousel.min.js"></script>
    <script src="../customers/js/main.js"></script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../adminds/js/main.js"></script>

</body>

</html>
