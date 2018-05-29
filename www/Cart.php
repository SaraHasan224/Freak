<?php
	include('Common.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cart</title>
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
            <!-- Start Wishlist Area -->
            <div class="wishlist-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wishlist-content">
                                <form action="#">
                                    <div class="wishlist-table table-responsive p-30 text-uppercase">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail"></th>
                                                    <th class="product-name"><span class="nobr">Product</span></th>
                                                    <th class="product-prices"><span class="nobr"> Price </span></th>
                                                    <th class="product-stock-stauts"><span class="nobr"> stock status </span></th>
                                                    <th class="product-add-to-cart"><span class="nobr">Add to Cart </span></th>
                                                    <th class="product-remove"><span class="nobr">Remove</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="product-thumbnail"><a href="#" title="men’s black t-shirt"><img src="images/wishlist/1.jpg" alt="" /></a></td>
                                                    <td class="product-name pull-left mt-20">
                                                        <a href="#" title="men’s black t-shirt">men’s black t-shirt</a>
                                                        <p class="w-color m-0">
                                                            <label> Color :</label>
                                                            black
                                                        </p>
                                                        <p class="w-size m-0">
                                                            <label> size :</label>
                                                            sl
                                                        </p>
                                                    </td>
                                                    <td class="product-prices"><span class="amount">£34.78</span></td>
                                                    <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                                    <td class="product-value">
                                                        <input type="number" value="1">
                                                    </td>
                                                    <td class="product-remove"><a href="#">×</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="product-thumbnail"><a href="#" title="men’s black t-shirt"><img src="images/wishlist/2.jpg" alt="" /></a></td>
                                                    <td class="product-name pull-left mt-20">
                                                        <a href="#" title="men’s black t-shirt">men’s black t-shirt</a>
                                                        <p class="w-color m-0">
                                                            <label> Color :</label>
                                                            black
                                                        </p>
                                                        <p class="w-size m-0">
                                                            <label> size :</label>
                                                            sl
                                                        </p>
                                                    </td>
                                                    <td class="product-prices"><span class="amount">£34.78</span></td>
                                                    <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                                    <td class="product-value">
                                                        <input type="number" value="1">
                                                    </td>
                                                    <td class="product-remove"><a href="#">×</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="product-thumbnail"><a href="#" title="men’s black t-shirt"><img src="images/wishlist/3.jpg" alt="" /></a></td>
                                                    <td class="product-name pull-left mt-20">
                                                        <a href="#" title="men’s black t-shirt">men’s black t-shirt</a>
                                                        <p class="w-color m-0">
                                                            <label> Color :</label>
                                                            black
                                                        </p>
                                                        <p class="w-size m-0">
                                                            <label> size :</label>
                                                            sl
                                                        </p>
                                                    </td>
                                                    <td class="product-prices"><span class="amount">£34.78</span></td>
                                                    <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                                                    <td class="product-value">
                                                        <input type="number" value="1">
                                                    </td>
                                                    <td class="product-remove"><a href="#">×</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="cart-requerment mt-50 clearfix">
                                            <div class="col-md-4 col-sm-6 clearfix">
                                                <div class="cart-title text-uppercase">
                                                    <h5 class="mb-30"><strong>ESTIMATE SHIPPING AND TAX</strong></h5>
                                                </div>
                                                <div class="shopping-tax">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="cart-show-label show-label">
                                                                <select>
                                                                    <option selected="selected" value="position">Country</option>
                                                                    <option value="Name">Bangladesh</option>
                                                                    <option value="Price">india</option>
                                                                    <option value="Price">Nepal</option>
                                                                </select>                                                                
                                                            </div>
                                                            <div class="cart-show-label show-label mt-15">
                                                                <select>
                                                                    <option selected="selected" value="position">State/Province</option>
                                                                    <option value="Name">Sreepur</option>
                                                                    <option value="Price">Mirpur</option>
                                                                    <option value="Price">Rampura</option>
                                                                </select>                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="cart-show-label show-label">
                                                                <select>
                                                                    <option selected="selected" value="position">City</option>
                                                                    <option value="Name">Bangladesh</option>
                                                                    <option value="Price">dhaka</option>
                                                                    <option value="Price">Delli</option>
                                                                    <option value="Price">kolkata</option>
                                                                    <option value="Price">khulna</option>
                                                                </select>                                                                
                                                            </div>
                                                            <div class="cart-show-label show-label mt-15">
                                                                <select>
                                                                    <option selected="selected" value="position">Zip/Postal Code</option>
                                                                    <option value="Name">1200</option>
                                                                    <option value="Price">1201</option>
                                                                    <option value="Price">1202</option>
                                                                    <option value="Price">1203</option>
                                                                    <option value="Price">1204</option>
                                                                </select>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="button extra-small pull-right mt-20" href="#" title="Add to Cart">
                                                    <span>Get a Quote</span>
                                                </a>
                                            </div> 
                                            <div class="col-md-4 col-sm-6 clearfix">
                                                <div class="counpon-info ml-35">
                                                    <div class="cart-title text-uppercase">
                                                        <h5 class="mb-30"><strong>COUPON DISCOUNT</strong></h5>
                                                    </div>
                                                    <div class="coupon-discount">
                                                        <label class="pb-10">Enter Your Coupon Code Here</label>
                                                        <input type="text">
                                                    </div> 
                                                    <a class="button extra-small pull-right mt-35" href="#" title="Add to Cart">
                                                        <span>Apply Coupon</span>
                                                    </a>       
                                                </div>
                                            </div> 
                                            <div class="col-md-offset-0 col-md-4 col-sm-offset-3 col-sm-6 clearfix">
                                                <div class="counpon-total ml-35">
                                                    <div class="cart-title text-uppercase">
                                                        <h5 class="mb-30"><strong>CART TOTAL</strong></h5>
                                                    </div>
                                                    <table>
                                                        <tbody>
                                                            <tr class="cart-subtotal">
                                                                <th>Subtotal</th>
                                                                <td>£215.00</td>
                                                            </tr>
                                                            <tr class="cart-shipping">
                                                                <th>Shipping</th>
                                                                <td>Free Shipping</td>
                                                            </tr>
                                                            <tr class="cart-total">
                                                                <th>Grand Total</th>
                                                                <td>£215.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table> 
                                                    <a class="button extra-small pull-right" href="#" title="Add to Cart">
                                                        <span>Procced to checkout</span>
                                                    </a>                                                     
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>  
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Wishlist Area -->
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