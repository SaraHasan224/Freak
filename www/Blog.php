<?php
	include('Common.php');
	$Search = '';
	$ParentID = 0;

if(isset($_POST["search_key"])&& $_POST['search_key'] == 'search_value')
{
	if(isset($_POST["Search"]))
	    $Search=trim($_POST["Search"]);
    redirect('Blog.php?Search='.$Search);
		
}

if(isset($_POST["search_key"])&& $_POST['search_key'] == 'search_value')
{
	if(isset($_POST["Search"]))
	    $Search=trim($_POST["Search"]);
    redirect('Blog.php?Search='.$Search);
		
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog </title>
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
        <?php
			include('Header.php');
		?><!-- End of header area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Blog Page Two Area -->
            <div class="blog-page-two section-padding fixing">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3 col-xs-12">
                           <div class="row">
							<?php include('Blog-details.php');?>
                            <!--   
                                <div class="col-sm-6 col-xs-12">
                                    <div class="single-blog-2 mb-30">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="blog-image">
                                                    <a href="blog-details.html">
                                                        <img src="images/blog/blog-2/2.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="blog-desc text-center pt-30">
                                                    <h6 class="blog-title-2 text-text-capitalize">
                                                        <a href="blog-details.html">Blog Post Dummy Title</a>
                                                    </h6>
                                                    <p>There are many variations of passages of in psum available, but the majority have...</p>
                                                    <div class="read-more">
                                                        <a href="#">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="single-blog-2 mb-30">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="blog-image">
                                                    <a href="blog-details.html">
                                                        <img src="images/blog/blog-2/3.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="blog-desc text-center pt-30">
                                                    <h6 class="blog-title-2 text-text-capitalize">
                                                        <a href="blog-details.html">Blog Post Dummy Title</a>
                                                    </h6>
                                                    <p>There are many variations of passages of in psum available, but the majority have...</p>
                                                    <div class="read-more">
                                                        <a href="#">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="single-blog-2 mb-30">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="blog-image">
                                                    <a href="blog-details.html">
                                                        <img src="images/blog/blog-2/4.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="blog-desc text-center pt-30">
                                                    <h6 class="blog-title-2 text-text-capitalize">
                                                        <a href="blog-details.html">Blog Post Dummy Title</a>
                                                    </h6>
                                                    <p>There are many variations of passages of in psum available, but the majority have...</p>
                                                    <div class="read-more">
                                                        <a href="#">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="single-blog-2">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="blog-image">
                                                    <a href="blog-details.html">
                                                        <img src="images/blog/blog-2/1.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="blog-desc text-center pt-30">
                                                    <h6 class="blog-title-2 text-text-capitalize">
                                                        <a href="blog-details.html">Blog Post Dummy Title</a>
                                                    </h6>
                                                    <p>There are many variations of passages of in psum available, but the majority have...</p>
                                                    <div class="read-more">
                                                        <a href="#">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 hidden-xs">
                                    <div class="single-blog-2">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="blog-image">
                                                    <a href="blog-details.html">
                                                        <img src="images/blog/blog-2/2.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="blog-desc text-center pt-30">
                                                    <h6 class="blog-title-2 text-text-capitalize">
                                                        <a href="blog-details.html">Blog Post Dummy Title</a>
                                                    </h6>
                                                    <p>There are many variations of passages of in psum available, but the majority have...</p>
                                                    <div class="read-more">
                                                        <a href="#">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                         -->

						 </div>
                        </div>
                        <div class="col-md-3 col-md-pull-9 col-xs-12">
                      <?php include('Sidebar_Blog.php');?>
					  </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Page Area -->
            <!-- Start Brand Two Area -->
         <?php include('Brand_area.php'); ?>
			<!-- End Of Brand Area -->
            <!-- Start Newsletter Area -->
            <?php include('Newsletter.php'); ?>
			<!-- End Of Newsletter Area -->
        </section>
        <!-- End page content -->
        <!-- Start footer area -->
        <?php  include('Footer.php');?>
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