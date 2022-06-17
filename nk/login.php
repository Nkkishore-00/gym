<?php
include("config.php");
$msg!='';

if($_SESSION['name'])
{
  header("Location:dashboard.php");
}

if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $pwd=$_POST['pwd'];

  if($email!='' && $pwd!='')
  {
      $pwd=md5($pwd);
      $lg_qry=$conn->query("select * from tbl_user where email='$email' and pwd='$pwd'");
      if($lg_qry->rowCount()==1)
      {
          $lg_qry_arr=$lg_qry->fetch();
          $_SESSION['name']=$lg_qry_arr['name'];
          $_SESSION['utyp']=$lg_qry_arr['utyp'];
          header("Location:dashboard.php");
      }
      else
      {
        $msg="Email or pwd Incorrect";
		    $tpy="danger";
      }


  }
  else{
    $msg="Please fill All the Fields";
		$tpy="warning";
  }
}


?>



<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Venkat gym - best gym in chennai - 24 hours">
    
    <meta name="description" content="Training Studio is located in the prime location of the city with 24 hours facility and unisex">
    <meta name="author" content="Venkat from Training Studio">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Login - Training Studio</title>
 
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Training<em> Studio</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
                            <li class="main-button"><a href="register.php">Sign Up</a></li>
                            <li class="main-button"><a href="login.php">Login Page</a></li>
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/gym-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
              <div class="caption">
                <h6>Welcome Admin - Login Page</h6>
                 
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

 
    
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    
                </div>
                
             <!-- ***** Venkat code starts ***** --> 
                             
                             
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="dashboard.php" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            </div>
                            
                            <div class="col-md-6 col-sm-12">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" required>
                            </div>
                            
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" name = "login" class="main-button">Click to login</button>
                              </fieldset>
                            </div>
                  
                          </div>
                        </form>
                    </div>
               
               <!-- 
                Condition 1: The input controls should be placed in the
                form tag
                Condition 2: Action of the form tag can be this page or any
                page you wnt to navigate...
                Example, after signup page in gmail... you will enter into 
                the inbox page......
                
                Condition 3: method = post...if it not there..the data from
                the client wont reach the server... hackers used to removve
                this function... to make the website dead...
                
                In the controls ...it safe to have the id and name as similar
                
             --> 
                 
                  
                    </div>
                
               <!-- ***** Venkat code ends ***** --> 
                
                
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2020 Training Studio
                    
                    - Designed by <a rel="nofollow" href="https://templatemo.com" class="tm-text-link" target="_parent">TemplateMo</a></p>
                     
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>