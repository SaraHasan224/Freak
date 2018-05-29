<?php
	include('Common.php');
	if((isset($_SESSION['Islogin'])))
	{
		redirect('index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ecommerce Project | index</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>

    <!-- Main content -->
    <div class="container">
      <div class="row">
        <div class="col-xs-2 col-xs-offset-5" style="margin-top:200px;">
         
			  <button style="background-color:#00c0ef; margin-left:20px;" type="button"  onClick="location.href='LogInAsAdmin.php'" class="btn btn-md">Login as Admin</button>
			  
			  <p class="text-center">or</p>
			  
              <button style="background-color:#39CCCC; margin-left:20px;" type="button" onClick="location.href='LogInAsUser.php'" class="btn btn-md">&nbsp;&nbsp;Login as User</button>	
            
        </div>
      </div>
    </div>
    <!-- /.content -->
  
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
