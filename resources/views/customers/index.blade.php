<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UBook | Home Page</title>

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

                            <div class="header__top__right__auth">
                                <a href="{{url('customers/login')}}"><i class="fa fa-user"></i> Login</a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="{{url('customers/register')}}"><i class="fa fa-user-plus"></i> Register</a>
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
                        <img src="../customers/product/logo.jpg" style="
                            width: 119px;
                            height: 50px;
                        ">
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="shop-grid">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="about-us">About Us</a></li>
                                </ul>
                            </li>

                            <li><a href="contact">Contact</a></li>
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

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">


                            @foreach ($data as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                                <div class="featured__item">
                                    <div class="featured__item__pic set-bg" data-setbg="../customers/product/{{$product->productImage}}">
                                        <ul class="featured__item__pic__hover">
                                            <li><a href="{{url('customers/login')}}"><i class="fa fa-shopping-cart"></i></a></li>
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
    <!-- Categories Section End -->


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
                                <li><a href="{{url('customers/login')}}"><i class="fa fa-shopping-cart"></i></a></li>
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
    </section>







    <!-- Js Plugins -->
    <script src="../customers/js/jquery-3.3.1.min.js"></script>
    <script src="../customers/js/bootstrap.min.js"></script>
    <script src="../customers/js/jquery.nice-select.min.js"></script>
    <script src="../customers/js/jquery-ui.min.js"></script>
    <script src="../customers/js/jquery.slicknav.js"></script>
    <script src="../customers/js/mixitup.min.js"></script>
    <script src="../customers/js/owl.carousel.min.js"></script>
    <script src="../customers/js/main.js"></script>



</body>

</html>
