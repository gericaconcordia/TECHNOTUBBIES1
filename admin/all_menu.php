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


    <title>All Menu</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="theme/src/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="theme/src/css/style.css">
	<link rel="stylesheet" href="theme/src/css/skin_color.css">
	<link rel="stylesheet" href="theme/font-awesome-4.7.0/css">
	<link rel="stylesheet" href="theme/font-awesome-4.7.0/css/font-awesome.min.css">
     
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


				<li class="treeview ">
				  <a href="#">
					<i class="icon-Cart"><span class="path1"></span><span class="path2"></span></i>
					<span>Restaurant</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="all_restaurant.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>All Restaurant</a></li>
					<li><a href="add_category.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Category</a></li>
					<li><a href="add_restaurant.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Restaurant</a></li>
				
						
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
					<li class="active"><a href="all_menu.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>All Menus</a></li>
					<li><a href="add_menu.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add Menu</a></li>
					
				  </ul>
				</li>
				  
				 

				<li>
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
					<h4 class="page-title">All Menu</h4>
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
						<table id="productorder" class="table table-hover no-wrap product-order" data-page-size="10">
							<thead style="background: #ffa800;color: white;">
								<tr style="text-align: center;">
									 <th>Restaurant</th>
                                     <th>Dish</th>
                                     <th>Description</th>
                                     <th>Price</th>
                                     <th>Image</th>
                                     <th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
												$sql="SELECT * FROM dishes order by d_id desc";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="11"><center>No Menu</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																				$mql="select * from restaurant where rs_id='".$rows['rs_id']."'";
																				$newquery=mysqli_query($db,$mql);
																				$fetch=mysqli_fetch_array($newquery);
																				
																				
																					echo '<tr><td>'.$fetch['title'].'</td>
																					
																								<td>'.$rows['title'].'</td>
																								<td>'.$rows['slogan'].'</td>
																								<td>₱'.$rows['price'].'</td>
																								
																								
																								<td>
											<img src="Res_img/dishes/'.$rows['img'].'" class="avatar" alt="">
										</td>
																								
																							
																									 <td><a href="delete_menu.php?menu_del='.$rows['d_id'].'" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
																									 <a href="update_menu.php?menu_upd='.$rows['d_id'].'" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="fa fa-edit"></i></a>
																									</td></tr>';
																					 
																						
																						
																		}	
														}
												
											
											?>
								

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
	
</body>

</html>
