<?php
include("Common.php");
$Username = '';
$Password = '';
$EmailAddress = '';
$msg = "";
$CellNumber = '';
if(isset($_POST["submit_key"])&& $_POST['submit_key'] == 'submit_value')
{
	if(isset($_POST["Username"]))
	        $Username=trim($_POST["Username"]);
	if(isset($_POST["Password"]))
	        $Password=trim($_POST["Password"]);
	
    if($Username=="")
	{
	        $msg ='<div class="callout callout-danger">

                <p>Please enter Username</p>
              </div>';
	}
	
	else if($Password=="")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please enter Password</p>
              </div>';
	}
	if($msg == "")
	{
		$sql = "SELECT ID,Username,Password,CurrentPassword FROM customers WHERE Username='".$Username."' ";
		$res = mysql_query($sql) or  die(mysql_error());
		$rows = mysql_fetch_assoc($res);
		$num = mysql_num_rows($res);
		if($rows['CurrentPassword'] == $Password)
		{
	     
	     $_SESSION['IsLogin']=true;
		  $_SESSION['CustomerID'] = $rows['ID'];
	     redirect("Profile.php?CustomerID=".$rows['ID']);
		}
		else
		{
		  $msg ='<div class="callout callout-danger">

                <p>Invalid Username/Password</p>
              </div>';	
		}
	}
		
}

else if(isset($_POST["register_key"])&& $_POST['register_key'] == 'register_value')
{
	if(isset($_POST["Username"]))
	        $Username=trim($_POST["Username"]);
	if(isset($_POST["CellNumber"]))
	        $CellNumber=trim($_POST["CellNumber"]);	
	if(isset($_POST["Password"]))
	        $Password=trim($_POST["Password"]);	
	if(isset($_POST["EmailAddress"]))
	        $EmailAddress=trim($_POST["EmailAddress"]);
	else if($Username=="")
	{
	        $msg ='<div class="callout callout-danger">

                <p>Please enter Username</p>
              </div>';
	}
	else if($CellNumber=="")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please enter Password</p>
              </div>';
	}
	else if($Password=="")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please enter Password</p>
              </div>';
	}
	else if($EmailAddress=="")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please enter EmailAddress</p>
              </div>';
	}
	if($msg == "")
	{
		$query = "INSERT INTO customers SET 
				Username = '".$Username."',
				CurrentPassword = '".$Password."',
				EmailAddress = '".$EmailAddress."', 
				CellNumber = '".$CellNumber."',
				DateAdded = NOW()
				";	
		 mysql_query($query) or die(mysql_error());
		 $lastid = mysql_insert_id();
		 
	mysql_query($query) or die(mysql_error());
		$_SESSION['msg'] ='<div class="callout callout-success">

                <p>User has been added</p>
              </div>';	
		redirect("Login.php");
	}
}
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
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
            <div class="login-section section-padding">
                <div class="container">
                    <div class="row">
                                <div class="col-md-6">
                                <div class="registered-customers">
                                <div class="section-title text-uppercase mb-40">
                                    <h4>REGISTERED CUSTOMERS</h4>
                                </div>
                                   <?php
									  if(isset($_SESSION['msg']))
							        {
							        	echo $_SESSION['msg'];
							         	$_SESSION['msg'] = '';
							        }
	                                echo $msg;
	                            ?>
								<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <div class="login-account p-30 box-shadow">
                                        <p>If you have an account with us, Please log in.</p>
                                      <input type="text" placeholder="Username" name="Username" value="<?php echo $Username ?>">
							<input type="password" placeholder="Password" name="Password" value="<?php echo $Password ?>">
                                        <p><small><a href="#">Forgot our password?</a></small></p>
                                        <button type="submit" class="submit-btn">Login</button>
                                    </div>
									
						<input type="hidden" name="submit_key" value="submit_value" />
                                </form>                                
                            </div>
                      </div> 
                        <div class="col-md-6">
                            <div class="registered-customers">
                                <div class="section-title text-uppercase mb-40">
                                    <h4>NEW CUSTOMERS</h4>
                                </div>
                                    <?php
									if(isset($_SESSION['msg']))
							        {
							        	echo $_SESSION['msg'];
							         	$_SESSION['msg'] = '';
							        }
	                                echo $msg;
	                            ?>
								<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <div class="login-account p-30 box-shadow">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Enter your name..." value="<?php $Username?>" name="Username">
                                            </div>
                                         
                                            <div class="col-sm-6">
                                                <select class="custom-select">
                                                    <option value="defalt">country</option>
                                                    <option value="c-1">Australia</option>
                                                    <option value="c-2">Bangladesh</option>
                                                    <option value="c-3">Unitd States</option>
                                                    <option value="c-4">Unitd Kingdom</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select class="custom-select">
                                                    <option value="defalt">State</option>
                                                    <option value="c-1">Melbourne</option>
                                                    <option value="c-2">Dhaka</option>
                                                    <option value="c-3">New York</option>
                                                    <option value="c-4">London</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select class="custom-select">
                                                    <option value="defalt">Town/City</option>
                                                    <option value="c-1">Victoria</option>
                                                    <option value="c-2">Chittagong</option>
                                                    <option value="c-3">Boston</option>
                                                    <option value="c-4">Cambridge</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Enter your Cell Number" value="<?php $CellNumber?>" name="CellNumber">
                                            </div>
                                        </div>
                                        <input type="e-mail" placeholder="Email address here..."  placeholder="EmailAddress" value="<?php $EmailAddress; ?>" name="EmailAddress">
                                        <input type="password" placeholder="Password" value="<?php $CurrentPassword;?>" name="Password">
                                        <input type="password" placeholder="Confirm Password" value="<?php $ConfirmPassword;?>" name="ConfirmPassword">
                                        <div class="checkbox">
                                            <label class="mr-10"> 
                                                <small>
                                                    <input type="checkbox" name="signup">Sign up for our newsletter!
                                                </small>
                                            </label>
                                            <label> 
                                                <small>
                                                    <input type="checkbox" name="signup">Receive special offers from our partners!
                                                </small>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button value="submit" type="submit" class="submit-btn mt-20">Register</button>
                                            </div>
							<input type="hidden" name="register_key" value="register_value" />
                                            <div class="col-md-6">
                                                <button type="reset" class="submit-btn mt-20">Clear</button>
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

            <!-- Start Brand Area -->
          <?php	include('Brand_area.php');	 ?> 
		  <!-- End Of Brand Area -->
            <!-- Start Newsletter Area -->
           <?php	include('Newsletter.php');	 ?>
 <!-- End Of Newsletter Area -->
        </section>
        <!-- End page content -->
        <!-- Start footer area -->
  <?php	include('Footer.php');	 ?> 
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