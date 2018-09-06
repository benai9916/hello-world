<?php

session_start();
$_SESSION['username'];

?>


<html lang="en">
    <head>
        <meta charset="utf-8" >
         <title>user booking confirmation</title>
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
            .confirm{
                margin-top: 15%;
                text-align: center;
                    
            }.email{
                margin-top: 8%;
                text-align: center;
                color: red;
            }.logout{
             //background: #1dc116;
     border-radius: 10px;
            color: #FF0000;
            //font-weight: bold;
           background: #e83e8c;
           font-family: comic Sans MS;
    }
        </style>
    <body>  
         <link rel="stylesheet" type="tex/css" href="style.css">
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
                            <a href="welcome_user.php" class="nav-link text-white">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="welcome_user.php" class="nav-link text-white">BOOKING DETAIL</a>
                        </li>
                    </ul>
                        <div class="logout">
                         <!--<li class="nav-item">-->
                         <a href="user_logout.php" class="nav-link text-white ">LOGOUT</a>
                       
                        </div>
                </div>
            </div>
        </nav>

<?php
require 'PHPMailer/PHPMailerAutoload.php';
session_start();

$db = mysqli_connect("localhost","root","","booking");

if(isset($_POST['confirm'])){
    $username = $_SESSION['username'];
    $days = $_POST['days'];
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
   $email =  $_POST['email'];
    $phoneno =  $_POST['phoneno'];
    $address = $_POST['address'];
    //$address1 = $_POST['address2'];
   $noofdays =  $_POST['days'];
    $caterin =  $_POST['caterin'];
    $coolingsystem =  $_POST['coolingsystem'];
    $attendance =  $_POST['attendance'];
    $hallfor =  $_POST['hallfor'];
    $addon =  $_POST['addon'];
    $start =  $_POST['start'];
    $end = $_POST['end'];
    $hallname = $_POST['hallname'];
    $projector = $_POST['projector'];
    
    
    
    $sql = "SELECT halladdress FROM images1 WHERE hallname = '$hallname'";
    $result = mysqli_query($db, $sql);
    while   ($row = mysqli_fetch_array($result)){
        $halladdress = $row['halladdress'];
    }
   /* echo $hallfor."<br>";
    echo $firstname;
    echo $lastname."<br>";
    echo $phoneno."<br>";
    echo $days."<br>";
    echo $start."<br>";
    echo $end."<br>";
            echo $email."<br>";
            echo $hallname;*/
   

    $sql = mysqli_query($db, "INSERT INTO hallregister (email,username,firstname,lastname,phoneno,address,caterin,coolingsystem,attendance,hallfor,addon,start,end,hallname,noofdays,projector,halladdress)
VALUES ('$email','$username','$firstname','$lastname','$phoneno','$address','$caterin','$coolingsystem','$attendance','$hallfor','$addon','$start','$end','$hallname','$noofdays','$projector','$halladdress')");
    
   // $sql1 = mysqli_query($db, "INSERT INTO book1 (start,end, hallname) VALUES ('$start', '$end', '$hallname');");
//if(mysqli_query($db,$sql,sql1)){

    
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
    $mail->AddAddress($email, $firstname.' '.$lastname);

    $mail->IsHTML(true); // send as HTML
    $mail->Subject = 'Confirmation Code to Continue Reservation Request';

    $mail_Body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>
        <head>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
            <title></title>
            <style></style>
        </head>
        <body>
            Dear $username $lastname,<br/><br />
     Please check the  confirmation for your booking on <b>Book with Ease<b>
            <p> Details provided by you,</p>
            <table border='1' cellpadding='0' cellspacing='0' height='100%' width='100%' id='bodyTable'>
              <tr>
                  <td valign='top'>
                      <table border='1' cellpadding='15' cellspacing='0' width='100%' id='emailContainer'>
                          <tr>
                              <td valign='top'> <b>Name:</b> $firstname $lastname</td>
                              <td valign='top'> <b>Email:</b> $email</td>
                              <td valign='top'> <b>Contact Number:</b> $phoneno </td>
                               <td valign='top'> <b>Projector:</b> $projector</td>
                                <td valign='top'> <b>Cooling System:</b> $coolingsystem</td>
                              
                          </tr>
                          <tr>
                              <td valign='top'> <b>Hall Name:</b> $hallname</td>
                              <td valign='top'> <b>Halls For:</b> $hallfor</td>
                              <td valign='top'> <b>Caterin:</b> $caterin</td>
                              <td valign='top'> <b>Seats Reserved:</b> $attendance</td>
                              <td valign='top'> <b>Address:</b> $address</td>
                          </tr>
                          <tr>
                              <td valign='top'> <b>Check In:</b> $start</td>
                              <td valign='top'> <b>Check Out:</b> $end</td>
                              <td valign='top'> <b>Total days:</b> $days</td>
                              <td valign='top'> <b>Extra Facility Request:</b> $addon</td>
                              <td valign='top'> <b>Hall Address:</b> $halladdress</td>
                              
                          </tr>
                      </table>
                  </td>
              </tr>
              </table>
              <br /><br />
              Thanks and Regards
              <h3>Book with Ease</h3> </br>
              <b>Note: This is a system generated mail, please do not reply. </b>
    </body>
    </html>";
    $mail->Body = $mail_Body;
    
    $mail->send();
    
    ?>
        <div class="confirm">
            <h1>Congratulation!<br>
                You Have successfully Book The Hall.</h1>
           
        </div>
        <div class="email">
            <h1>Mail has been sent to your Register Email ID</h1>
        </div>
<?php
}else{
    echo 'fail'.  mysqli_error($db);
}

?>


</body>
</html>