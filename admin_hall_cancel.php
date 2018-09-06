<?php
require 'PHPMailer/PHPMailerAutoload.php';
session_start();

?>

<html>
    <head>
         <title>admin can cancel hall</title>
        <link rel="sytlesheet" type="text/css" href="">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="home_css.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">     
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    
    .logout{
             //background: #1dc116;
     border-radius: 10px;
            color: #FF0000;
            //font-weight: bold;
           background: #e83e8c;
           font-family: comic Sans MS;
          //  border-radius:  6px 6px 6px 6px;
        }
    .cancel{
        width: 80%;
        padding-left: 20%;
        padding-top: 14%;
    }.reason{
        padding-left: 43%;
    }input{
        margin-left: 50%;
        padding-left: 3%;
        padding-right: 3%;
        margin-top: 2%;
        border-radius: 5px 5px;
        background: #dc8b92;
        font-size: 20px;
        font-weight: bold;
    }textarea{
        border-radius: 7px 7px;
        border: groove 3px gray;
        margin-top: -6%;
    }h3{
        margin-left: 20%;
        margin-top: 5%;
        
    }h1{
        text-align: center;
        margin-top: 20%;
    }h2{
        text-align: center;
        color: red;
    }
    </style>
    </head>
    <body bgcolor="">
    <link rel="stylesheet" type="tex/css" href="style.css">
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
                            <a href="welcome_admin.php" class="nav-link text-white">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="upload_hall.php" class="nav-link text-white">UPDATE HALL IMAGE</a>
                        </li>
                        </ul>
                        <div class="logout">
                         <!--<li class="nav-item">-->
                         <a href="admin_logout.php" class="nav-link text-white ">LOGOUT</a>
                       
                        </div>
                    
                </div>
            </div>
        </nav>
    
   
    
    
<?php

$db = mysqli_connect('localhost','root','','booking');
if (isset($_GET['id'])) {
    $ok  = $_GET['id'];
   // echo $ok;
    
    
    $sql = "SELECT * FROM hallregister WHERE firstname = '$ok'";
    $result = mysqli_query($db, $sql);
    if($row = mysqli_fetch_array($result)){
        $firstname = $row['firstname'];
        $id = $row['id'];
           $lastname = $row['lastname'];
          $email = $row['email'];
           $start = $row['start'];
           $end = $row['end'];
           $hallname = $row['hallname'];
           ?>
    
    <form action="admin_hall_cancel.php" name="cancel" method="post" onsubmit="return validation()">
        <input type="text" name="id" value="<?php echo $id?>" hidden="">
        <input type="text" name="firstname" value="<?php echo $firstname?>" hidden="">
        <input type="text" name="lastname" value="<?php echo $lastname ?>" hidden="">
        <input type="text" name="start" value="<?php echo $start ?>" hidden="">
        <input type="text" name="end" value="<?php echo $end ?>" hidden="">
        <input type="text" name="email" value="<?php echo $email ?>" hidden="">
        <input type="text" name="hallname" value="<?php echo $hallname ?>" hidden="">
    <div class="cancel">
    <table class="table table-striped table-danger">
        <thead>
            <tr>
                <th>NAME</th>
                <th>ARRIVAL</th>
                <th>DEPARTURE</th>
                <th>HALL NAME</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $firstname." " .$lastname?></td>
                  <td><?php echo $start ?></td>
                   <td><?php echo $end ?></td>
                    <td><?php echo $hallname ?></td>
                 
            </tr>
        </tbody>
    </table>
    </div>
        <h3>Reason for Cancellation</h3>
    <div class="reason">
        <textarea name="reason" rows="3" cols="50"></textarea>
    </div>
        <input type="submit" name="submit" value="CANCEL">
    </form>
    <?php 
    }else{
        echo "nothing". mysqli_error($db);
    }
}
 if(isset($_POST['submit'])){
     
     $id = $_POST['id'];
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $start = $_POST['start'];
     $end = $_POST['end'];
     $hallname = $_POST['hallname'];
     $reason = $_POST['reason'];
     $email = $_POST['email'];
    //$email = 'slayerben22@gmail.com';
     $sql = "UPDATE hallregister SET status = 'decline' WHERE id = '$id'";
     $result = mysqli_query($db, $sql);
if($result){
    ?>
    <div class="success">
        <h1>Cancel Successfully</h1>
        <h2>Confirmation Mail Has been send to the user</h2>
    </div>
    <?php
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
    $mail->Subject = 'Booking Cancelation';

    $mail_Body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>
        <head>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
            <title></title>
            <style></style>
        </head>
        <body>
            Dear $firstname $lastname,<br/><br />
     Please check the  Detail for Cancellation by <b>Book with Ease<b><br>
        <table border='1' cellpadding='0' cellspacing='0' height='100%' width='100%' id='bodyTable'>
              <tr>
                  <td valign='top'>
                      <table border='1' cellpadding='15' cellspacing='0' width='100%' id='emailContainer'>
           <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Arrival</th>
    <th>Departure</th>
    <th>Hall Name</th>
    <th>Cancellation Reason</th>
  </tr>
  <tr>
    <td> $firstname</td>
    <td> $lastname</td> 
    <td>$start</td>
    <td>$end</td>
    <td>$hallname</td>
        <td>$reason</td>
  </tr>                  
             </table>
                  </td>
              </tr>
              </table></br></br>
              Thanks and Regards
             <font color=yellow> <h2>Book with Ease</h2> </br></font>
              <b>Note: This is a system generated mail, please do not reply. </b>
    </body>
    </html>";
    $mail->Body = $mail_Body;
    
   // echo "mail has been sent";
    $mail->send();
  
 }else{
     echo "<br><br><br><center>Failed to send!!</center>";
 }
 }
?>
    <script>
       /* function validation(){
            var cancel = document.forms['cancel']['submit'].value;
            if(cancel != onclick) {
                return forms;
            }
        }*/
        </script>
    </body>
 </html>