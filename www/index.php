.<?php
include('Common.php');?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Freak</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

    <!-- All css files are included here -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="css/style-customizer.css">
    <link href="#" data-style="styles" rel="stylesheet">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start of header area -->
   <?php include('Header.php');?>     
   <!-- End of header area -->
        <!-- Start of slider area -->
        <?php include('Slider.php');?>    
        <!-- End of slider area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Banner Area -->
			<?php include('Banner_main.php');?>           
		    <!-- End of Banner Area -->
            <!-- Start Product List -->
			<div class="product-list-tab pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab-menu section-title section-title  mb-30">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">          
                                    <li role="presentation" class="first-item active">
                                        <a href="#arrival" aria-controls="arrival" role="tab" data-toggle="tab">NEW ARRIVAL</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#sale" aria-controls="sale" role="tab" data-toggle="tab">BEST SELES</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#featured" aria-controls="featured" role="tab" data-toggle="tab">MOST WANTED</a>
                                    </li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="product-list tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="arrival">
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/1.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">-30%</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Ripcurl Furry Fleece">Ripcurl Furry Fleece</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 185.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Twill Oversized ">Twill Oversized </a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/2.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label red-color text-uppercase">sale</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Slim Shirt With Stretch">Slim Shirt With Stretch</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 177.00</span>
                                                <span class="old-price">£ 200.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Tomas Box Logo T-Shirt">Tomas Box Logo T-Shirt</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/3.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">New</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Ripcurl Furry Fleece">Ripcurl Furry Fleece</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 38.00</span>
                                                <span class="old-price">£ 45.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/7.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label red-color text-uppercase">sale</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Shirt in Bee Print">Shirt in Bee Print</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-sm">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Skinny In Charcoal">Skinny In Charcoal</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 38.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/8.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">New</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Shirt in Bee Print">Shirt in Bee Print</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="sale">
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/2.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label red-color text-uppercase">sale</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Slim Shirt With Stretch">Slim Shirt With Stretch</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 177.00</span>
                                                <span class="old-price">£ 200.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Tomas Box Logo T-Shirt">Tomas Box Logo T-Shirt</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/3.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">New</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Ripcurl Furry Fleece">Ripcurl Furry Fleece</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 38.00</span>
                                                <span class="old-price">£ 45.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/7.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label red-color text-uppercase">sale</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Shirt in Bee Print">Shirt in Bee Print</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Skinny In Charcoal">Skinny In Charcoal</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 38.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/8.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">New</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Shirt in Bee Print">Shirt in Bee Print</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-sm">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/1.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">-30%</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Ripcurl Furry Fleece">Ripcurl Furry Fleece</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 185.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Twill Oversized ">Twill Oversized </a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="featured">
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Skinny In Charcoal">Skinny In Charcoal</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 38.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/8.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">New</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Shirt in Bee Print">Shirt in Bee Print</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/1.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">-30%</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Ripcurl Furry Fleece">Ripcurl Furry Fleece</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 185.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Twill Oversized ">Twill Oversized </a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 150.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/2.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label red-color text-uppercase">sale</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Slim Shirt With Stretch">Slim Shirt With Stretch</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 177.00</span>
                                                <span class="old-price">£ 200.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Tomas Box Logo T-Shirt">Tomas Box Logo T-Shirt</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-sm">
                                    <div class="single-product mb-40">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/3.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label text-uppercase">New</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Ripcurl Furry Fleece">Ripcurl Furry Fleece</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 38.00</span>
                                                <span class="old-price">£ 45.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-product">
                                        <div class="product-img-content mb-20">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img src="images/product/7.jpg" alt="">
                                                </a>
                                            </div>
                                            <span class="new-label red-color text-uppercase">sale</span>
                                            <div class="product-action text-center">
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="zmdi zmdi-eye"></i>
                                                </a>
                                                <a href="#" title="Add to cart">
                                                    <i class="zmdi zmdi-shopping-cart"></i>
                                                </a>
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="zmdi zmdi-favorite"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-content text-center text-uppercase">
                                            <a href="product-details.html" title="Shirt in Bee Print">Shirt in Bee Print</a>
                                            <div class="rating-icon">
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                                <i class="zmdi zmdi-star-half"></i>
                                            </div>
                                            <div class="product-price">
                                                <span class="new-price">£ 21.65</span>
                                                <span class="old-price">£ 24.60</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        	<!-- End of Product List -->
            <!-- Start Service Area -->
            <div class="service-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="single-item text-white pl-120">
                                <i class="zmdi zmdi-shopping-cart"></i>
                                <h4>FREE SHipping</h4>
                                <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-item text-white pl-120">
                                <i class="zmdi zmdi-headset"></i>
                                <h4>24/7 SUPPORT</h4>
                                <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-item text-white pl-120 rm-0">
                                <i class="zmdi zmdi-balance-wallet"></i>
                                <h4>100% MONEY BACK</h4>
                                <p>Lorem ipsum dolor sit amet, onsectetur adipisicing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Service Area -->
            <!-- Start Sale  Area -->
            <div class="sale-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="section-title text-uppercase mb-40">
                                <h4>on sale</h4>
                            </div>
                            <div class="sale-list">
                                <div class="sinlge-sale mb-30 clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="product-details.html" title="Men’s White Short Item">
                                                    <img src="images/sale/1.jpg" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                    <span class="old-price">£190.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="sinlge-sale mb-30 clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="product-details.html" title="Men’s White Short Item">
                                                    <img src="images/sale/2.jpg" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                    <span class="old-price">£190.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="sinlge-sale clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="product-details.html" title="Men’s White Short Item">
                                                    <img src="images/sale/3.jpg" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                    <span class="old-price">£190.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="section-title text-uppercase mb-40">
                                <h4>Top Rated</h4>
                            </div>
                            <div class="sale-list">
                                <div class="sinlge-sale mb-30 clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="product-details.html" title="Men’s White Short Item">
                                                    <img src="images/sale/4.jpg" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="sinlge-sale mb-30 clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="product-details.html" title="Men’s White Short Item">
                                                    <img src="images/sale/5.jpg" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                    <span class="old-price">£190.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="sinlge-sale clearfix">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="sale-img">
                                                <a href="product-details.html" title="Men’s White Short Item">
                                                    <img src="images/sale/6.jpg" alt="">
                                                </a>
                                                <div class="sale-shop">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="product-content mt-60">
                                                <a href="#" title="Men’s White Short Item">Men’s White Short Item</a>
                                                <div class="rating-icon">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                    <i class="zmdi zmdi-star-half"></i>
                                                </div>
                                                <div class="product-price">
                                                    <span class="new-price">£185.00</span>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm">
                            <div class="offer-banner">
                                <a href="#">
                                    <img src="images/sale/offer.jpg" alt="">
                                </a>
                                <!-- CountDown -->
                                <div class="product-cuntdown white-bg text-center">
                                    <div class="timer">
                                        <div data-countdown="2018/06/01"></div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Sale  Area -->
            <!-- Start Testimonial Area -->
            <div class="testimonial-area">
                <div id="particles-js" class="pt-90 pb-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="testimonial-title text-white text-uppercase text-center mb-40">
                                    <h4>what customer saying</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8">
                                <div class="testimonial-list">
                                    <div class="single-testimonial text-center">
                                        <img alt="" src="images/testimonial/1.jpg">
                                        <div class="testimonial-info white-bg clearfix">
                                            <div class="testimonial-author text-uppercase">
                                                <h5>ANIKA MOLLIK</h5>
                                                <p>chairmen</p>
                                            </div>
                                            <p>consectetur adipisicing elit, sed do eiusmod tempor  incididunt  
    labore et dolore magna aliqua. Ut enim ad minim veniam,voluptate velit esse cillu nulla pariatur. Excepteur sint occaecat</p>
                                        </div>
                                    </div>
                                    <div class="single-testimonial text-center">
                                        <img alt="" src="images/testimonial/2.jpg">
                                        <div class="testimonial-info white-bg clearfix">
                                            <div class="testimonial-author text-uppercase">
                                                <h5>Ashim Kumar</h5>
                                                <p>CEO</p>
                                            </div>
                                            <p>consectetur adipisicing elit, sed do eiusmod tempor  incididunt  
    labore et dolore magna aliqua. Ut enim ad minim veniam,voluptate velit esse cillu nulla pariatur. Excepteur sint occaecat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
            <!-- End of Testimonial Area -->
            <!-- Start Blog Area -->
            <div class="blog-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section-title text-uppercase mb-40">
                                <h4>latest blog</h4>
                            </div>
                        </div>                      
                    </div>
                    <div class="blog-list">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a href="#">
                                            <img alt="" src="images/blog/1.jpg">
                                        </a>
                                    </div>
                                    <div class="blog-content pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="#">Blog Post Dummy Title</a></h5>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                    </div>
                                    <div class="blog-content blog-content-overlay pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="#">Blog Post Dummy Title</a></h5>
                                        <p>Adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim</p>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                        <a href="#" class="button extra-small mt-60 text-uppercase">
                                            <span>Read More</span>
                                        </a>
                                    </div>                                    
                                </div>
                            </div>  
                            <div class="col-md-4 col-sm-6">
                                <div class="single-blog">
                                    <div class="blog-image">
                                        <a href="#">
                                            <img alt="" src="images/blog/2.jpg">
                                        </a>
                                    </div>
                                    <div class="blog-content pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="#">Blog Post Dummy Title</a></h5>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                    </div>
                                    <div class="blog-content blog-content-overlay pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="#">Blog Post Dummy Title</a></h5>
                                        <p>Adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim</p>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                        <a href="#" class="button extra-small mt-60 text-uppercase">
                                            <span>Read More</span>
                                        </a>
                                    </div>                                    
                                </div>
                            </div>  
                            <div class="col-md-4 hidden-sm">
                                <div class="single-blog rm-0">
                                    <div class="blog-image">
                                        <a href="#">
                                            <img alt="" src="images/blog/1.jpg">
                                        </a>
                                    </div>
                                    <div class="blog-content pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="#">Blog Post Dummy Title</a></h5>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                    </div>
                                    <div class="blog-content blog-content-overlay pb-20 text-center">
                                        <div class="date-added mb-20 pt-20"><i class="zmdi zmdi-time mr-10"></i>Date : 26 oct 2016 </div>
                                        <h5><a class="blog-title text-capitalize" href="#">Blog Post Dummy Title</a></h5>
                                        <p>Adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua. Ut enim ad minim</p>
                                        <div class="post-info-author mt-30">
                                            <span class="author mr-20">
                                                <i class="zmdi zmdi-account"></i>
                                                By
                                                <a href="#" title="Posts by admin"> A Mollik </a>
                                            </span>
                                            <span class="comments-count mr-20">
                                                <i class="zmdi zmdi-favorite"></i>
                                                20 Likes
                                            </span>
                                            <span class="comments-count">
                                                <i class="zmdi zmdi-comments"></i>
                                                02 Comments
                                            </span>
                                        </div>
                                        <a href="#" class="button extra-small mt-60 text-uppercase">
                                            <span>Read More</span>
                                        </a>
                                    </div>                                    
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Blog Area -->

   <!-- Start Of Brand Area -->
<?php include('Brand_area.php');?>
   <!-- End Of Brand Area -->
            <!-- Start Newsletter Area -->
<?php include('Newsletter.php');	 ?>    
      <!-- End Of Newsletter Area -->
        </div>
        <!-- End page content -->
        <!-- Start footer area -->
  <?php include('Footer.php');?> 
	  <!-- End footer area -->
  <!--Quickview Product Start -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="single-product-image">
                                    <div id="product-img-content">
                                        <div id="my-tab-content" class="tab-content mb-20">
                                            <div class="tab-pane b-img active" id="view1">
                                                <a class="venobox" href="images/product/product-details/1.jpg" data-gall="gallery" title=""><img src="images/product/product-details/1.jpg" alt=""></a>
                                            </div>
                                            <div class="tab-pane b-img" id="view2">
                                                <a class="venobox" href="images/product/product-details/2.jpg" data-gall="gallery" title=""><img src="images/product/product-details/2.jpg" alt=""></a>
                                            </div>
                                            <div class="tab-pane b-img" id="view3">
                                                <a class="venobox" href="images/product/product-details/3.jpg" data-gall="gallery" title=""><img src="images/product/product-details/3.jpg" alt=""></a>
                                            </div>
                                            <div class="tab-pane b-img" id="view4">
                                                <a class="venobox" href="images/product/product-details/4.jpg" data-gall="gallery" title=""><img src="images/product/product-details/4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div id="viewproduct" class="nav nav-tabs product-view bxslider" data-tabs="tabs">
                                            <div class="pro-view b-img active"><a href="#view1" data-toggle="tab"><img src="images/product/product-details/s-1.jpg" alt=""></a></div>
                                            <div class="pro-view b-img"><a href="#view2" data-toggle="tab"><img src="images/product/product-details/s-2.jpg" alt=""></a></div>
                                            <div class="pro-view b-img"><a href="#view3" data-toggle="tab"><img src="images/product/product-details/s-3.jpg" alt=""></a></div>
                                            <div class="pro-view b-img"><a href="#view4" data-toggle="tab"><img src="images/product/product-details/s-4.jpg" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="product-details-content">
                                    <div class="product-content text-uppercase">
                                        <a href="product-details.html" title="Slim Shirt With Stretch">Slim Shirt With Stretch</a>
                                        <div class="rating-icon pb-20 mt-10">
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                            <i class="zmdi zmdi-star-half"></i>
                                        </div>
                                        <div class="product-price pb-20">
                                            <span class="new-price">£ 185.00</span>
                                            <span class="old-price">£ 200.00</span>
                                        </div>
                                    </div>
                                    <div class="product-view pb-20">
                                        <h4 class="product-details-tilte text-uppercase">overview</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. luptate. </p>
                                    </div>
                                    <div class="product-size text-uppercase pb-30">
                                        <h4 class="product-details-tilte text-uppercase pb-10">size</h4>
                                        <ul>
                                            <li><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                            <li><a href="#">xxl</a></li>
                                        </ul>
                                    </div>
                                    <div class="product-attributes clearfix">
                                        <div class="product-color text-uppercase pb-30">
                                            <h4 class="product-details-tilte text-uppercase pb-10">color</h4>
                                            <ul>
                                                <li class="color-1"><a href="#"></a></li>
                                                <li class="color-2"><a href="#"></a></li>
                                                <li class="color-3"><a href="#"></a></li>
                                                <li class="color-4"><a href="#"></a></li>
                                            </ul>
                                        </div> 
                                        <div class="pull-left" id="quantity-wanted">
                                            <h4 class="product-details-tilte text-uppercase pb-10">quantity</h4>
                                            <input type="number" value="1">  
                                        </div>                                  
                                    </div>
                                    <div class="product-action-shop text-center mb-30">
                                        <a href="#" title="Quick view">
                                            <i class="zmdi zmdi-eye"></i>
                                        </a>
                                        <a href="#" title="Add to cart">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                        </a>
                                        <a href="#" title="Add to Wishlist">
                                            <i class="zmdi zmdi-favorite"></i>
                                        </a>
                                    </div>
                                    <div class="socialsharing-product">
                                        <h4 class="product-details-tilte text-uppercase pb-10">share this on</h4>
                                        <button type="button"><i class="zmdi zmdi-facebook"></i></button>
                                        <button type="button"><i class="zmdi zmdi-instagram"></i></button>
                                        <button type="button"><i class="zmdi zmdi-rss"></i></button>
                                        <button type="button"><i class="zmdi zmdi-twitter"></i></button>
                                        <button type="button"><i class="zmdi zmdi-pinterest"></i></button>
                                    </div>
                                </div>
                                <!-- .product-info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Quickview Product-->     
        <!--style-customizer start -->
        <div class="style-customizer closed">
            <div class="buy-button">
                <a href="index.html" class="customizer-logo"><img src="images/logo/logo.png" alt="Theme Logo"></a>
                <a class="opener" href="#"><i class="zmdi zmdi-settings"></i></a>
            </div>
            <div class="clearfix content-chooser">
                <h3>Layout Options</h3>
                <p>Which layout option you want to use?</p>
                <ul class="layoutstyle clearfix">
                    <li class="wide-layout selected" data-style="wide" title="wide"> Wide </li>
                    <li class="boxed-layout" data-style="boxed" title="boxed"> Boxed </li>
                </ul>
                <h3>Color Schemes</h3>
                <p>Which theme color you want to use? Select from here.</p>
                <ul class="styleChange clearfix">
                    <li class="skin-default selected" title="skin-default" data-style="skin-default" ></li>
                    <li class="skin-green" title="green" data-style="skin-green"></li>
                    <li class="skin-purple" title="purple" data-style="skin-purple"></li>
                    <li class="skin-blue" title="blue" data-style="skin-blue"></li>
                    <li class="skin-cyan" title="cyan" data-style="skin-cyan"></li>
                    <li class="skin-amber" title="amber" data-style="skin-amber"></li>
                    <li class="skin-blue-grey" title="blue-grey" data-style="skin-blue-grey"></li>
                    <li class="skin-teal" title="teal" data-style="skin-teal"></li>
                </ul>
                <h3>Background Patterns</h3>
                <p>Which background pattern you want to use?</p>
                    <ul class="patternChange clearfix">
                    <li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
                    <li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
                    <li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>
                    <li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
                    <li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
                    <li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
                    <li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
                    <li class="pattern-8" data-style="pattern-8" title="pattern-8"></li>
                </ul>
                <h3>Background Images</h3>
                <p>Which background image you want to use?</p>
                <ul class="patternChange main-bg-change clearfix">
                    <li class="main-bg-1" data-style="main-bg-1" title="Background 1"> <img src="images/customizer/bodybg/01.jpg" alt=""></li>
                    <li class="main-bg-2" data-style="main-bg-2" title="Background 2"> <img src="images/customizer/bodybg/02.jpg" alt=""></li>
                    <li class="main-bg-3" data-style="main-bg-3" title="Background 3"> <img src="images/customizer/bodybg/03.jpg" alt=""></li>
                    <li class="main-bg-4" data-style="main-bg-4" title="Background 4"> <img src="images/customizer/bodybg/04.jpg" alt=""></li>
                    <li class="main-bg-5" data-style="main-bg-5" title="Background 5"> <img src="images/customizer/bodybg/05.jpg" alt=""></li>
                    <li class="main-bg-6" data-style="main-bg-6" title="Background 6"> <img src="images/customizer/bodybg/06.jpg" alt=""></li>
                    <li class="main-bg-7" data-style="main-bg-7" title="Background 7"> <img src="images/customizer/bodybg/07.jpg" alt=""></li>
                    <li class="main-bg-8" data-style="main-bg-8" title="Background 8"> <img src="images/customizer/bodybg/08.jpg" alt=""></li>
                </ul>
                <ul class="resetAll">
                    <li><a class="button button-border button-reset" href="#">Reset All</a></li>
                </ul>
            </div>
        </div>
        <!--style-customizer end -->           
    </div>
    <!-- Body main wrapper end -->    

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Particles js -->
    <script src="js/particles.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>