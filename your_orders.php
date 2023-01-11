<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  
error_reporting(0);  
session_start(); 

if(empty($_SESSION['user_id']))  
{
  header('location:login.php');
}
else
{

?>

  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>



    <link href="css2/style.css" rel="stylesheet">



    <meta charset="utf-8">
    <title>Orders</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">

    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css2/theme.min.css">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html'+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>

  <style>
  .page-wrapper {
    padding-top: 0px;
}
.popular {
  padding: 70px 0 90px;
  background-size: 100%;
}

.food-item-wrap {
  border: 1px solid #eaebeb;
  border-radius: 2px;
  overflow: hidden;
  margin-bottom: 30px;
  background: #fafaf8;
}

.food-item-wrap h5 a {
  color: #25282b;
  font-size: 21px;
  font-weight: 600;
}

.food-item-wrap .title h3 {
  font-size: 16px;
  margin-bottom: 35px;
  color: #414551;
  line-height: 21px;
  font-weight: 300;
}

.food-item-wrap .price {
  font-size: 21px;
  font-weight: 700;
  color: #000;
  margin-top: 4px;
  display: inline-block;
}

.food-item-wrap .product-name {
  margin-bottom: 20px;
}

.food-item-wrap .content {
  padding: 25px 15px 35px;
}

.food-item-wrap .restaurant-block {
  border-top: 1px solid #eaebeb;
  float: left;
  width: 100%;
}

.food-item-wrap .right-text {
  margin-left: 10px;
}

.food-item-wrap .right-text a {
  display: block;
}

.food-item-wrap .left {
  float: left;
  padding: 8px 15px;
}

.food-item-wrap .left img {
  padding-top: 3px;
}

@media (min-width: 320px) and (max-width: 568px) {
  .food-item-wrap .left {
    float: left;
    padding: 10px;
  }
  .food-item .left img {
    width: 45px;
  }
  .food-item-wrap .right-text {
    font-size: 13px;
  }
}

.food-item-wrap .right {
  padding: 10px 0;
}

.food-item-wrap .right-like-part {
  border-left: 1px solid #eaebeb;
  padding: 25px 15px;
  font-size: 13px;
}

@media (min-width: 280px) and (max-width: 580px) {
  .food-item-wrap .right-like-part {
    padding: 24px 10px;
    font-size: 10px;
  }
}

.food-item-wrap .right-like-part img {
  vertical-align: middle;
  margin-right: 5px;
}

.food-item-wrap .right-text a {
  color: #25282b;
  font-weight: 400;
}

.food-item-wrap .right-text span,
.food-item-wrap .right-like-part,
.food-item-wrap .right-like-part span {
  font-weight: 300;
  color: #748796;
}

.food-item-wrap .figure-wrap {
  position: relative;
  height: 210px;
}

.food-item-wrap .food-item-wrap figure {
  position: relative;
  overflow: hidden;
  margin-bottom: 15px;
}

.food-item-wrap .food-item-wrap figure img {
  width: 100%;
}

.food-item-wrap .figure-wrap:after {
  position: absolute;
  bottom: -1px;
  left: 0;
  content: "";
  background: url(../images/zig-zag.png);
  width: 100%;
  height: 5px;
}

.food-item-wrap:hover h5 > a,
.food-item-wrap:hover .right-text > a {
  color: #5c4ac7;
}

.food-item-wrap .figure-text {
  position: absolute;
  top: 0;
  padding: 13px 28px 18px 18px;
  width: 100%;
  height: 100%;
}

.food-item-wrap .figure-text .bottom {
  position: absolute;
  bottom: 25px;
  float: left;
  width: 87%;
}

.food-item-wrap .review {
  margin-top: 5px;
  font-size: 10px;
  text-transform: uppercase;
}

.food-item-wrap .distance {
  background: #5c4ac7;
  border-radius: 3px;
  color: #fff;
  font-size: 12px;
  padding: 0 10px;
  display: inline-block;
  position: absolute;
  top: 10px;
  left: 20px;
}

.food-item-wrap .rating i {
  color: #ffd953;
  font-size: 16px;
}

.food-item-wrap .rating .fa-star-o {
  font-size: 17px;
}

.food-item-wrap .rating {
  position: absolute;
  bottom: 30px;
  left: 20px;
}

.food-item-wrap .review {
  right: 30px;
  position: absolute;
  bottom: 30px;
}

.food-item-wrap .review a {
  color: #fff;
}

.food-item-wrap .left-sidebar,
.food-item-wrap .right-sidebar {
  width: 300px;
}

.food-item-wrap .lf-ghost {
  width: 395px !important;
  float: left;
}

@media (max-width: 543px) {
  ...;
}

@media (min-width: 544px) and (max-width: 767px) {
  .food-item-wrap .right-text {
    margin: 5px 10px;
    font-size: 14px;
    line-height: 20px;
  }
  .food-item-wrap .right-like-part {
    width: 100%;
    padding: 5px 10px;
    background: #fff;
    border: 0;
    border-top: 1px solid #eaebeb;
    text-align: center;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  .food-item-wrap .restaurant-block {
    text-align: center;
  }
  .food-item-wrap .left {
    float: none;
  }
  .food-item-wrap .pull-left {
    float: none;
  }
  .food-item-wrap .right-text span,
  .food-item-wrap .right-like-part,
  .food-item-wrap .right-like-part span {
    width: 100%;
  }
  .right-like-part.pull-right {
    background-color: #fff;
    border: 0;
    border-top: 1px solid #eaebeb;
    padding: 10px;
  }
  .food-item-wrap .price-btn-block {
    text-align: center;
  }
  .food-item-wrap .price-btn-block .price {
    margin-bottom: 15px;
    display: block;
  }
  .food-item-wrap .price-btn-block .btn {
    float: none;
  }
}
.btn{
  padding: 3px 8px;
}
</style>


  <!-- Body-->
  <body style="font-family: 'Poppins', sans-serif;" class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="../external.html?link=http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>

       <?php
include("connection/connect.php"); 
error_reporting(0); 
session_start(); 
if(isset($_POST['submit']))  
{
  $username = $_POST['username'];  
  $password = $_POST['password'];
  
  if(!empty($_POST["submit"]))   
     {
  $loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
  $result=mysqli_query($db, $loginquery); //executing
  $row=mysqli_fetch_array($result);
  
                          if(is_array($row)) 
                {
                                      $_SESSION["user_id"] = $row['u_id']; 
                     header("refresh:1;url=index.php"); 
                              } 
              else
                  {
                                        $message = "Invalid Username or Password!"; 
                                }
   }
  
  
}
?>
    <!-- Sign in / sign up modal-->
   <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-secondary">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
            </ul>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

           <span style="color:red;"><?php echo $message; ?></span> 
           <span style="color:green;"><?php echo $success; ?></span>

          <div class="modal-body tab-content py-4">
            <form action="" method="post" class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="mb-3">
                <label class="form-label" for="si-email">Username</label>
                <input  class="form-control" name="username" type="text" id="si-email" placeholder="Enter your Username" required>
                <div class="invalid-feedback">Please Enter your Username</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" name="password" type="password" id="si-password" placeholder="Enter your password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3 d-flex flex-wrap justify-content-between">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="si-remember">
                  <label class="form-check-label" for="si-remember">Remember me</label>
                </div><a class="fs-sm" href="registration.php">Create account</a>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" = type="submit" id="buttn" name="submit" value="Login">Sign in</button>
            </form>

          </div>
        </div>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Navbar for Food Delivery Service demo-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <header class="navbar d-block navbar-sticky navbar-expand-lg navbar-light bg-light" style="background: white;">
        <div class="container"><a class="navbar-brand d-none d-sm-block me-4 order-lg-1" href="index.php"><img src="img/logo-dark2.png" width="60" alt="Cartzilla"></a><a class="navbar-brand d-sm-none me-2 order-lg-1" href="index.php"><img src="img/logo-icon.png" width="74" alt="Cartzilla"></a>
          <div class="navbar-toolbar d-flex align-items-center order-lg-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool d-none d-lg-flex" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#searchBox" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-search"></i></div></a><a class="navbar-tool ms-2" href="#signin-modal" data-bs-toggle="modal"><span class="navbar-tool-tooltip">Account</span>
              <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div></a>
          </div>
          <div class="collapse navbar-collapse me-auto order-lg-2" id="navbarCollapse">
            <!-- Search (mobile)-->


          
           
            <!-- Primary menu-->
            <ul class="navbar-nav">
            
              <li class="nav-item"> <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a> </li>           
               <li class="nav-item"> <a class="nav-link" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
              <?php
            if(empty($_SESSION["user_id"])) // if user is not login
              {
                echo '<li class="nav-item"><a href="login.php" class="nav-link">Login</a> </li>
                <li class="nav-item"><a href="registration.php" class="nav-link">Register</a> </li>';
              }
            else
              {

                  
                  echo  '<li class="nav-item active"><a href="your_orders.php" class="nav-link ">My Orders</a> </li>';
                  echo  '<li class="nav-item"><a href="logout.php" class="nav-link ">Logout</a> </li>';
              }

            ?>              
            </ul>
          </div>


        </div>
        <!-- Search collapse-->
        <div class="search-box collapse" id="searchBox">
          <div class="container py-2">
            <div class="input-group"><i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
              <input class="form-control rounded-start" type="text" placeholder="What do you need?">
            </div>
          </div>
        </div>
      </header>
      <!-- Hero section-->
     <div style="padding: 0 125px">


      <!-- Light table-->
          <section class="pb-5 mb-md-2" id="tables-basic">  
            <div class="card border-0 shadow">
              <div class="card-header">
                <h3>My Order</h3>
              </div>
              <div class="card-body col-lg-12">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="result1" role="tabpanel">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr style="text-align: center; font-size: 17px">
                            <th style="font-weight: 600">Item</th>
                            <th style="font-weight: 600">Quantity</th>
                            <th style="font-weight: 600">Price</th>
                            <th style="font-weight: 600">Status</th>
                            <th style="font-weight: 600">Date</th>
                            <th style="font-weight: 600">Action</th>
                          </tr>
                        </thead>
                        <tbody style="text-align: center;">


              <?php 
        
            $query_res= mysqli_query($db,"select * from users_orders where u_id='".$_SESSION['user_id']."'");
                        if(!mysqli_num_rows($query_res) > 0 )
                            {
                              echo '<td colspan="6"><center>You have No orders Placed yet. </center></td>';
                            }
                          else
                            {           
                      
                      while($row=mysqli_fetch_array($query_res))
                      {
            
              ?>


                          <tr>
                            <th scope="row"><?php echo $row['title']; ?></th>
                            <td><?php echo $row['quantity']; ?></td>
                            <td>₱<?php echo $row['price']; ?></td>
                            <td><?php 
                                      $status=$row['status'];
                                      if($status=="" or $status=="NULL")
                                      {
                                      ?>
                                      <button type="button" class="btn btn-info"><span class="ci-menu"  aria-hidden="true" ></span> Pending</button>
                                       <?php 
                                        }
                                         if($status=="in process")
                                       { ?>
                                        <button type="button" class="btn btn-warning"><span class="ci-settings"  aria-hidden="true" ></span> On The Way!</button>
                                      <?php
                                        }
                                      if($status=="closed")
                                        {
                                      ?>
                                       <button type="button" class="btn btn-success" ><span  class="ci-check-circle" aria-hidden="true"></span> Delivered</button> 
                                      <?php 
                                      } 
                                      ?>
                                      <?php
                                      if($status=="rejected")
                                        {
                                      ?>
                                       <button type="button" class="btn btn-danger"> <i class="ci-close"></i> Cancelled</button>
                                      <?php 
                                      } 
                                      ?>
                                    </td>
                            <td><?php echo $row['date']; ?></td>
                            <td style="text-align: center;">

                              <a href="delete_orders.php?order_del=<?php echo $row['o_id'];?>" onclick="return confirm('Are you sure you want to cancel your order?');">

                                <button class="btn btn-outline-danger btn-icon mb-2 me-2" type="button"><i class="ci-trash"></i></button></td></a>
                          </tr>

                            <?php }} ?>   

                        </tbody>

                      </table>
                    </div>
                  </div>
                
                 
                </div>
              </div>
            </div>
          </section>
       

     </div>


     



     
    </main>
    <!-- Footer-->
    <footer class="footer bg-darker pt-5">
      <div class="container pt-2">
        <div class="row pb-2">
          <div class="col-lg-2 col-sm-4 pb-2 mb-4">
            <div class="mt-n1"><a class="d-inline-block align-middle" href="index.php"><img class="d-block mb-4" src="admin/images/logo-dark3.png" width="117" alt="Cartzilla"></a></div>
      
          </div>
          <div class="col-lg-2 col-sm-4">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Join us</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Careers</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Restaurants</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Become a Courier</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">About</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Let us help you</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Help Center</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Support</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Contacts</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Follow us</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Facebook</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Twitter</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Instagram</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-sm-8">
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Download our app</h3>
              <div class="d-flex flex-wrap"><a class="btn-market btn-apple border border-light me-3 mb-2" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a><a class="btn-market btn-google border border-light mb-2" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
            </div>
          </div>
        </div>
        <hr class="hr-light mt-md-2 mb-3">
  
      </div>
    </footer>
    <!-- Toolbar for handheld devices (Food delivery)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" data-bs-toggle="modal"><span class="handheld-toolbar-icon"></span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item"></a></div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>




    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
  </body>

</html>

<?php
}
?>