
<?php

session_start();

$db = mysqli_connect('localhost','root','','booking') or die("could not connect");
if(isset($_POST['submit'])){
    $username = $_POST['username'];
     $password = $_POST['password'];
     
     $sql = "SELECT * FROM userregister1 WHERE username = '$username' AND password = '$password' and isemailconfirm = 1";
     $result = mysqli_query($db, $sql);
    
     if(mysqli_num_rows($result) == 1 ){
         
         $_SESSION['message'] = "you are now loggin ";
         $_SESSION['username'] = $username;
         header("location: welcome_user.php");
     }else{
          $_SESSION['message'] = "Username or Password is incorrect!!";
     }
         
  }

?>



<html lang="en">
    <head>
        <meta charset="utf-8" >
         
         <title>User Login</title>
        <link rel="sytlesheet" type="text/css" href="">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="home_css.css">
        <meta name="viewpoint" content="width=device-width,initial-scale=1">    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" a herf="css/bootstrap">
        <style>
            .btn{
                border: 1.5px solid;
                font-size: 15px;
            }.omg{
                color: #009900;
            }
            #error_msg{
    width:350px;
    margin: 15px auto;
    height: 60px;
    font-size: 25px;
  // background: #FFB9B8;
    color: #FF0000;
    text-align: center;
    
}body{
background-image: url('image/admin_image.jpg');
}  .center1{
    margin-top: 11%;
} h2{
    margin-top: 25%;
        
}
        </style>
        
    <body>   
        
        
        
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
                             <a href="admin.php" class="nav-link text-white ">ADMIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        
        
        
        
        
        
        
        
        
        
        <body class="intro">
        
        <div class="container" style="margin-top:100px">
            <div class="row justify-content-center">
                <div class="col-md-4 col-md-offset-3" align="center">
                 
                    <h2 class="text-center">User Login</h2>
                    
                    <form method="POST" action="" onsubmit="return validation()">
                           <?php
   
   if(isset($_SESSION['message'])){
       echo "<div id='error_msg'>".$_SESSION['message']."</div>";
       unset($_SESSION['message']);
       
   }
   
   ?>
                        <div class="center1">
                        <span id="ok"></span>
                        <input id="email" class="form-control bg-light "type="text" name="username" placeholder="enter username"><br>
                        <input id="password" class="form-control bg-light"type="password" name="password" placeholder="enter password"><br>
                         <input id="a3" class="btn btn-outline-success" type="submit" name="submit" value="Login"> 
                         <input class="btn btn-outline-success" type="reset" name=" clear"  value="clear">
                    </form>
</div>
                </div>
            </div>
        </div>
            <script>
       function validation(){
           var email = document.getElementById('email').value;
           if(email == ""){
           window.alert("enter all the field");
           return false;
       }
       var password = document.getElementById('password').value;
       if(password == "")
       {
           window.alert("enter passs");
           return false;
       }
     }
            
                </script>

</body>
    
</html>


            





















