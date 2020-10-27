<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ToolShop | Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }} ">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    
</head>
<body class="full-wrapper">
    <header>
        <!-- Header Start -->
        <div class="header-area ">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <div class="header-left d-flex align-items-center">
                            <!-- Logo -->
                            <div class="logo">
                            <a href="/"><img width="200px" height="100px" src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Home</a></li> 
                                        <li><a href="shop">shop</a></li>
                                        <li><a href="about">About</a></li>
                                        <li><a href="contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>   
                        </div>
                        <div class="header-right1 d-flex align-items-center">
                            <!-- Social -->
                            <div class="header-social d-none d-md-block">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                            
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
<main>
        <!-- breadcrumb Start-->
        <div class="page-notification">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/shop">Shop</a></li> 
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- listing Area Start -->
        <div class="category-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-50">
                            <h2>Tools Insert</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="col-md-12">
                        <form>
                            <div class="form-group col-md-8">
                                <label for="">Tool Name:</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Tool Name:">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="exampleFormControlSelect1">select category:</label>
                                <div class="form-group col-md-8">
                                    <select class="form-control" id="">
                                    <option>dbfadf dajfhjdf df</option>
                                    <option>dnfabdf fdf</option>
                                    <option>3</option>
                                    <option>4dfdnbf bdf</option>
                                    <option>5 dfdbfb dfjdf</option>
                                    </select>
                                </div>
                            </div>
                            <br/><br/>
                            <div class="form-group col-md-8">
                                <label for="">Rent Cost:</label>
                                <input type="text" class="form-control" id="" placeholder="Enter Tool Category:">
                            </div>
                            <br/><br/>
                            <div class="form-group col-md-8">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            
                        </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    <!-- listing-area Area End -->
    <!--? Popular Items Start -->

        <!-- <div class="popular-items">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/popular1.png') }}" alt="">
                                <div class="img-cap">
                                    <span>Glasses</span>
                                </div>
                                <div class="favorit-items">
                                    <a href="shop.html" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/popular2.png') }}" alt="">
                                <div class="img-cap">
                                    <span>Watches</span>
                                </div>
                                <div class="favorit-items">
                                <a href="shop.html" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/popular3.png') }}" alt="">
                                <div class="img-cap">
                                    <span>Jackets</span>
                                </div>
                                <div class="favorit-items">
                                <a href="shop.html" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="{{ asset('frontend/assets/img/gallery/popular4.png') }}" alt="">
                                <div class="img-cap">
                                    <span>Clothes</span>
                                </div>
                                <div class="favorit-items">
                                <a href="shop.html" class="btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Popular Items End -->
        <!--? Services Area Start -->

        <!-- <div class="categories-area section-padding40 gray-bg">
            <div class="container-fluid">
                <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-cat mb-50">
                                    <div class="cat-icon">
                                        <img src="{{ asset('frontend/assets/img/icon/services1.svg') }}" alt="">
                                    </div>
                                    <div class="cat-cap">
                                        <h5>Fast & Free Delivery</h5>
                                        <p>Free delivery on all orders</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-cat mb-50">
                                    <div class="cat-icon">
                                        <img src="{{ asset('frontend/assets/img/icon/services2.svg') }}" alt="">
                                    </div>
                                    <div class="cat-cap">
                                        <h5>Fast & Free Delivery</h5>
                                        <p>Free delivery on all orders</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-cat mb-30">
                                    <div class="cat-icon">
                                        <img src="{{ asset('frontend/assets/img/icon/services3.svg') }}" alt="">
                                    </div>
                                    <div class="cat-cap">
                                        <h5>Fast & Free Delivery</h5>
                                        <p>Free delivery on all orders</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-cat">
                                    <div class="cat-icon">
                                        <img src="{{ asset('frontend/assets/img/icon/services4.svg') }}" alt="">
                                    </div>
                                    <div class="cat-cap">
                                        <h5>Fast & Free Delivery</h5>
                                        <p>Free delivery on all orders</p>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div> -->

<!--? Services Area End -->
</main>

<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container-fluid ">
            <div class="row d-flex justify-content-between">
                            <div class="col-xl-3 col-lg-3 col-md-8 col-sm-8">
                                <div class="single-footer-caption mb-50">
                                    <div class="single-footer-caption mb-30">
                                        <!-- logo -->
                                        <div class="footer-logo mb-35">
                                            <a href="index.html"><img src="{{ asset('frontend/assets/img/logo/logo2_footer.png') }}" alt=""></a>
                                        </div>
                                        <div class="footer-tittle">
                                                <div class="footer-pera">
                                                    <p>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</p>
                                                </div>
                                        </div>
                                        <!-- social -->
                                        <div class="footer-social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick links</h4>
                                <ul>
                                    <li><a href="#">Image Licensin</a></li>
                                    <li><a href="#">Style Guide</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Shop Category</h4>
                                <ul>
                                    <li><a href="#">Image Licensin</a></li>
                                    <li><a href="#">Style Guide</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Pertners</h4>
                                <ul>
                                    <li><a href="#">Image Licensin</a></li>
                                    <li><a href="#">Style Guide</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Get in touch</h4>
                                <ul>
                                    <li><a href="#">(89) 982-278 356</a></li>
                                    <li><a href="#">demo@colorlib.com</a></li>
                                    <li><a href="#">67/A, Colorlib, Green road, NYC</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  <!-- Footer End-->
</footer>
    <!--? Search model Begin -->
    <div class="search-model-box">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-btn">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Searching key.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

<!-- JS here -->
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>

<!-- Slick-slider , Owl-Carousel ,slick-nav -->
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.slicknav.min.js')}}"></script>

<!-- One Page, Animated-HeadLin, Date Picker -->
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/animated.headline.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('frontend/assets/js/gijgo.min.js')}}"></script>

<!-- Nice-select, sticky,Progress -->
<script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.barfiller.js')}}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/hover-direction-snake.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('frontend/assets/js/contact.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.form.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/mail-script.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>