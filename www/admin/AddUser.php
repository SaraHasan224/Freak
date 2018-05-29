<?php
include("Common.php");
include("CheckAdminLogin.php");
$msg = '';
$Status = 0;
$RoleID = 0;
$Username = '';
$Password = '';
$EmailAddress = '';

if(isset($_POST["submit_key"])&& $_POST['submit_key'] == 'submit_value')
{
	if(isset($_POST["Status"]) && ($_POST["Status"]==1 || $_POST["Status"]==0))
	        $Status=trim($_POST["Status"]);
	if(isset($_POST["RoleID"]) && ctype_digit($_POST["RoleID"]))
	        $RoleID=trim($_POST["RoleID"]);
	if(isset($_POST["Username"]))
	        $Username=trim($_POST["Username"]);
	if(isset($_POST["Password"]))
	        $Password=trim($_POST["Password"]);
	if(isset($_POST["EmailAddress"]))
	        $EmailAddress=trim($_POST["EmailAddress"]);
		
	
	if($Username=="")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Enter User Name</p>
              </div>';
	}
    else if($RoleID==0)
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Select Role</p>
              </div>';
	}
    else if($Password=="")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Enter Password</p>
              </div>';
	}
	else if($EmailAddress=="")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Enter EmailAddress</p>
              </div>';
	}
	
	if($msg == "")
	{
		$query = "INSERT INTO user SET 
				Status = '".(int)$Status."',
				RoleID = '".(int)$RoleID."',
				Username = '".$Username."',
				Password = '".$Password."',
				EmailAddress = '".$EmailAddress."',
				DateAdded = NOW()
				";	
		mysql_query($query) or die(mysql_error());
		$_SESSION['msg'] ='<div class="callout callout-success">

                <p>User has been added</p>
              </div>';	
		redirect($self);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add User</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('Header.php'); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('Sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>User</h1>
          <ol class="breadcrumb">
            <li><a href="Dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="User.php">Users</a></li>
            <li class="active">Add</li>
          </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        
        <!--/.col (left) -->
        <!-- right column -->
      	<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add User</h3>
              	<button type="submit" class="btn btn-default pull-right" onClick="location.href='User.php'">Back</button>
            </div>
            	<?php
					if(isset($_SESSION['msg']))
			{
				echo $_SESSION['msg'];
				$_SESSION['msg'] = '';
			}
			echo $msg;
				?>
            <!-- /.box-header -->
            <!-- form start -->
          		<form class="form-horizontal" action="<?php echo $self; ?>" method="post">
       <div class="box-body">
	   				<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                      <label>
                        <input type="radio" value="1" <?php echo($Status == 1 ? 'checked' : ''); ?> name="Status"> Enable
                      </label>
					  <br>
					  <label>
                        <input type="radio" value="0" <?php echo($Status == 0 ? 'checked' : ''); ?> name="Status"> Disable
                      </label>
                  </div>
                </div>
				
				
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Select Role</label>

                  <div class="col-sm-10">
                  
				  <select class="form-control" name="RoleID">
					<option value="0">Select Role</option>
					<?php 
						$sql = "SELECT ID,RoleName FROM roles WHERE ID <> 0";
						$res = mysql_query($sql) or die(mysql_error());
						while($row = mysql_fetch_array($res))
						{
					?>
					<option <?php echo($RoleID == $rows['ID'] ? 'selected' : ''); ?> value="<?php echo $rows['ID']; ?>" ><?php echo $row['RoleName']; ?></option>
					 
					<?php
						}
					?>	
				  </select>
				  
				  </div>
                </div>
				
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">UserName</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $UserName;?>" id="inputEmail3" name="UserName" placeholder="User Name"/>
                  </div>
                </div>
                <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
					<input type="Password" class="form-control" value="<?php echo $Password;?>" id="inputEmail3" name="Password" placeholder="Enter Password"/>
                </div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Email Address</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" value="<?php echo $EmailAddress;?>" id="inputEmail3" name="EmailAddress" placeholder="Enter Email"/>
                </div>
				</div>
				

				
        </div>
            
            </div>
              
              <!-- /.box-body -->
 <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
			  	  <input type="hidden" name="submit_key" value="submit_value" />
            </form>  
            </div>        
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('Footer'.php); ?>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebars background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
