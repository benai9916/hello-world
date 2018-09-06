<?php
require 'PHPMailer/PHPMailerAutoload.php';
session_start();

$db = mysqli_connect('localhost','root','','booking') or die("could not connect");
if(isset($_POST['submit'])){
    $username= $_POST['username'];
     $email= $_POST['email'];
     $password= $_POST['password'];
     $cpassword= $_POST['cpassword'];
     
    $sql = "SELECT * FROM userregister1 WHERE email = '$email' or username = '$username'";
     $result = mysqli_query($db, $sql);
     
     if(mysqli_num_rows($result) == 0){
     //if($password == $cpassword){
         $str = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
         $str = str_shuffle($str);
         $token = substr($str,0,6);
         
         
 $mail = new PHPMailer();
    $mail->IsSMTP(); // send via SMTP
    $mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->Username = "benaikumar2@gmail.com";
		$mail->Password = "benaikumar@00";
                $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
		
    $mail->FromName = 'BOOK WITH EASE';

    // Add 'to' address
    $mail->AddAddress($email, $username);

    $mail->IsHTML(true); // send as HTML
    $mail->Subject = 'Booking Cancelation';

    $mail_Body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>
        <head>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
            <title></title>
            <style></style>
        </head>
        <body>
            Dear $username,<br/><br />
     Please verify the code in <b>Book with Ease<b><br>
        <br> <b>VERIFICATION CODE - $token </b>
    </body>
    </html>";
    $mail->Body = $mail_Body;
    
   // echo "mail has been sent";
    $mail->send();
  
         
         
         $sql = "INSERT INTO userregister1 (username, email, password,token)
VALUES ('$username', '$email', '$password','$token')";
         mysqli_query($db,$sql);
        
         //$_SESSION['message'] = "you are now logged in";
         $_SESSION['username'] = $username;
         header("location: user_register_success.php");
     }else{
         $_SESSION['message'] = "Email or username already exist";
         
     }
         }      
?>


<html lang="en">
    <head>
        <title>User Register</title>
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
                            <a href="home.php" class="nav-link text-white">HOME</a>
                        </li>
                        <!--<li class="nav-item">
                            <a href="user_register.php" class="nav-link text-white"></a>
                        </li>-->
                         
                         <li class="nav-item">
                             <a href="user_login.php" class="nav-link text-white">USER LOGIN</a>
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
                 
                    <h2 class="text-center"> Registration</h2>
                    
                    <form  action="user_register.php" method="POST" onsubmit="return validation()">
                     
   <?php
   
   if(isset($_SESSION['message'])){
       echo "<div id='error_msg'>".$_SESSION['message']."</div>";
       unset($_SESSION['message']);
       
   }
   
   ?>
                       
                         <input id="name" class="form-control bg-light" type="text" name="username" placeholder="enter username"><br>
                        <input id="email" class="form-control bg-light"type="text" name="email" placeholder="enter email-id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="no space allow @ is necessary follow by domin name"><br>
                        <input id="password" class="form-control bg-light"type="password" name="password" placeholder="enter password"><br>
                        <input id="cpassword" class="form-control bg-light"type="password" name="cpassword" placeholder="confirm password"><br>
                         <input class="btn btn-success" type="submit" name="submit" value="register"> 
                         <input class="btn btn-success" type="reset" name="clear"  value="clear">
                        
                    </form>
                    
                </div>
            </div>
        </div>
        <script>
       function validation(){
            var name = document.getElementById('name').value;
    if (name == "") {
       window.alert("enter all filed");
        return false;
    
    }
    var password = document.getElementById('password').value;
    if(password == ""){
        window.alert("enter password");
        return false;
 
    } 
      
    var cpassword = document.getElementById('cpassword').value;
    if(cpassword == ""){
        window.alert("enter confirm password");
        return false;
    }
       
    //var password;
    //var cpassword;
   // document.getElementById('password').value;
    if(password != cpassword){
        window.alert("password doesnot match");
        return false;
    }
           }
        </script>
</body>
    
</html>




