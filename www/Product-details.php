<?php
include('Common.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product details</title>
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
     <?php	include('Header.php');	 ?> 
   <!-- End of header area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Shop Full Grid View -->
            <div class="product-details-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="single-product-image">
                                <div id="product-img-content">
                                    <div id="my-tab-content" class="tab-content mb-30">
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
                        </div>
                        <div class="col-sm-7">
                            <div class="product-details-content">
                                <div class="product-content text-uppercase">
                                    <a title="Slim Shirt With Stretch" href="product-details.html">Slim Shirt With Stretch</a>
                                    <div class="rating-icon pb-30 mt-10">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                    <div class="product-price pb-30">
                                        <span class="new-price">£ 185.00</span>
                                        <span class="old-price">£ 200.00</span>
                                    </div>
                                </div>
                                <div class="product-view pb-30">
                                    <h4 class="product-details-tilte text-uppercase">overview</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. luptate. </p>
                                </div>
                                <div class="product-size text-uppercase pb-40">
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
                                    <div class="product-color text-uppercase pb-40">
                                        <h4 class="product-details-tilte text-uppercase pb-10">color</h4>
                                        <ul>
                                            <li class="color-1"><a href="#"></a></li>
                                            <li class="color-2"><a href="#"></a></li>
                                            <li class="color-3"><a href="#"></a></li>
                                            <li class="color-4"><a href="#"></a></li>
                                        </ul>
                                    </div> 
                                    <div id="quantity-wanted" class="pull-left">
                                        <h4 class="product-details-tilte text-uppercase pb-10">quantity</h4>
                                        <input type="number" class="cart-plus-minus-box" value="1">    
                                    </div>                                  
                                </div>
                                <div class="product-action-shop text-center mb-40">
                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                        <i class="zmdi zmdi-eye"></i>
                                    </a>
                                    <a title="Add to cart" href="#">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </a>
                                    <a title="Add to Wishlist" href="#">
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-details-content pt-90">
                                <div class="p-details-tab">
                                    <ul class="nav nav-tabs text-uppercase mb-20" role="tablist">
                                        <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>
                                        <li role="presentation"><a href="#tag" aria-controls="tag" role="tab" data-toggle="tab">Product Tags</a></li>
                                    </ul>                             
                                </div>
                                <div class="clearfix"></div>
                                <div class="tab-content review">
                                    <div role="tabpanel" class="tab-pane active" id="description">
                                        <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to and    what we like best, every pleasure is to be welcomed and every pain avoided. But in cetain circumstances and owing to the claims of duty or the obligations of busness it will frequently occur that pleasures have to be repudiatedTemporibus recaae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus to a maiores maiores alias consequatur aut  endis doloriu asperiores repellat.maiores what we like best, every pleasure is to be welcomed and every pain avoided. But in cetain circumstances and owing to the claims.</p>
                                        <p>maiores alias consequatur aut  endis doloriu asperiores repellat.maiores what we like best, every pleasure is to be welcomed and every pain avoided. But in cetain circumstances and owing to the claims of duty or the obligations of busness it will frequently occur that pleasures have to be repudiatedTemporibus recaae. Itaque earum rerum hic tenetur a sapiente delectus.</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="reviews">
                                        <table class="table-data-sheet">
                                            <tbody>
                                                <tr class="odd">
                                                    <td>Compositions</td>
                                                    <td>Cotton</td>
                                                </tr>
                                                <tr class="even">
                                                    <td>Styles</td>
                                                    <td>Casual</td>
                                                </tr>
                                                <tr class="odd">
                                                    <td>Properties</td>
                                                    <td>Short Sleeve</td>
                                                </tr>
                                            </tbody>
                                       </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tag">
                                        <div id="product-comments-block-tab">
                                            <a href="#" class="comment-btn"><span>Be the first to write your review!</span></a>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Shop Full Grid View -->
            <!-- Start Related Product Area -->
            <div class="related-product pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="related-product-title text-uppercase mb-40">
                                <h4>related Products</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="single-product">
                                <div class="product-img-content mb-20">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img alt="" src="images/product/1.jpg">
                                        </a>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                            <i class="zmdi zmdi-eye"></i>
                                        </a>
                                        <a title="Add to cart" href="#">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                        </a>
                                        <a title="Add to Wishlist" href="#">
                                            <i class="zmdi zmdi-favorite"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-center text-uppercase">
                                    <a title="Slim Shirt With Stretch" href="product-details.html">Slim Shirt With Stretch</a>
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
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="single-product">
                                <div class="product-img-content mb-20">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img alt="" src="images/product/2.jpg">
                                        </a>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                            <i class="zmdi zmdi-eye"></i>
                                        </a>
                                        <a title="Add to cart" href="#">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                        </a>
                                        <a title="Add to Wishlist" href="#">
                                            <i class="zmdi zmdi-favorite"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-center text-uppercase">
                                    <a title="Slim Shirt With Stretch" href="product-details.html">Slim Shirt With Stretch</a>
                                    <div class="rating-icon">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                    <div class="product-price">
                                        <span class="new-price">£ 185.00</span>
                                        <span class="old-price">£ 200.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="single-product">
                                <div class="product-img-content mb-20">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img alt="" src="images/product/3.jpg">
                                        </a>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                            <i class="zmdi zmdi-eye"></i>
                                        </a>
                                        <a title="Add to cart" href="#">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                        </a>
                                        <a title="Add to Wishlist" href="#">
                                            <i class="zmdi zmdi-favorite"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-center text-uppercase">
                                    <a title="Slim Shirt With Stretch" href="product-details.html">Slim Shirt With Stretch</a>
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
                        </div>
                        <div class="col-md-3 hidden-sm">
                            <div class="single-product">
                                <div class="product-img-content mb-20">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img alt="" src="images/product/4.jpg">
                                        </a>
                                    </div>
                                    <div class="product-action text-center">
                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                            <i class="zmdi zmdi-eye"></i>
                                        </a>
                                        <a title="Add to cart" href="#">
                                            <i class="zmdi zmdi-shopping-cart"></i>
                                        </a>
                                        <a title="Add to Wishlist" href="#">
                                            <i class="zmdi zmdi-favorite"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content text-center text-uppercase">
                                    <a title="Slim Shirt With Stretch" href="product-details.html">Slim Shirt With Stretch</a>
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Related Product Area -->

             <!-- End Of Blog Area -->

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
	   <!-- End footer area -->         
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
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>