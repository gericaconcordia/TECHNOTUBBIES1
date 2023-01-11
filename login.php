<!DOCTYPE html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>



    <link href="css2/style.css" rel="stylesheet">



    <meta charset="utf-8">
    <title>Login</title>
  
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">

    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
  
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css2/theme.min.css">
    
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
                echo '<li class="nav-item active" ><a href="login.php" class="nav-link">Login</a> </li>
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
      <!-- Hero section-->
     
     <div class="container py-4 py-lg-5 my-4">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="card border-0 shadow">
              <div class="card-body">
                <h2 style="text-align: center;" class="h4 mb-2">LOGIN</h2>
                 <span style="color:red;"><?php echo $message; ?></span> 
                <span style="color:green;"><?php echo $success; ?></span>

                <div class="py-3">
                </div>

    <form action="" method="post" novalidate>
                  <div class="input-group mb-3"><i class="ci-user position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                    <input class="form-control rounded-start" type="text" placeholder="Username" name="username" required>
                  </div>


                  <div class="input-group mb-3"><i class="ci-locked position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                    <div class="password-toggle w-100">
                      <input class="form-control" type="password" placeholder="Password" name="password" required>
                      <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                      </label>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap justify-content-between">
                    <div class="form-check">
                      <!--<input class="form-check-input" type="checkbox" checked id="remember_me">
                      <label class="form-check-label" for="remember_me">Remember me</label>-->
                    </div>
                  </div>
                
                  <div class="text-end pt-4">
                    <button class="btn btn-primary" type="submit" id="buttn" name="submit" value="Login"><i class="ci-sign-in me-2 ms-n21"></i>Sign In</button>
                  </div>
      </form>

  
  <div class="cta">Not registered?<a href="registration.php" style="color:#5c4ac7;"> Create an account</a></div>


 
              </div>
            </div>
          </div>
          <div class="col-md-2"></div>

        
        </div>
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

