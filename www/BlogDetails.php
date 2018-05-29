<?php
include('Common.php');
$BlogID = 0;

if(isset($_REQUEST["BlogID"]) && ctype_digit($_REQUEST["BlogID"]))
       $BlogID=trim($_REQUEST["BlogID"]);
if(!($BlogID == 0))
{
	
	$sql="SELECT ID,Title,Image,Description,Status FROM blogs WHERE ID='".$BlogID."'";
	$res=mysql_query($sql) or die(mysql_error());
	$num=mysql_num_rows($res);
	 
	if ($num > 0)
	{
		
		$row= mysql_fetch_assoc($res);
		$title=$row['title'];
		$Image=$row['Image'];
		$Status=$row['Status'];
		$Description=$row['Description'];
	   
	}
	else
	{
	 $_SESSION['msg']='<div class="callout callout-danger">
                <p>Invalid blog ID</p>
              </div>';	
	 
	 redirect('Blog.php');
	}
}	
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog Details</title>
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
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Blog Page Area -->
            <div class="blog-details-area section-padding">
                <div class="container">
                    <div class="row">
                    


            <?php
			if(isset($_SESSION['msg']))
			{
			    echo $_SESSION['msg'];
			    $_SESSION['msg'] = '';
			}
			echo $msg;
			?>


						<div class="col-md-9 col-md-push-3 col-xs-12">
                            <div class="single-blog fix">
                                <div class="post-thumbnail mb-50 b-img">
                                    <a href="BlogDetails.php">
                                        <img src="<?php echo DIR_UPLOADING_BLOGS.$Image?>" alt="">
                                    </a>
                                </div>
                                <div class="postinfo-wrapper pl-100">
                                    <div class="post-date text-uppercase ptb-10">
                                        <span class="day"><?php echo $row['Added']; ?></span>
                                        <span class="month"><?php echo $row['Add']; ?></span>
                                    </div>
                                    <div class="post-info">
                                        <h3 class="blog-post-title mb-20">
                                            <a href="BlogDetails.php"><?php echo $row['Title']; ?></a>
                                        </h3>
                                        <div class="entry-meta ptb-10 mb-30 text-uppercase">
                                            Posted by
                                            <span class="author vcard">
                                                <a title="View all posts by admin" class="url fn n" href="#">admin</a>
                                            </span>
                                            /
                                            <a href="#">Fashion</a>
                                            ,
                                            <a href="#">HTML</a>
                                        </div>
                                        <div class="entry-summary">
                                           <?php echo $row['Description']; ?>
                                        </div>
                                        <div class="entry-meta ptb-10 mb-30 text-uppercase">
                                            <a href="#">3 comments </a>
                                            <span class="author vcard">/ Tags:</span>
                                            /
                                            <a href="#">fashion</a>
                                            ,
                                            <a href="#">t-shirt</a>
                                            ,
                                            <a href="#">white</a>
                                        </div>
                                        <div class="share-icon text-uppercase mb-50 pt-30">
                                            <h5>Share this post</h5>
                                            <ul>
                                                <li>
                                                    <a target="_blank" class="facebook" href="#">
                                                        <i class="zmdi zmdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" class="twitter" href="#">
                                                        <i class="zmdi zmdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" class="pinterest" href="#">
                                                        <i class="zmdi zmdi-pinterest"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" class="google-plus" href="#">
                                                        <i class="zmdi zmdi-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" class="linkedin" href="#">
                                                        <i class="zmdi zmdi-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="author-info mb-30">
                                            <div class="author-avatar b-img">
                                                <img src="images/blog/avatar.png" alt="">
                                            </div>
                                            <div class="author-description pl-20">
                                                <h6>
                                                    About the Author:
                                                    <a href="#">Admin</a>
                                                </h6>
                                                <p>Cras id nulla at metus congue auctor. Suspendisse auctor dictum orci quis interdum. Nullam et eleifend metus. Integer in est orci. Duis hendrerit ex metus, vel tempor sem aliquet nec. Donec ornare hendrerit bibendum. Nullam dui erat, tempus eu nisl vitae, venenatis gravida ipsum. Suspendisse potenti.</p>
                                            </div>
                                        </div>
                                        <div class="reply-comment-area mb-20">
                                            <h4 class="mb-50 pt-20">3 comments</h4>
                                            <div class="single-reply mb-20">
                                                <div class="comment-author">
                                                    <img src="images/testimonial/1.jpg" alt="">
                                                </div>
                                                <div class="comment-info p-10">
                                                    <div class="comment-author-info mb-10">
                                                        <a href="#">
                                                            <b>admin</b>
                                                        </a>
                                                        Post author
                                                        <span>October 6, 2014 at 1:38 am</span>
                                                        <a href="#">Reply</a>
                                                    </div>
                                                    <p>just a nice post</p>
                                                </div>
                                            </div>
                                            <div class="single-reply pl-30 mb-20">
                                                <div class="comment-author">
                                                    <img src="images/testimonial/2.jpg" alt="">
                                                </div>
                                                <div class="comment-info p-10">
                                                    <div class="comment-author-info mb-10">
                                                        <a href="#">
                                                            <b>admin</b>
                                                        </a>
                                                        Post author
                                                        <span>October 6, 2014 at 1:38 am</span>
                                                        <a href="#">Reply</a>
                                                    </div>
                                                    <p>just a nice post</p>
                                                </div>
                                            </div>
                                            <div class="single-reply">
                                                <div class="comment-author">
                                                    <img src="images/testimonial/1.jpg" alt="">
                                                </div>
                                                <div class="comment-info p-10">
                                                    <div class="comment-author-info mb-10">
                                                        <a href="#">
                                                            <b>admin</b>
                                                        </a>
                                                        Post author
                                                        <span>October 6, 2014 at 1:38 am</span>
                                                        <a href="#">Reply</a>
                                                    </div>
                                                    <p>just a nice post</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-comment-form-area">
                                            <h4 class="mb-50 pt-20">3 comments</h4>
                                            <form action="#">
                                                <p class="mb-20">Your email address will not be published. Required fields are marked 
                                                    <span class="required">*</span>
                                                </p>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p class="form-row">
                                                            <label>Name<span class="required">*</span></label>
                                                            <input type="text">
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="form-row">
                                                            <label>Email<span class="required">*</span></label>
                                                            <input type="text">
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="form-row">
                                                            <label>Website<span class="required">*</span></label>
                                                            <input type="text">
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p class="form-row">
                                                            <label>Comment</label>
                                                            <textarea></textarea>
                                                        </p>
                                                    </div>
                                                </div>
                                            </form>
                                            <a class="button extra-small text-uppercase" href="#">
                                                <span>read more</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

						<div class="col-md-3 col-md-pull-9 col-xs-12">
                         <?php include('Sidebar_Blog.php');?>
						 </div>
          			</div>
                </div>
            </div>
            <!-- End Blog Page Area -->
            <!-- Start Brand Area -->
        <?php include('Brand_area.php');?>
			<!-- End Of Brand Area -->
            <!-- Start Newsletter Area -->
        <?php include('Newsletter.php');?>
		<!-- End Of Newsletter Area -->
        </section>
        <!-- End page content -->
      <!-- Start footer area -->
        <?php include('Footer.php');?>
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