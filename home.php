<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HOME</title>
        <link rel="sytlesheet" type="text/css" href="">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="home_css.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">     
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <!-- <script
  src="http://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
       <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
       <style>
           .copyright{
               font-size: 20px;
               background: black;
               padding-top: 1%;
               padding-bottom: 1%;
               color: white;
           }
       </style>
       
    </head>
    <body>
    <div class="bgimage">
        
        <nav class="navbar navbar-default fixed-top navbar-expand-sm bg-dark navbar-dark ">
            <div class="container divmid">
                
                <div class="logo">
                    <a href="admin.php" class="navbar-brand text-warning font-weight-normal">BOOK WITH EASE</a></div> 
                    
                    <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon">  </span>
                    </button>
            
                <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link text-white">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="user_register.php" class="nav-link text-white">REGISTER</a>
                        </li>
                         <li class="nav-item">
                            <a href="#galary" class="nav-link text-white">GALLERY</a>
                        </li>
                         <li class="nav-item">
                            <a href="" class="nav-link text-white" data-toggle="modal" data-target="#contact">CONTACT US</a>
                        </li>
                         <li class="nav-item">
                             <a href="admin.php" class="nav-link text-white ">ADMIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        
        <div class="modal fade" id="contact" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header modal-sm">
          <button type="button"  class="close" data-dismiss="modal"></button>
         <h4 class="modal-title text-center" style="padding-right:10px">Happy to Assist 24/7</h4>
        </div>
        <div class="modal-body">
            <b> <p>Phone: </b>&nbsp;&nbsp;&nbsp;+91&nbsp;9916083185</p>
        <p> <b>Email :</b>&nbsp; &nbsp;&nbsp;&nbsp;akskaypanta007@gmail.com</p>
            <b>Address :</b> RNSIT chanasandra bangalore 560098
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success btn-group-lg" data-dismiss="modal" style="margin-right:180px">Close</button>
        </div>
      </div>
      
    </div>
        </div>    
        
        
        
        
        <div class="container text-center text-white divend">
            <h2>Welcome to book with ease!</h2>
            <!--<h1>IT'S NICE TO MEET YOU :)</h1>-->
            <form action="user_login.php" method="post">
            <button  class="btn btn-success text-white btn-lg">LOGIN</button>
            </form>
        </div>
    </div>
        
        
        <a href="" id="galary"></a>
           <div id="coo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                 <li data-target="#coo" data-slide-to="0" class="active"></li>
                 <li data-target="#coo" data-slide-to="1"></li>
                 <li data-target="#coo" data-slide-to="2"></li>
                 <li data-target="#coo" data-slide-to="3"></li>
                 <li data-target="#coo" data-slide-to="4"></li>
                </ul>
           
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="image/hall1.jpg" alt="first slid" width="1100" height="500">
    </div>
      
    <div class="carousel-item">
        <img src="image/hall3.jpg"  alt="third slide" width="1100" height="500">
    </div> 
      <div class="carousel-item">
          <img src="images/hall-1.jpg"  alt="fourth slide" width="1100" height="500">
    </div>
      <div class="carousel-item">
          <img src="images/hall-3.jpeg"  alt="fourth slide" width="1100" height="500">
    </div>
      <div class="carousel-item">
          <img src="images/hall-2.jpg"  alt="fourth slide" width="1100" height="500">
    </div>
  </div>
 
         
           
  <a class="carousel-control-prev"  href="#coo"  data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <!--<span class="sr-only">Previous</span>-->
  </a>
            <a class="carousel-control-next" href="#coo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <!--<span class="sr-only">next</span>-->
            </a>
 </div>
        
        
        <!--<div class="container-fluid copy">
            <img src="image/copyright.jpg" alt="copyright">
            <h1><marquee class="left">Benai</marquee></h1>
        </div>-->
        <div class="copyright"> &nbsp;&nbsp;&nbsp;&nbsp;coopyright &copy; <b>2016</b> -  <?php echo "<b>".date("y")."</b>"; ?> <strong>Benai & Akshay</strong></marquee>
    </div> </body>
</html>
    
<!--<html>
    <head>
        <meta charset="UTF-8">
        <title>WELCOME :)</title>
        <link rel="stylesheet" type="text/css" href="home_css.css">
    </head>
    <body>
        <div class="main">
            <h10><b>BOOK WITH EASE</h10></b> 
        </div>
        
        <div class="main1">
            <label><b>User login</b></label>
        </div>
        <form action="user_login.php" method="POST">
            <div class="main2">
            <label><b>Username</b><br>
            <input type="text" name="username">
            <br><br>
            <label><b>Password</b></label><br>
            
            <input type="password" name="password">
        </div>
        <div class="main3">
            <button type="submit" name="login" class="btn">login</button>
            Not Register<a href="user.php">click here</a>
        </div>
            </form>
       // <?php
       
       // ?>
    </body>
</html>-->
