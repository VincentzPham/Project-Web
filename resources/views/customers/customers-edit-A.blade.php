<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UBook | Edit Customer</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap')}}"/>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{asset('ogani/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('ogani/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('ogani/css/elegant-icons.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('ogani/css/nice-select.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('ogani/css/jquery-ui.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('ogani/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('ogani/css/slicknav.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('ogani/css/style.css')}}"/>

</head>

<body>
    <!-- Page Preloder -->
    <!--<div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->

    <!-- Humberger End -->

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
                                <img class="rounded-circle me-lg-2" src="../product/user.jpg" alt="" style="width: 40px; height: 40px;">
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
<a href="./index.html"><img src="../customers/logoimg/logo.png" alt=""></a>
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
                            <img src="../logoimg/logo.jpg" style="
                                width: 119px;
                                height: 50px;
                            ">
                            <link rel="stylesheet" href="{{asset('../customers/logoimg/logo.jpg')}}"/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="{{ url('customers/indexlog') }}">Home</a></li>
                                <li><a href="{{ url('customers/shop-grid-log') }}">Shop</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="header__menu__dropdown">
                                        <li><a href="{{ url('customers/about-us-log') }}">About Us</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('customers/contact-log') }}">Contact</a></li>
                                <li class="active"><a href="{{url('customers/customers-edit-A/'. Session::get('userLogin'))}}">Profile</a></li>
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

            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Profile</h4>
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ url('customer-update') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input type="text" name="customerEmail" value="{{ $data->customerEmail }}"
                                    readonly>
                            </div>
                            <div class="checkout__input">
                                <p>Name<span>*</span></p>
                                <input type="text" name="customerName" cols="30" rows="7"
                                    value="{{ $data->customerName }}">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" name="customerAddress" cols="30" rows="7"
                                    value="{{ $data->customerAddress }}">
                            </div>
                            <div class="checkout__input">
                                <p>Phone<span>*</span></p>
                                <input type="text" name="customerPhone" cols="30" rows="7"
                                    value="{{ $data->customerPhone }}">
                            </div>
                            <div class="md-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ url('customers/indexlog') }}" class="btn btn-danger">Back</a>
                            </div>
                </form>
            </div>
        </div>
    </section>


    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('js/mixitup.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>



</body>

</html>
