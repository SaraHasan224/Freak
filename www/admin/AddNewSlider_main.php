// <?php
include("Common.php");
include("CheckAdminLogin.php");
$msg = '';
$Status = 0;
$Image = '';
$Description = '';
$Heading = '';
$Year = '';
$Link = '';

if(isset($_POST["submit_key"])&& $_POST['submit_key'] == 'submit_value')
{
	// print_r($_FILES);
	// echo $_FILES['Images']['name'][0];
	// exit();
	
	if(isset($_POST["Status"]) && ($_POST["Status"]==1 || $_POST["Status"]==0))
	        $Status=trim($_POST["Status"]);
	if(isset($_POST["Description"]))
	        $Description=trim($_POST["Description"]);
	if(isset($_POST["Heading"]))
	        $Heading=trim($_POST["Heading"]);
	if(isset($_POST["Year"]))
	        $Year=trim($_POST["Year"]);
	if(isset($_POST["Link"]))
	        $Link=trim($_POST["Link"]);
	if(isset($_FILES["Image"]))
	        $Image=trim($_FILES["Image"]["name"]);
	if(isset($_FILES['Images']))
	        $countofimages=count($_FILES['Images']['name']);
	// echo $countofimages;
	// exit();
	if($Image=="")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Upload Image</p>
              </div>';
	}
	else if($Description=="")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Enter Description</p>
              </div>';
	}
	else if($Heading == '')
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Enter Heading</p>
              </div>';
	}
    else if($Year=="")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Enter Year</p>
              </div>';
	}
    else if($Link=="")
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Enter Year</p>
              </div>';
	}
    else if($countofimages==0 || ($_FILES['Images']['name'][0] == '' && count($_FILES['Images']['name'])==1))
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Upload atleast one image</p>
              </div>';
	}
	
	if($msg == "")
	{
		$CatIDs = implode(",",$CatIDs);
		 $query = "INSERT INTO slider_main SET 
				Status = '".(int)$Status."',
				Year = '".(int)$Year."',
				Heading = '".$Heading."',
				CatIDs = '".$CatIDs."',
				Link = '".$Link."',
				Description = '".$Description."',
				DateAdded = NOW()
				";	
		 mysql_query($query) or die(mysql_error());
		 $lastid = mysql_insert_id();
		 if($Image!='')
		 {
			 $ext = explode(".",$Image);
			 $ext = end($ext);
			 $Image = 'P-'.$lastid.'.'.$ext;
			 $moved = move_uploaded_file($_FILES['Image']['tmp_name'],DIR_UPLOADING_PRODUCTS.$Image);
			 if($moved)
			 {
				 $sql = "UPDATE products SET Image = '".$Image."' WHERE ID = ".$lastid;
				 mysql_query($sql) or die(mysql_error());
			 }
			 
			 $numofimage = 1;
			 $arrayofimage = array();
			 for($i=0;$i<$countofimages;$i++)
			 {
				 if($_FILES['Images']['name'][$i]!='')
				 {
					 $ext = explode(".",$_FILES['Images']['name'][$i]);
					 $ext = end($ext);
					 $Image = 'P-'.$lastid.'-'.$numofimage++.'.'.$ext;
					 $moved1 = move_uploaded_file($_FILES['Images']['tmp_name'][$i],DIR_UPLOADING_PRODUCTS.$Image);
					 array_push($arrayofimage,$Image);
					 
				 }
			 }
			 $arrayofimage = implode(',',$arrayofimage);
			if($moved1)
			 {
				 $sql = "UPDATE products SET SubImages = '".$arrayofimage."' WHERE ID = ".$lastid;
				 mysql_query($sql) or die(mysql_error());
			 }
		 }
		 $_SESSION['msg'] ='<div class="callout callout-success">

                <p>Product has been added</p>
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
  <title>Ecommerce Project | Product</title>
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
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
  
  <script>
	$(document).ready(function(){
			$('#btnaddmore').click(function(){
				//$("#imagespanel").append('<br><input type="file" name="Images[]" id="Image">');
				$("#imagespanel").append('<div class="form-group divdel"><div class="col-sm-12" id="imagespanel1"><input type="file" name="Images[]" id="Images"></div></div>');
			});
			$('#btndeleteless').click(function(){
			    $(".divdel").last().remove();
		    });
	});
  </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include("Header.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("Sidebar.php"); ?>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Slider</a></li>
        <li class="active">Add New Slider_main</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Slider_maint</h3>
			  <button type="submit" onClick="location.href='slider.php'" class="btn btn-default pull-right">Back</button>
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
            <form class="form-horizontal" id="formadd" action="<?php echo $self; ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
			   <div class="row">
				<div class="col-md-6">
			   <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10" style="padding-top: 7px;">
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
				<label for="inputEmail3" class="col-sm-2 control-label">Heading</label>

                  <div class="col-sm-10" style="padding-top: 8px;">
                      
                        <input type="checkbox" value="1" <?php echo($Heading == 1 ? 'checked' : ''); ?> name="Heading"> Enable
                      
		         </div>
                </div>
				
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Image</label>

                  <div class="col-sm-10">
					<input type="file" name="Image" id="Image">
                  </div>
                </div>
				
								
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="ProductName" value="<?php echo $ProductName; ?>" placeholder="Enter Product Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Price</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="Price" value="<?php echo $Price; ?>" placeholder="Enter Price">
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="Description" value="<?php echo $Description; ?>" placeholder="Enter Description">
                  </div>
                </div>
               
				</div>
				<div class="col-md-6">
				    <button type="button" class="btn-xs btn-info pull-right" id="btnaddmore">Add More</button>
					<button type="button" style="margin-right:5px;" class="btn-xs btn-danger pull-right" id="btndeleteless">Delete</button>

				  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Images</label>

                  <div class="col-sm-10" id="imagespanel">					
				  <input type="file" name="Images[]" id="Image">
                  <br>
                  </div>
                </div>
				</div>
				</div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" id="btnadd">Add</button>
              </div>
              <!-- /.box-footer -->
			  <input type="hidden" name="submit_key" value="submit_value"/>
            </form>
			          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("Footer.php"); ?>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
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
