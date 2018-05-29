<?php
include('Common.php');
$Username = "";
$Subject = "";
$EmailAddress = "";
$msg = "";
$Message = '';
if(isset($_POST["submit_key"])&& $_POST['submit_key'] == 'submit_value')
{
	if(isset($_POST["Username"]))
	        $Username=trim($_POST["Username"]);
	
	if(isset($_POST["Subject"]))
	        $Subject=trim($_POST["Subject"]);
	if(isset($_POST["EmailAddress"]))
	        $EmailAddress=trim($_POST["EmailAddress"]);
	if(isset($_POST["Message"]))
	        $Message=trim($_POST["Message"]);
	    //print_r($Message);
		//exit();
	if($Username=="")
	{
	        $msg ='<div class="callout callout-danger">

                <p>Please enter Username</p>
              </div>';
	}
	
	else if($Subject=="")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please enter Subject</p>
              </div>';
	}
	else if($EmailAddress=="")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please enter EmailAddress</p>
              </div>';
	}
	else if($Message=="")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please enter Message</p>
              </div>';
	}
	if($msg == "")
	{
	$sql = "SELECT ID,Username,Status,EmailAddress,Subject,Message,DATE_FORMAT(DateAdded,'%b %d %Y %h:%i %p') as Added,DATE_FORMAT(DateModified,'%b %d %Y %h:%i %p') as Updated FROM complain";

		$res = mysql_query($sql) or  die(mysql_error());
		$rows = mysql_fetch_assoc($res);
		$num = mysql_num_rows($res);
		if(!($rows['Username'] == ""))
		{
			$query = "INSERT INTO complain SET 
				Username = '".$Username."',
				Status = '".$Status."',
				Subject = '".$Subject."',
				Message = '".$Message."',
				DateAdded = NOW(),
				EmailAddress = '".$EmailAddress."'
				";	
		 mysql_query($query) or die(mysql_error());
		$_SESSION['IsLogin'] = true;		 
		 redirect('Contact.php');
		 }
		else
		{
		  $msg ='<div class="callout callout-danger">

                <p>Invalid Username</p>
              </div>';	
		}
	}
		
}
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us</title>
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
            <!-- Map Area Start -->
            <div class="map-area">
                <div id="googleMap" style="width:100%;height:600px;"></div>
            </div>
            <!-- Map Area End -->
            <!-- Address Information Area Start -->
            <div class="address-info-area mb-90">
                <div class="container">
                    <div class="row">
                        <div class="address-info p-90 clearfix"> <?php
	echo $msg;
	?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="col-md-5 col-sm-6">
                                <div class="contact-form">
                                    <div class="title text-uppercase mb-15">
                                        <h4><strong>get in touch</strong></h4>
                                    </div>
                                    <form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <input type="text" name="Username" placeholder="Name*">
                                        <input type="email" name="EmailAddress" placeholder="E-mail*">
                                        <input type="text" name="Subject" placeholder="Subject">
                                        <textarea name="Message" placeholder="Message"></textarea>
                                        <button class="submit-btn mt-20" type="submit">submit message</button>
									<input type="hidden" name="submit_key" value="submit_value" />
                                    </form>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                            <div class="col-md-offset-2 col-md-5 col-sm-6">
                                <div class="contact-address">
                                    <div class="title text-uppercase mb-15">
                                        <h4><strong>CONTACT FORM</strong></h4>
                                    </div>
                                    <ul class="toggle-footer text-ash p-30">
                                        <li class="mb-30 pl-45">
                                            <i class="zmdi zmdi-pin"></i>
                                            <p>House No 08, Road No 08, <br>
                                            Din Bari, Dhaka, Bangladesh</p>
                                        </li>
                                        <li class="mb-30 pl-45">
                                            <i class="zmdi zmdi-email"></i>
                                            <p>Username@gmail.com <br>
                                            Damo@gmail.com</p>
                                        </li>
                                        <li class="pl-45">
                                            <i class="zmdi zmdi-phone"></i>
                                            <p>+660 256 24857<br>
                                            +660 256 24857</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Address Information Area End -->

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
    <!-- Ajax Mail js -->
    <script src="js/ajax-mail.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
          var mapOptions = {
            zoom: 16,
            scrollwheel: false,
            center: new google.maps.LatLng(23.763474, 90.431483)
          };
          var map = new google.maps.Map(document.getElementById('googleMap'),
              mapOptions);
          var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation:google.maps.Animation.BOUNCE,
            icon: 'images/map-icon.png',
            map: map
          });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>