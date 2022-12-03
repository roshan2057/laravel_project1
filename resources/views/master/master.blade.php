<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="view/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>E-stationery</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">



    <!-- Font Family link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">


<!-- bootstrap css -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<!-- style css -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<!-- Responsive-->
<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets -->
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!-- ==============================Bootstrap Icon CDN Link===============================================-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>

<body>




    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span style="color: orangered;">E</span>-Stationery
                <img src="#" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Collection</a>
                    </li>
                 
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Log out</a>
                    </li>



                    </a>

                </ul>
                <form class="d-flex">
                    <input class="form-control search me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>

   

              
@yield('content')

    <h1>Footter</h1>



    <script src="view/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>






    <div class="section_footer">
        <div class="container">
            <div class="mail_section">
                <div class="row">
                    <div class="col-sm-6 col-lg-2">
                        <div><a href="#"><img src="view/images_for_collection/e-stationery logo.png"></a></div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="footer-logo"><img src="view/images_for_collection/phone-icon.png"><span class="map_text">(71) 1234567890</span></div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-logo"><img src="view/images_for_collection/email-icon.png"><span class="map_text">Kumarbhetwal25gmail.com</span></div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="view/images_for_collection/fb-icon.png"></a></li>
                                <li><a href="#"><img src="view/images_for_collection/twitter-icon.png"></a></li>

                                <li><a href="#"><img src="view/images_for_collection/google-icon.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-sm-4 col-lg-2">
                        <p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur ipsum dolor sit amet,</p>
                    </div>
                    <div class="col-sm-4 col-lg-2">
                        <h2 class="shop_text">Address </h2>
                        <div class="image-icon"><img src="view/images_for_collection/map-icon.png"><span class="pet_text">Chitwan, Parsa Nepal</span></div>
                    </div>
                    <div class="col-sm-4 col-md-6 col-lg-3">
                        <h2 class="shop_text">Our Company </h2>
                        <div class="delivery_text">
                            <ul>
                                <li>Delivery</li>
                                <li>Legal Notice</li>
                                <li>About us</li>
                                <li>Secure payment</li>
                                <li>Contact us</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h2 class="adderess_text">Products</h2>
                        <div class="delivery_text">
                            <ul>
                                <li>Prices drop</li>
                                <li>New products</li>
                                <li>Best sales</li>
                                <li>Contact us</li>
                                <li>Sitemap</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <h2 class="adderess_text">Newsletter</h2>
                        <div class="form-group">
                            <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                        </div>
                        <button class="subscribr_bt">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>