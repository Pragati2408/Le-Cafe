<?php
session_start();
?>

<html>

  <head>
    <title> Home | Le Cafe' </title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CFDB92WQEC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CFDB92WQEC');
</script>
  </head>
  <style>
    .page1-homepage-section5-background-img {
  background-image: url("images/background.jpg"),
    linear-gradient(to left, rgba(0, 0, 0, 0.404), rgba(255, 255, 255, 0));
  background-repeat: no-repeat;
  background-position: center;
  height: 35rem;
  background-blend-mode: normal;
}
.page1-homepage-section5-content {
  background-color: rgba(78, 46, 46, 0.185);
  padding: 6% 8%;
  border-radius: 0.3rem;
}

.page1-homepage-section5-content-btn {
  background-color: rgba(255, 255, 255, 0);
  border: 3px solid rgb(220, 20, 20);
  color: rgb(255, 255, 255);
  font-family: "Heebo", sans-serif;
  font-size: 0.8rem;
  padding: 3.5% 10%;
}
.page1-homepage-section5-content-btn:hover {
  background-color: rgb(220, 20, 20);
  text-decoration: none;
}
.page1-homepage-section8-subhead {
  font-family: "Charmonman", cursive;
  font-size: 4.2rem;
  font-weight: 600;
}
.page1-homepage-section8-head {
  font-family: "Philosopher", sans-serif;
  font-size: 5.2rem;
}
.page1-homepage-section8-card {
  width: 100%;
  border-radius: 0;
  border: none;
}
.page1-homepage-section8-card-body {
  border: none;
  color: white;
  background-color: rgb(36, 36, 36);
}
.page1-homepage-section8-card-body-head {
  font-size: 1.2rem;
}
.page1-homepage-section8-container {
  border: 1px solid rgb(220, 20, 20);
  background: rgb(220, 20, 20);
}
.page1-homepage-section8-container-subhead {
  font-family: "Charmonman", cursive;
  font-size: 1.25rem;
  font-weight: 600;
}
.page1-homepage-section8-container-head {
  font-family: "Philosopher", sans-serif;
  font-size: 2.2rem;
}
.page1-homepage-section8-container-detailes {
  font-family: "Heebo", sans-serif;
  font-size: 0.78rem;
  font-weight: 400;
  color: rgb(255, 255, 255);
}
.page1-homepage-section8-container-button {
  font-family: "Heebo", sans-serif;
  font-size: 0.8rem;
  padding: 6% 12%;
  background-color: transparent;
  border: 3px solid rgb(255, 255, 255);
  color: white;
}
.page1-homepage-section8-container-button:hover {
  background-color: rgb(220, 20, 20);
  color: white;
}
.page1-homepage-section8-container-button-text {
  text-decoration: none;
  color: white;
}
.page1-homepage-section8-container-button-text:hover {
  text-decoration: none;
  color: white;
}
.page1-homepage-section8-contact-subhead {
  font-family: "Charmonman", cursive;
  font-size: 1.2rem;
  font-weight: 600;
}
.page1-homepage-section8-contact-head {
  font-family: "Philosopher", sans-serif;
  font-size: 2.2rem;
}
.page1-homepage-section8-contact-detailes-head {
  font-family: "Philosopher", sans-serif;
  font-size: 1.1rem;
  color: rgb(220, 20, 20);
}
.page1-homepage-section8-contact-detailes-p {
  font-family: "Heebo", sans-serif;
  font-size: 0.95rem;
}
.page1-homepage-section8-contact-detailes-btn {
  background-color: rgba(255, 255, 255, 0);
  border: 3px solid rgb(220, 20, 20);
  color: rgb(255, 255, 255);
  font-family: "Heebo", sans-serif;
  font-size: 0.8rem;
  padding: 3.5% 10%;
}
.page1-homepage-section8-contact-detailes-btn:hover {
  background-color: rgb(220, 20, 20);
  color: white;
  text-decoration: none;
}
#page1-homepage-section8-googleMap {
  width: 100%;
  height: 100%;
  padding: 12rem 0;
}
.page1-homepage-section3-subhead {
  font-family: "Charmonman", cursive;
  font-size: 1rem;
  font-weight: 600;
}
.page1-homepage-section3-head {
  font-family: "Philosopher", sans-serif;
  font-size: 2rem;
}
.page1-homepage-section3-detailes {
  font-family: "Heebo", sans-serif;
  font-size: 0.72rem;
  font-weight: 400;
}
.page1-homepage-section3-carousel {
  width: 55%;
  padding: 0 5%;
  height: 400px;
  margin-right: 0px;
}

.page1-homepage-section3-card-button {
  font-family: "Heebo", sans-serif;
  font-size: 19px;
  color: white;
  transition-duration: 0.3s;
  font-weight: 700;
  text-decoration: none;
}
.page1-homepage-section3-card-button:hover {
  color: rgb(220, 20, 20);
  text-decoration: none;
}
.page1-homepage-section3-card-head {
  font-family: "Philosopher", sans-serif;
  font-size: 25px;
  color: white;
  transition-duration: 0.3s;
  font-weight: 700;
}
.page1-homepage-section3-card-head:hover {
  color: rgb(220, 20, 20);
}
.page1-homepage-section3-card-detailes {
  text-align: left;
  font-family: "Heebo", sans-serif;
  font-size: 0.72rem;
  font-weight: 400;
  color: rgb(255, 255, 255);
}

    </style>
 <!-- flickity-css -->
 <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- flickity-js -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">
   <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <!-- Charmanmon -->
    <link href="https://fonts.googleapis.com/css2?family=Charmonman&display=swap" rel="stylesheet">
    <!-- Heebo 400 and 600 -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;400;600&display=swap" rel="stylesheet">
    <!-- Permanent Marker -->
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <!-- Required Icons -->
    <!-- <link rel="stylesheet" href="/Fontawesome/fontawesome-free-5.15.3-web/css/all.css"> -->
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/5699b6b2cf.js" crossorigin="anonymous"></script>
    <!-- google-Material-icon -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- ........................................................................................ -->

    <!-- Required Fonts -->
    <!-- Philosopher -->
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <!-- Charmanmon -->
    <link href="https://fonts.googleapis.com/css2?family=Charmonman&display=swap" rel="stylesheet">
    <!-- Heebo 400 and 600 -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;400;600&display=swap" rel="stylesheet">
    <!-- Permanent Marker -->
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <!-- ........................................................................................ -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    

  <body >

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Le Cafe'</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>
       </div>

      </div>
    </nav>
<section style="height:200px;">
    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="images/LogoImage.jpg"></div>
        
       
        
    </div>
</section>  
    <div class="container-fluid py-3" style="background-color:#15181c">
    <div class="tagline">Good Food is Good Mood</div><br><br><br>
        <div class="container pt-3 text-light">
            <div class="row">
                <div class="col">
                    <img class="d-inline" src="images/title_shape.png" alt="Image">
                    <p class="d-inline text-weight-bold page1-homepage-section2-subhead"style="color:white">Welcome</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-2">
                    <h2 class="display-6 text-light pb-md-3 pb-2 page1-homepage-section2-head"style="color:white">A Journey Through Cafesio Flavors</h2>
                    <img class="img-fluid" src="images/welcome_image1.png" alt="img">
                </div>
                <div class="col-md-6 text-justify py-2">
                    <p class="pb-md-3 pb-2 page1-homepage-section2-detailes" style="color:white">
                        You’ll find Cafesio Covent Garden moments from West End’s famous theatres and shops.
                        Famous for its Saturday brunch, you can visit any time to feast on tacos, parathas and
                        meat butchered in-house, then cooked over fire in the open kitchen.
                    </p>
                    <img class="img-fluid" src="images/welcome_image2.png" alt="img">
                </div>
            </div>
        </div>
    </div><br><br>
    
    <div class="container-fluid page1-homepage-section5-background-img">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-6" style="background-color: #242c35ec;">
                    <div class="py-lg-5 px-lg-5 px-3 py-3 text-left page1-homepage-section5-content">
                        <img class="d-inline" src="images/title_shape.png" alt="Image">
                        <p class="d-inline text-light page1-homepage-section5-content-subhead" style="color:white">Something Special for you</p>
                        <h1 class="text-light page1-homepage-section5-content-head" style="color:white">Feeling Hungry</h1>
                        <p class="text-light page1-homepage-section5-content-detailes" style="color:white">
                            Each location has a menu that's curated just for them. 
                            See what's new at your Cafesio and You’ll find Le cafe moments.
                        </p>
                       
                        <button type="button" class="btn btn-lg rounded-0 page1-homepage-section5-content-btn" onclick="window.location.href='customerlogin.php'">
                            <a class="text-light px-2 " style="text-decoration:none;">Order Now</a>
                            <i class="fas fa-arrow-right" id="screen1-icon"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

    <br><br>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <img class=" d-inline" src="images/title_shape.png" alt="Image" style="height:0.7rem;">
                    <p class="fs-3 text-white py-0 my-0 d-inline page1-homepage-section8-subhead">The Team</p>
                    <img class="d-inline" src="images/title_shape2.png" alt="Image" style="height:0.9rem;">
                </div>
            </div>
            <div class="row">
                <div class="col text-center m-0 p-0">
                    <h2 class="display-6 py-0 my-0 text-light page1-homepage-section8-head">Meet the Best <br/>Cooks of the City</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 py-md-5 py-3">
                    <div class="card-md-4 page1-homepage-section8-card">
                        <img class="card-img-top" src="images/maker1.png" alt="Card image">
                        
                            <h4 class="card-title page1-homepage-section8-card-body-head" style="font-size:24px;text-align:center">Melissa Alexadra</h4>
                            <p class="card-text" style="font-size:18px;text-align:center">Executive Chef</p>
                        
                    </div>
                </div>
                <div class="col-md-4 py-md-5 py-3">
                    <div class="card-md-4 page1-homepage-section8-card">
                        <img class="card-img-top" src="images/maker2.png" alt="Card image">
                       
                            <h4 class="card-title page1-homepage-section8-card-body-head"style="font-size:24px;text-align:center">Santiago Gimenez</h4>
                            <p class="card-text" style="font-size:18px;text-align:center">Bar Manager</p>
                        
                    </div>
                </div>
                <div class="col-md-4 py-md-5 py-3">
                    <div class="card-md-4 page1-homepage-section8-card">
                        <img class="card-img-top" src="images/maker3.png" alt="Card image">
                       
                            <h4 class="card-title page1-homepage-section8-card-body-head"style="font-size:24px;text-align:center">Jonathan Rodriguez</h4>
                            <p class="card-text"style="font-size:18px;text-align:center">Founder & CEO</p>
                       
                    </div>
                </div>
            </div>
        </div>
        
                
  
</body>
</html>