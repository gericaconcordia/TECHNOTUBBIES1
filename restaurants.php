<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  
error_reporting(0);  
session_start(); 

?>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>



    <link href="cssc/style.css" rel="stylesheet">



    <meta charset="utf-8">
    <title>Restaurant</title>
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
               <li class="nav-item active"> <a class="nav-link" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
      
              <?php
            if(empty($_SESSION["user_id"])) // if user is not login
              {
                echo '<li class="nav-item"><a href="login.php" class="nav-link">Login</a> </li>
                <li class="nav-item"><a href="registration.php" class="nav-link">Register</a> </li>';
              }
            else
              {

                  echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link ">My Orders</a> </li>';
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

          
           
           
          

             <div class="page-title-overlap bg-darker pt-5">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="#"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="#">Restaurants</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Checkout</h1>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <section class="col-lg-12">
            <!-- Steps-->
            <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active">
                <div class="step-progress"><span class="step-count">1</span></div>
                <div class="step-label"><i class="ci-cart"></i>Choose Restaurant</div></a>

                <a class="step-item">
                <div class="step-progress"><span class="step-count">2</span></div>
                <div class="step-label"><i class="ci-user-circle"></i>Pick Your favorite food</div></a>

                <a class="step-item">
                <div class="step-progress"><span class="step-count">3</span></div>
                <div class="step-label" ><i class="ci-package"></i>Order and Pay</div></a>

              </div>
            <!-- Order details-->
            <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">List of Restaurants</h2>
            <!-- Item-->
            <?php $ress= mysqli_query($db,"select * from restaurant");
                        while($rows=mysqli_fetch_array($ress))
                      {
                          
            
        echo'
            <div class="d-sm-flex justify-content-between my-4 pb-3 border-bottom" >
              <div class="d-sm-flex text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="#" ><img href="dishes.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="Food logo" width="160" alt="Product"></a>

                <div class="pt-2">
                  <h3 class="product-title fs-base mb-2"><span class="text-muted me-2"><h6><a href="dishes.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h6> <span class="text-muted me-2">Address:</span><span style="color: #323232">'.$rows['address'].'</span></h3>
                </div>
              </div>

              <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-lg-0 text-center text-md-end" style="padding-top: 49px;" >
           
                  <a href="dishes.php?res_id='.$rows['rs_id'].'"><button  class="btn btn-outline-primary d-block w-100" type="submit" style="padding: 10px 38px;"> View Menu</button></a>
              </div>


            </div>


            ';
           
            }
            
            
            ?>

          </section>
        
        </div>
       
      </div>
   

   <br><br>
 
 
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

