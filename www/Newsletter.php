<?php
/*include('Common.php');
$Email = "";
$msg = "";
if(isset($_POST["submit_key"])&& $_POST['submit_key'] == 'submit_value')
{
	if(isset($_POST["Email"]))
	        $Email=trim($_POST["Email"]);
	if($Email=="")
	{
	        $msg ='<div class="callout callout-danger">
                <p>Please enter Email</p>
              </div>';
	}
	if($msg == "")
	{
	$sql = "SELECT ID,Email,Status,DATE_FORMAT(DateAdded,'%b %d %Y %h:%i %p') as Added,DATE_FORMAT(DateModified,'%b %d %Y %h:%i %p') as Updated FROM subscribers";
		$res = mysql_query($sql) or  die(mysql_error());
		$rows = mysql_fetch_assoc($res);
		$num = mysql_num_rows($res);
		//print_r($msg);
		//exit();
		if($msg == "")
		{
			$query = "INSERT INTO subscribers SET 
				Email = '".$Email."',
				Status = '".$Status."',
				DateAdded = NOW(),
				";	
		 mysql_query($query) or die(mysql_error());
		$_SESSION['IsLogin'] = true;		 
		 redirect('index.php');
		 }
		else
		{
		  $msg ='<div class="callout callout-danger">
                <p>Invalid Email</p>
              </div>';	
		}
	}
		
}*/
?>	
									
			<!-- Start Newsletter Area -->
            <div class="newsletter-area">
                <div class="container">
                    <div class="row">
                        <div class="newsletter-content default-bg clearfix ptb-40">
                            <div class="col-md-offset-2 col-md-3 col-sm-5">
                                <div class="newsletter-title text-white text-uppercase">
                                    <h4>NewsLetter Sign-Up</h4>
                                </div>
                            </div>
									<?php
									echo $msg;
            						?>
									
									<div class="col-md-5 col-sm-7">
                                  <div class="signup-form">
                                    <form class="news-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <input type="text" placeholder="Enter your email address..." name="Email" value="<?php echo $Email;?>"  class="f-form">
                                        <button class="submit text-uppercase" type="submit">subscribe</button>
                                    	   
                                        <input type="hidden" name="submit_key" value="submit_value" />
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Newsletter Area -->
        </section>