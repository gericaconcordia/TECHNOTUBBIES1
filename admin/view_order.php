<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

?>	
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


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
	
<div class="wrapper">
	<div id="loader"></div>
	
  <header class="main-header">
	<div style="background: white" class="d-flex align-items-center logo-box justify-content-start d-md-none d-block">	
		<!-- Logo -->
		<a href="dashboard.php" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-30">
			
			  <span class="dark-logo"><img src="images/logo-dark2.png" alt="logo"></span>
		  </div>
		  <div class="logo-lg" style="text-align: center;font-family: impact;right: 20px;position: relative;">
			  <span class="light-logo" ><img  src="images/logo-dark2.png" width="60" alt="logo"></span>
			 
		  </div>
		</a>	
	</div>   
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
			<li class="btn-group nav-item d-xl-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="Full Screen">
					<i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
				<div class="d-flex align-items-center logo-box justify-content-start d-md-block d-none">	
			<!-- Logo -->
			<a href="dashboard.php" class="logo">
			  <!-- logo-->
			  <div class="logo-mini">
				  <span class="light-logo"><img src="images/logo-dark2.png" alt="logo"></span>
			  </div>
			  <div class="logo-lg">
				  <span class="light-logo fs-36 fw-700"><span class="text-primary"></span></span>
			  </div>
			</a>	
		</div>
		<div class="user-profile my-15 px-20 py-10 b-1 rounded10 mx-15">
			<div class="d-flex align-items-center justify-content-between">			
				<div class="image d-flex align-items-center">
				    <img src="theme/images/avatar/avatar-13.png" class="rounded-0 me-10" alt="User Image">
					<div>
						<h4 class="mb-0 fw-600">Admin</h4>
						<p class="mb-0">Super Admin</p>
					</div>
				</div>
				<div class="info">
					<a class="dropdown-toggle p-15 d-grid" data-bs-toggle="dropdown" href="#"></a>
					<div class="dropdown-menu dropdown-menu-end">
		
					  <a class="dropdown-item" href="logout.php"><i class="ti-lock"></i> Logout</a>
					</div>
				</div>
			</div>
	    </div>
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 97%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">	
				<li class="header">Main Menu</li>
				<li>
				  <a href="dashboard.php">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>Dashboard</span>
				  </a>
				</li>
				

				<li >
				  <a href="all_users.php">
					<i class="icon-Group"><span class="path1"></span><span class="path2"></span></i>
					<span>Users</span>
				  </a>
				</li>


				<li class="treeview">
				  <a href="#">
					<i class="icon-Cart"><span class="path1"></span><span class="path2"></span></i>
					<span >Restaurant</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="all_restaurant.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>All Restaurant</a></li>
					<li ><a href="add_category.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Category</a></li>
					<li ><a href="add_restaurant.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Restaurant</a></li>
				
						
				  </ul>
				</li>
				
				<li class="treeview">
				  <a href="#">
					<i class="icon-Dinner"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
					<span>Menus</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="all_menu.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>All Menus</a></li>
					<li ><a href="add_menu.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Menu</a></li>
					
				  </ul>
				</li>
				  
				 

				<li class="active">
				  <a href="all_orders.php">
					<i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
					<span>Order</span>
					<span class="pull-right-container">
					</span>
				  </a>
				</li> 

				<li>
				  <a href="logout.php">
					<i class="glyphicon glyphicon-off fs-5"><span class="path1"></span><span class="path2"></span></i>
					<span>Lagout</span>
				  </a>
				</li>  
			  </ul>
			 
		  </div>
		</div>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    	<div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">View Orders</h4>
					<div class="d-inline-block align-items-center">
						
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">
			  <div class="col-12">
				<div class="box">
				  <div class="box-body">
					<div class="table-responsive">
						<table id="myTable" class="table mb-0">
                                       
                                        <tbody>
                                           <?php
											$sql="SELECT users.*, users_orders.* FROM users INNER JOIN users_orders ON users.u_id=users_orders.u_id where o_id='".$_GET['user_upd']."'";
												$query=mysqli_query($db,$sql);
												$rows=mysqli_fetch_array($query);
												
												
																		
												?>
											
											<tr>
													<td><strong>Username:</strong></td>
												    <td><center><?php echo $rows['username']; ?></center></td>
													   <td><center>
													   <a href="javascript:void(0);" onClick="popUpWindow('order_update.php?form_id=<?php echo htmlentities($rows['o_id']);?>');" title="Update order">
															 <button type="button" class="btn btn-md btn-primary">Update Order Status</button></a>
															 </center>
											 </td>
												  
																																					
											</tr>	
											<tr>
												<td><strong>Title:</strong></td>
												    <td><center><?php echo $rows['title']; ?></center></td>
													    <td><center>
													   <a href="javascript:void(0);" onClick="popUpWindow('userprofile.php?newform_id=<?php echo htmlentities($rows['o_id']);?>');" title="Update order">
														<button type="button" class="btn btn-secondary btn-md btn-info">View User Detials</button></a>
											
													   </center></td>
												   																								
											</tr>	
											<tr>
													<td><strong>Quantity:</strong></td>
												    <td><center><?php echo $rows['quantity']; ?></center></td>
													  
												   																							
											</tr>
											<tr>
													<td><strong>Price:</strong></td>
												    <td><center>₱<?php echo $rows['price']; ?></center></td>
													   
												   																							
											</tr>
											<tr>
													<td><strong>Address:</strong></td>
												    <td><center><?php echo $rows['address']; ?></center></td>
													  
												   																							
											</tr>
											<tr>
													<td><strong>Date:</strong></td>
												     <td><center><?php echo $rows['date']; ?></center></td>
													  
												   																							
											</tr>
											<tr>
													<td><strong>Status:</strong></td>
													<?php 
																			$status=$rows['status'];

																			if($status=="" or $status=="NULL")
																			{
																			?>
																			<td style="text-align: center;"><span class="badge badge-info"><i class="fa fa-bars"></i> Pending</span></td>
																		   <?php 
																			  }
																			   if($status=="in process")
																			 { ?>
																			<td style="text-align: center;">  
																			<span class="badge badge-warning"><i class="fa fa-cog fa-spin"></i> On a Way!</span>
																		</td> 
																			<?php
																				}
																			if($status=="closed")
																				{
																			?>
																			<td style="text-align: center;">
																			<span class="badge badge-primary"><i class="fa fa-check-circle"></i> Delivered</span>
																		</td> 
																			<?php 
																			} 
																			?>
																			<?php
																			if($status=="rejected")
																				{
																			?>
																			<td style="text-align: center;">
																				<span class="badge badge-danger"><i class="fa fa-close"></i> Cancel</span>
																			</td> 
																			<?php 
																			} 
																			?>
													  
												   																							
											</tr>
											
																				
																															
																						
									
                                            
                                           
                                        </tbody>
                                    </table>
					</div>
				  </div>
				</div>
			  </div>		  
		  </div>

		</section>
		<!-- /.content -->
	  </div>
	  
  </div>
  
  <!-- Side panel -->   

  
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
