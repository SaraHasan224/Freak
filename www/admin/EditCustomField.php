<?php
include("Common.php");
include("CheckAdminLogin.php");
$msg = '';
$Status = 0;
$CustomFieldID = 0;
$FieldName = '';
$TypeID = 0;
$Options = array();

if(isset($_REQUEST["CustomFieldID"]) && ctype_digit($_REQUEST["CustomFieldID"]))
	        $CustomFieldID=trim($_REQUEST["CustomFieldID"]);

if(isset($_POST["submit_key"])&& $_POST['submit_key'] == 'submit_value')
{
	
	if(isset($_POST["Status"]) && ($_POST["Status"]==1 || $_POST["Status"]==0))
	        $Status=trim($_POST["Status"]);
	if(isset($_POST["FieldName"]))
	        $FieldName=trim($_POST["FieldName"]);
	if(isset($_POST["TypeID"]) && ctype_digit($_POST["TypeID"]))
	        $TypeID=trim($_POST["TypeID"]);
	if(isset($_POST["Options"]))
		    $Options=$_POST["Options"];
    
	if($FieldName=="")
	{
	        $msg ='<div class="callout callout-danger">

                <p>Please Enter Field Name</p>
              </div>';
	}
	else if($TypeID==0)
	{
		 $msg ='<div class="callout callout-danger">

                <p>Please Select Type</p>
              </div>';
	}
	
	        
	if($msg == "")
	{
		$Options = array_filter($Options);
		$Options = implode(",",$Options);
		$sql = "SELECT Options FROM customfield WHERE ID=".$CustomFieldID;
	    $res = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_assoc($res);
		$arrayofoptions = explode(",",$row['Options']);
		$arrayofoptions = array_filter($arrayofoptions);
		array_push($arrayofoptions,$Options);
		$arrayofoptions = implode(",",$arrayofoptions);
		
		$sql = "UPDATE customfield SET
                Status = '".(int)$Status."',
                FieldName = '".$FieldName."',
                Type = '".$TypeID."',
                Options = '".$arrayofoptions."',
                DateModified = Now() 
				WHERE ID = '".$CustomFieldID."'
				";
		mysql_query($sql) or  die(mysql_error());
		
		
		$_SESSION['msg'] ='<div class="callout callout-success">

                <p>Custom Field has been updated.</p>
              </div>';	
		$Options = explode(",",$arrayofoptions);
		$OptionsString = $arrayofoptions;
		
	}
			 
}
else
{
	$sql ="SELECT ID,FieldName,Type,Options,Status FROM customfield WHERE ID='".$CustomFieldID."'";
	$res = mysql_query($sql) or die(mysql_error());
	$num = mysql_num_rows($res);
	if($num > 0)
	{
		$row= mysql_fetch_assoc($res);
		$Status = $row['Status'];
		$FieldName = $row['FieldName'];
		$TypeID = $row['Type'];
		$Options = explode(",",$row['Options']);
		$OptionsString = $row['Options'];
	}
	else
	{
		$_SESSION['msg'] ='<div class="callout callout-danger">
                <p>Invalid Custom Field ID</p>
              </div>';	
		redirect('CustomField.php');
	}
	
}


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Commerce | Custom Field</title>
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
			//$("#imagespanel").append('<br><input type="file" name="ImagesFile[]" class="ImagesFile">');
			$("#optionspanel").append('<div class="form-group divdel"><div class="col-sm-12" id="optionspanel1"><input type="text" name="Options[]" id="Options"></div></div>');
			
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
        Custom Field
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Inventory System</a></li>
		<li><a href="#">Custom Field</a></li>
        <li class="active">Edit Custom Field</li>
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
              <h3 class="box-title">Edit Custom Field</h3>
			  <button type="submit" class="btn btn-default pull-right" onClick="location.href='CustomField.php'">Back</button>
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
            <form class="form-horizontal" action="<?php echo $self;?>?CustomFieldID=<?php echo $CustomFieldID;?>" method="post">
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
                  <label for="inputEmail3" class="col-sm-2 control-label">Field Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="FieldName" value="<?php echo $FieldName; ?>" placeholder="Enter Field Name">
                  </div>
                </div>
				
				<div class="form-group">
			      <label for="inputEmail3" class="col-sm-2 control-label">Select Type</label>
				  <div class="col-sm-10">
                  <select class="form-control" name="TypeID">
				  <option value=0>Select Type</option>
				  <?php
				  for($i=1;$i<=count($type);$i++)
				  {
				  ?>
                    <option <?php echo ($TypeID==$i ? 'selected' : '');?> value="<?php echo $i;?>"><?php echo $type[$i-1];?></option>
				  <?php
				  }
				  ?>
                  </select>
				  </div>
                </div>
				</div>
				
				<div class="col-md-6">
				  <button type="button" class="btn-xs btn-info pull-right" id="btnaddmore">Add More</button>
				  <button type="button" style="margin-right:5px;" class="btn-xs btn-danger pull-right" id="btndeleteless">Delete</button>
                 
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="margin-top:15px;">Options</label>
                  
				  <div class="col-sm-10" id="optionspanel" >					
				  <input type="text" name="Options[]" id="Options" />
				  <br>
				  <br>
                  </div>
				  <?php
				  if($OptionsString!='')
				  {
				  ?>
				  <div class="col-md-12">
                  <table id="example2" class="table table-bordered table-hover table-condensed">
                    <thead>
                    <tr>
                      <th></th>
                      <th>Options</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
				    <?php
				    for($i=0;$i<count($Options);$i++)
				    {
				    ?>
                    <tr>
                      <td></td>
                      <td><?php echo $Options[$i];?></td>
					  <td><button type="button" onClick="location.href='DeleteOptions.php?CustomFieldID=<?php echo $CustomFieldID;?>&Option=<?php echo $Options[$i];?>'" class="btn-xs btn-danger pull-right">Delete</button></td>
                    </tr>
                    </tbody>
                    <?php
				    }
				    ?>
                  </table>
				  </div>
				  <?php
				  }
				  ?>
                
				 </div>
			    </div>
			    
				</div>
				</div>
                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Edit</button>
              </div>
              <!-- /.box-footer -->
			   <input type="hidden" name="submit_key" value="submit_value" />
            </form>
		  </div>
          </div>
          <!-- /.box -->
          
        </div>
        <!--/.col (right) -->
      
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
