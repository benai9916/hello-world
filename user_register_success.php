<html lang="en">
    <head>
        <title>user confirm email via code</title>
        <meta charset="utf-8" >
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
            
            /*form{
                border: 1px solid #B0C4DE;
                padding: 30px;
                border-radius: 0px 0px 10px 10px;
               margin-top: -10px;
               background: whitesmoke;
               width: 110%;
               
}
h2{
    border: 1px solid #B0C4DE;
    margin-top: 10px;
    padding: 20px;
    border-radius: 10px 10px 0px 0px;
    background-color: #5F9EA0;
    color: white;
    width: 110%;
} */
.intro{
   //background-image: url('image/register2.jpg');
   //background-color: #ccccff;
    height: 20%;
    width: 100%;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-position: center;
}
#error_msg{
    width:250px;
    margin: -10px auto;
    height: 80px;
    font-size: 17px;
    //background: #FFB9B8;
    color: #FF0000;
    text-align: center;
    
}
            
        </style>   
            
    </head>
    
    
    <body>
        
        <nav class="navbar navbar-default fixed-top navbar-expand-sm bg-dark navbar-dark ">
            <div class="container divmid">
                <div class="logo">
                    <a href="" class="navbar-brand text-warning font-weight-normal">BOOK WITH EASE</a></div>
       
                    <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon">  </span>
                    </button>
            
                <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link text-white"> HOME</a>
                        </li>
                        <!--<li class="nav-item">
                            <a href="user_register.php" class="nav-link text-white"></a>
                        </li>-->
                         
                         <li class="nav-item">
                             <a href="user_login.php" class="nav-link text-white">USER LOGIN</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
    
    
<?php

session_start();
$username = $_SESSION['username'];

/*
$msg = "";
if(isset($_POST['submit'])){
$con =mysqli_connect('localhost','root','','booking');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

     $name=  $con->real_escape_string($_POST['name']);
     $email=  $con->real_escape_string($_POST['email']);
     $password= $con->real_escape_string($_POST['password']);
     $cpassword= $con->real_escape_string($_POST['cpassword']);

if($password != $cpassword)
    $msg = "paswordd doesnot match";
else{

$sql = "INSERT INTO userregister (name, email, password)
VALUES ('$name', '$email', '$password')";

if (mysqli_query($con, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}   

mysqli_close($con);
}
}*/
?>
    <style>
        body{
            padding-top: 6%;
            //background-color: #e9ecef;
        }
        .top1{
            padding-top: 40%;
            padding: 30px;
            color: #3f5fbf;
            
        }
        .log{
            color: #1dc116;
            font-size: 20px;
        }
        button{
            margin-top: 30px;
            border-radius: 5px 5px 5px 5px;
            //height: 35px;
            //width: 80px;
            color: #000;
            background: #eb939a;
            font-size: 20px;
        }input{
            width: 40%;
        }
    </style>
    <div class="container">
    <form action="user_register_success.php" method="POST">
            <center><h2 class="top1">Verification code has been send to you email please verify<pre></pre></h2></center>
    <center class="log">Enter code</center>
    <center><input class="form-control text-center" type="" name="token"></center>
    <center ><button class="btn btn-primary btn-lg" name="verify">VERIFY</button>
        </form>  
    </div>
    </body>
    
</html>
<?php

$db = mysqli_connect('localhost','root','','booking') or die("could not connect");
if(isset($_POST['verify'])){
    $token = $_POST['token'];
    $username = $_SESSION['username'];
    $isemailconfirm = 1;
    
    
$sql = "SELECT token FROM userregister1 WHERE token = '$token'";
 $result = mysqli_query($db, $sql);
 if(!mysqli_num_rows($result)>0){
     echo '<center><br><br><h2></b>Wrong code</b></h2></center>'.mysqli_error($db);
     
 }else{
     
     $sql = "UPDATE userregister1 SET isemailconfirm = '$isemailconfirm' WHERE username = '$username' ";
     mysqli_query($db, $sql);
     echo "<center><br><br><h2><b>successful! please Login</b></h2></center>";
 }
}
?>