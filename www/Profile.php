<?php
include("Common.php");
$msg = '';
$CustomerID = 0;
$Status = '';
$Username = '' ;
$EmailAddress = '';
$CurrentPassword = '';
$Password = '';
$ConfirmPassword = '';
$CellNumber = '';
if(isset($_REQUEST["CustomerID"]) && ctype_digit($_REQUEST["CustomerID"]))
	        $CustomerID=trim($_REQUEST["CustomerID"]);
if(isset($_POST["submit_key"])&& $_POST['submit_key'] == 'submit_value')
{
	if(isset($_POST["Status"]) )//&& ($_POST["Status"]==1 || $_POST["Status"]==0))
	        $Status = trim($_POST["Status"]);
	if(isset($_POST["Username"]))
	        $Username = trim($_POST["Username"]);	
		if(isset($_POST["EmailAddress"]))
	        $EmailAddress = trim($_POST["EmailAddress"]);	
		if(isset($_POST["CurrentPassword"]))
	        $CurrentPassword = trim($_POST["CurrentPassword"]);	
		if(isset($_POST["Password"]))
	        $Password = trim($_POST["Password"]);
		if(isset($_POST["ConfirmPassword"]))
	        $ConfirmPassword = trim($_POST["ConfirmPassword"]);
		if(isset($_POST["CellNumber"]))
	        $CellNumber = trim($_POST["CellNumber"]);
		
	if($Username == "")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Enter your name</p>
              </div>';
	}
	else if($EmailAddress == "")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Enter your E-mail Address</p>
              </div>';
	}
	else if($CurrentPassword == "")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Enter old password</p>
              </div>';
	}
	else if($Password == "")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please enter new password</p>
              </div>';
	}
	else if($ConfirmPassword == "")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Confirm Your Password/p>
              </div>';
	}	
	else if($Password!=$ConfirmPassword)
	{
		$msg ='<div class="callout callout-danger">

                <p>Mismatch Password</p>
              </div>';
	}
    else if($CellNumber == "")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Confirm Your CellNumber/p>
              </div>';
	}
	if($msg == "")
	{
		$sql = "UPDATE customers SET
                Status = '".(int)$Status."',
                Username = '".$Username."',
                EmailAddress = '".$EmailAddress."',
                CurrentPassword = '".$CurrentPassword."',
                Password = '".$Password."',
                ConfirmPassword = '".$ConfirmPassword."',
                CellNumber = '".$CellNumber."',
                DateModified = Now() 
				WHERE ID = '".$CustomerID."'
				";
		mysql_query($query) or die(mysql_error());
		$_SESSION['msg'] = '<div class="callout callout-success">
							<p>Profile has been updated</p>
						  </div>';	

		redirect($self);
	}
}
else
{
	$sql = "SELECT ID,Username,Password,ConfirmPassword,Status,CellNumber,EmailAddress FROM customers  WHERE ID ='".$CustomerID."'";
	$res = mysql_query($sql) or die(mysql_error());
	$num = mysql_num_rows($res);
	if($num>0)
	{
		$row = mysql_fetch_assoc($res);
		$Status = $row['Status'];
		//$Gender = $row['Gender'];
		$Username = $row['Username'];
		$Password = $row['Password'];
		$ConfirmPassword = $row['ConfirmPassword'];
		$EmailAddress = $row['EmailAddress'];
		$CellNumber = $row['CellNumber'];
	}
	else
	{
		$_SESSION['msg'] ='<div class="callout callout-danger">
                <p>Invalid Customer ID</p>
              </div>';	
		redirect('Login.php');
	}
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profile</title>
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
        <!-- Start Breadcrumbs Area -->
        <div class="breadcrumbs-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs text-center text-white">
                           <h3 class="text-uppercase">Profile</h3> 
                           <ul class="breadcrumbs-list">
                                <li>
                                    <a href="index.html" title="Return to Home">Home</a>
                                </li>
                                <li>/</li>
                                <li>Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Breadcrumbs Area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Wishlist Area -->
            <div class="my-account-page section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="procced-checkout">
                                <h4 class="procced-title text-uppercase pb-15 mb-20"><strong>ProfileS</strong></h4>
                                <p>Welcome to your profile. Here you can manage all of your personal information and edit your information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="addresses-lists">
                            <div class="col-xs-12 col-sm-12 col-lg-12" style="padding:0 250px;">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                 <!-- <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">-->
                                             <!--      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">-->
                                                    <i class="zmdi zmdi-home"></i>
                                                   <h3 align=center>My personal information</h3>
                                           <!--      </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">-->
                                            <div class="panel-body">
                                                <div class="coupon-info">
                                                    <h6 class="procced-title text-uppercase pb-15 mb-20">Your addresses </h6>
                                                    <p class="text-black">To add a new address, please fill out the form below.</p>
                                                    <p class="required">*Required field</p>
			<?php
			if(isset($_SESSION['msg']))
			{
				echo $_SESSION['msg'];
				$_SESSION['msg'] = '';
			}
			echo $msg;
			?>
                                                        <form action="<?php echo $self;?>" method="post">
                                                        <p class="form-row">
                                                            <label><span class="required">*</span>Social title</label>
                                                            </p><div class="radio-inline">
                                                                <label class="top">
                                                                    <span class="checked">
                                                                        <input type="radio"> 
                                                                    </span>
                                                                    Mr.
                                                                </label>
                                                            </div>
                                                            <div class="radio-inline">
                                                                <label class="top">
                                                                    <span class="checked">
                                                                        <input type="radio"> 
                                                                    </span>
                                                                    Mrs.
                                                                </label>
                                                            </div>
                                                        <p></p>
                                                        <p class="form-row">
                                                            <label><span class="required">*</span>Your Full Name</label>
                                                             <input type="text" class="form-control" value="<?php echo $Username;?>" id="inputEmail3" name="Username" placeholder="Enter your name....">
                 
                                                        </p>
                                                        <p class="form-row">
                                                            <label><span class="required">*</span>E-mail address</label>
                                                            <input type="text" class="form-control" value="<?php echo $EmailAddress;?>" id="inputEmail3" name="EmailAddress" placeholder="Enter your EmailAddress....">
                 
                                                        </p>
                                                        <div class="country-select shop-select">
                                                            <label>Date of Birth</label>
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <select>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                        <option>15</option>
                                                                        <option>16</option>
                                                                        <option>17</option>
                                                                        <option>18</option>
                                                                        <option>19</option>
                                                                        <option>20</option>
                                                                        <option>21</option>
                                                                        <option>22</option>
                                                                        <option>23</option>
                                                                        <option>24</option>
                                                                        <option>25</option>
                                                                        <option>26</option>
                                                                        <option>27</option>
                                                                        <option>28</option>
                                                                        <option>29</option>
                                                                        <option>30</option>
                                                                    </select>                                                               
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <select>
                                                                        <option>January</option>
                                                                        <option>February </option>
                                                                        <option>March </option>
                                                                        <option>April </option>
                                                                        <option>May </option>
                                                                        <option>June </option>
                                                                        <option>July </option>
                                                                        <option>August </option>
                                                                        <option>September </option>
                                                                        <option>October </option>
                                                                        <option>November </option>
                                                                        <option>December </option>
                                                                    </select>                                                               
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <select>
                                                                        <option>1990</option>
                                                                        <option>1991</option>
                                                                        <option>1992</option>
                                                                        <option>1993</option>
                                                                        <option>1994</option>
                                                                        <option>1995</option>
                                                                        <option>1996</option>
                                                                        <option>1997</option>
                                                                        <option>1998</option>
                                                                        <option>1999</option>
                                                                        <option>2000</option>
                                                                        <option>2001</option>
                                                                        <option>2002</option>
                                                                        <option>2003</option>
                                                                        <option>2004</option>
                                                                        <option>2005</option>
                                                                        <option>2006</option>
                                                                        <option>2007</option>
                                                                        <option>2008</option>
                                                                        <option>2009</option>
                                                                        <option>2010</option>
                                                                        <option>2011</option>
                                                                        <option>2012</option>
                                                                        <option>2013</option>
                                                                        <option>2014</option>
                                                                        <option>2016</option>
                                                                        <option>2016</option>
                                                                        <option>2017</option>
                                                                        <option>2018</option>
                                                                        <option>2019</option>
                                                                        <option>2020</option>
                                                                    </select>                                                        
                                                                </div>
                                                            </div>                                      
                                                        </div>
                                                        <p class="form-row">
                                                            <label><span class="required">*</span>Current Password</label>
                                                         <input type="password" class="form-control" value="<?php echo $CurrentPassword;?>" id="inputEmail3" name="CurrentPassword" placeholder="Enter your current Password....">
                   </p>
                                                        <p class="form-row">
                                                            <label>New Password</label>
                                                         <input type="password" class="form-control" value="<?php echo $Password;?>" id="inputEmail3" name="Password" placeholder="Enter your new Password....">
                                                        </p>
                                                        <p class="form-row">
                                                            <label>Confirm Password</label>
                                                            <input type="password" class="form-control" value="<?php echo $ConfirmPassword;?>" id="inputEmail3" name="ConfirmPassword" placeholder="Confirm Password....">
                                                        </p> <p class="form-row">
                                                            <label>CellNumber</label>
                                                            <input type="text" class="form-control" value="<?php echo $CellNumber;?>" id="inputEmail3" name="CellNumber" placeholder="CellNumber....">
                                                        <div class="checkbox">
                                                            <label>
                                                                <span><input type="checkbox" name="Signup" value="Signup"></span>
                                                                Sign up for our newsletter!
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="SpecialOffer" value="SpecialOffer">
																Receive special offers from our partners!
                                                            </label>

                                                        </div>
                                                      <div>
														<button type="submit" class="btn btn-success pull-right">Submit</button>
													  </div>
													 
												<input type="hidden" name="submit_key" value="submit_value" />
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
               
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Wishlist Area -->

            <!-- Start Brand Area -->
<?php	include("Brand_area.php");	 ?> 
            <!-- End Of Brand Area -->
            <!-- Start Newsletter Area -->
        <?php	include("Newsletter.php");	 ?>
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