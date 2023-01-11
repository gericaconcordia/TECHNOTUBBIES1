<html lang="en">
<?php

include("../connection/connect.php");
error_reporting(0);
session_start();
if(strlen($_SESSION['user_id'])==0)
  { 
header('location:../login.php');
}
else
{
  if(isset($_POST['update']))
  {
$form_id=$_GET['form_id'];
$status=$_POST['status'];
$remark=$_POST['remark'];
$query=mysqli_query($db,"insert into remark(frm_id,status,remark) values('$form_id','$status','$remark')");
$sql=mysqli_query($db,"update users_orders set status='$status' where o_id='$form_id'");

echo "<script>alert('form details updated successfully');</script>";

  }

 ?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>	
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://crm-admin-dashboard-template.multipurposethemes.com/images/favicon.ico">

    <title>View Orders</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="theme/src/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="theme/src/css/style.css">
	<link rel="stylesheet" href="theme/src/css/skin_color.css">
	<link rel="stylesheet" href="theme/font-awesome-4.7.0/css">
	<link rel="stylesheet" href="theme/font-awesome-4.7.0/css/font-awesome.min.css">

	<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+1000+',height='+1000+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
 <div class="container py-4 py-lg-5 my-4">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="card border-0 shadow">
              <div class="card-body">
             
                 

    <form name="updateticket" id="updatecomplaint" method="post">

    	<div class="table-responsive">
								<table class="table">
									<thead class="">
										<?php 

$ret1=mysqli_query($db,"select * FROM users_orders where o_id='".$_GET['newform_id']."'");
$ro=mysqli_fetch_array($ret1);
$ret2=mysqli_query($db,"select * FROM users where u_id='".$ro['u_id']."'");

while($row=mysqli_fetch_array($ret2))
{
?>

    <div style="text-align: center;">
  <span><i class="fa fa-user-circle-o fa-4x"></i></span>
		</div>
    <tr>
      <td colspan="2" style="text-align: center;"><b><?php echo $row['f_name'];?>'s Profile</b></td>
      
    </tr>
    
    
    <tr>
      <td  >&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr>
      <td style="opacity: 50%;"><b>Reg Date:</b></td>
      <td  style="text-align: right;"><?php echo htmlentities($row['date']); ?></td>
    </tr>
	
	<tr height="50">
      <td  style="opacity: 50%;"><b>First Name:</b></td>
      <td  style="text-align: right;"><?php echo htmlentities($row['f_name']); ?></td>
    </tr>
	<tr height="50">
      <td  style="opacity: 50%;"><b>Last Name:</b></td>
      <td  style="text-align: right;"><?php echo htmlentities($row['l_name']); ?></td>
    </tr>
    <tr height="50">
      <td  style="opacity: 50%;"><b>User Email:</b></td>
      <td  style="text-align: right;"><?php echo htmlentities($row['email']); ?></td>
    </tr>

<tr height="50">
      <td  style="opacity: 50%;"><b>User Phone:</b></td>
      <td  style="text-align: right;"><?php echo htmlentities($row['phone']); ?></td>
    </tr>
     
      
     <tr height="50">
      <td  style="opacity: 50%;"><b>Status:</b></td>
      <td  style="text-align: right;"><?php if($row['status']==1)
      { echo "<div class='btn btn-primary'>Active</div>";
} else{
  echo "<div class='btn btn-danger'>Block</div>";
}
        ?></td>
    </tr>
    
    <tr>
  
      <td colspan="2"  style="text-align: right;">   
      <input name="Submit2" type="submit" class="btn btn-danger" value="Close this window " onClick="return f2();" style="cursor: pointer;"  /></td>
    </tr>
   
    <?php } 

 
    ?>
									</thead>
									
								</table>
							</div>
      </form>
              </div>
            </div>
          </div>
          <div class="col-md-2"></div>

        
        </div>
      </div>	
	<!-- Page Content overlay -->	
	<!-- Vendor JS -->
	<script src="theme/src/js/vendors.min.js"></script>
	<script src="theme/src/js/pages/chat-popup.js"></script>
    <script src="theme/assets/icons/feather-icons/feather.min.js"></script>	
    <script src="theme/assets/vendor_components/datatable/datatables.min.js"></script>

	
	<script src="theme/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="theme/assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
	
	<!-- CRMi App -->
	<script src="theme/src/js/template.js"></script>
	<script src="theme/src/js/pages/dashboard.js"></script>
	<script src="theme/src/js/pages/data-table.js"></script>
	<script src="theme/assets/vendor_components/sweetalert/sweetalert.min.js"></script>
    <script src="theme/assets/vendor_components/sweetalert/jquery.sweet-alert.custom.js"></script>
       <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="theme/assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js"></script>
    <script src="theme/src/js/pages/toastr.js"></script>
    <script src="theme/src/js/pages/notification.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
	
</body>

</html>

 <?php } ?>