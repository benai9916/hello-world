<?php

session_start();
$_SESSION['username'] ;
//$_SESSION['message'] = " ";

?>
 <?php 
        
        if($_SESSION['username']==true){
        echo "<b><i><br><br><br><h4 class='wel'>Hello<span></i>&nbsp;&nbsp;" .$_SESSION['username']."</h4></b>"; 
      
     }else{
            header("location: user_login.php");
        }
        ?>

<?php


$db = mysqli_connect("localhost","root","","booking");

if(isset($_POST['submit'])){
    $username = $_SESSION['username'];
    $days = $_POST['days'];
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
   $email =  $_POST['email'];
    $phoneno =  $_POST['phoneno'];
    $address = $_POST['address'];
    //$address1 = $_POST['address2'];
   //$address =  $_POST['pincode'];
    $caterin =  $_POST['caterin'];
    $coolingsystem =  $_POST['coolingsystem'];
    $attendance =  $_POST['attendance'];
        $hallfor =  $_POST['hallfor'];
    $addon =  $_POST['addon'];
    $start =  $_POST['start'];
    $end = $_POST['end'];
    $hallname = $_POST['hallname'];
    $projector = $_POST['projector'];
   

   /* $sql = "INSERT INTO register (email,username,firstname,lastname,phoneno,address,caterin,coolingsystem,attendance,hallfor,addon,start,end,hallname)
//VALUES ('$email1','$name','$firstname','$lastname','$phoneno','$address','$caterin','$coolingsystem','$attendance','$hallfor','$addon','$start','$end','$hallname')";
if(mysqli_query($db,$sql)){*/
    ?>




<html lang="en">
    <head>
        <title>booking confirmation before mail send</title>
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
           
          
           h2{
               text-align: center;
               margin-top: 5%;
           }
           .detail{
               width: 30%;
               padding-left: 90px;
               margin-left: 30px; 
               margin-left: 18%;
      
           }td{
               text-align: center;
           }.detai2{
               margin-left: 45.8%;
               margin-top: -52.4%;
               width: 30%;
           }.logout{
             //background: #1dc116;
     border-radius: 10px;
            color: #FF0000;
            //font-weight: bold;
           background: #e83e8c;
           font-family: comic Sans MS;
           }
       </style>
          
       
    </head>
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
                            <a href="welcome_user.php" class="nav-link text-white">HOME</a>
                        </li>
                         <li class="nav-item">
                             <a href="welcome_user.php" class="nav-link text-white">BOOKED HALL</a>
                        </li>
                        </ul>
                         <div class="logout">
                         <!--<li class="nav-item">-->
                         <a href="user_logout.php" class="nav-link text-white ">LOGOUT</a>
                       
                        </div>
                    
                </div>
            </div>
        </nav>

        <form action="confirm_hall_register.php" method="post"> 
            <h2><pre>RESERVATION DETAIL</pre></h2>
            <div class="detail">
        <div class="container">
           <table class="table table-striped">
                
    <tbody>
      <tr>
        <td>First Name</td>
      </tr>
      <tr>
        <td>Last Name</td>
      </tr>
      <tr>
        <td>Email</td>
      </tr>
      <tr>
          <td>Phone No</td>
      </tr>
      <tr>
          <td>Hall Name</td>
      </tr>
      <tr>
          <td>Arrival</td>
      </tr>
      <tr>
          <td>Departure</td>
      </tr>
      <tr>
          <td>No of Days</td>
      </tr>
      <tr>
          <td>Attendance</td>
      </tr>
       <tr>
          <td>Projector</td>
      </tr>
      <tr>
          <td>Cooling System</td>
      </tr>
      <tr>
          <td>Caterin</td>
      </tr>
      <tr>
          <td>Hall For</td>
      </tr>
      <tr>
          <td>Add on Facility</td>
      </tr>
      <tr>
          <td>Address</td>
      </tr>
    </tbody>
  </table>
                </div>
            </div>
            
            
             <div class="detai2">
        <div class="container">
           <table class="table table-striped">
    
    <tbody>
      <tr>
        <td><?php echo $firstname?></td> 
      </tr>
      <tr>
        <td><?php echo $lastname ?></td>       
      </tr>
      <tr>
        <td><?php echo $email?></td>       
      </tr>
      <tr>
        <td><?php echo $phoneno ?></td>
      </tr>
      <tr>
        <td><?php echo $hallname ?></td>
      </tr>
      <tr>
        <td><?php echo $start ?></td>
      </tr>
      <tr>
        <td><?php echo $end ?></td>
      </tr>
      <tr>
        <td><?php echo $days?></td>
      </tr>
      <tr>
        <td><?php echo $attendance ?></td>
      </tr>
      <tr>
        <td><?php echo $projector ?></td>
      </tr>
      <tr>
        <td><?php echo $coolingsystem ?></td>
      </tr>
      <tr>
        <td><?php echo $caterin ?></td>
      </tr>
      <tr>
        <td><?php echo $hallfor ?></td>
      </tr>
      <tr>
        <td><?php echo $addon ?></td>
      </tr>
      <tr>
        <td><?php echo $address ?></td>
      </tr>
    </tbody>
  </table>
                </div>
            </div>
            <br>
            <center> <button class="btn btn-success" name="confirm">CONFIRM</button><br>
                to change the detail please<a href="userphp.php">click here</a><br></center>
            
            
            <input type="hidden" name="start" value="<?php echo $_POST['start'] ?>" hidden>
            <input type="hidden" name="end" value="<?php echo $_POST['end'] ?>" hidden>
            <input type="hidden" name="hallname" value="<?php echo $hallname ?>">
            <input type="hidden" name="name" value="<?php echo $_SESSION['username'] ?>" readonly><br>
            <input type="hidden" name="firstname" value="<?php echo $firstname?>"><br>
            <input type="hidden" name="lastname" value="<?php echo $lastname ?>"><br>
            <input type="hidden" name="email" value="<?php echo $email ?>" readonly><br>
            <input type="hidden" name="days" value="<?php echo $days ?>" readonly><br>
            <input type="hidden" name="phoneno" value="<?php echo $phoneno ?>"><br>
            <input type="hidden" name="address" value="<?php echo $address ?>"><br>
           <!-- <input type="hidden" name="address2" <?php echo $address?>><br>-->
            <input type="hidden"  name="pincode"><br>
             
              <input type="hidden" name="days" id="days" value="<?php echo $days ?>">
            
              <input  name="caterin" value="<?php echo $caterin ?>" hidden="">
                    <br>
                 <input name="coolingsystem" hidden="" value="<?php echo $coolingsystem ?>">
                     
                 <br>
                 <input name="projector" hidden="" value="<?php echo $projector ?>">
                   <br>
                 <input type="text"  name="attendance" hidden="" value="<?php echo $attendance ?>">
                 <input name="hallfor" hidden="" value="<?php echo $hallfor ?>">
                     
                 <input type="text" name="addon" hidden="" value="<?php echo $addon ?>">
                 
             </div>
        </form>
        

 
    </body>
    </html>

<!-- 
    $sql = "INSERT INTO register (username,email,password,start,end,hallname,firstname,lastname,phoneno,address,caterin,coolingsystem,attendance,hallfor,addon,halladdress,status,message,paymentstatus)
VALUES ('$name','$email1','$start',$end','$hallname','$firstname','$lastname','$phoneno','$address','$caterin','$coolingsystem','$attendance','$hallfor','$addon')";-->
<?php
}elseif(isset($_POST['confirm'])){
    $username = $_SESSION['username'];
    $days = $_POST['days'];
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
   $email =  $_POST['email'];
    $phoneno =  $_POST['phoneno'];
    $address = $_POST['address1'];
    $address1 = $_POST['address2'];
   //$address =  $_POST['pincode'];
    $caterin =  $_POST['caterin'];
    $coolingsystem =  $_POST['coolingsystem'];
    $attendance =  $_POST['attendance'];
    $hallfor =  $_POST['hallfor'];
    $addon =  $_POST['addon'];
    $start =  $_POST['start'];
    $end = $_POST['end'];
    $hallname = $_POST['hallname'];
    $projector = $_POST['projector'];
    
    
    /* $sql = "INSERT INTO register (email,username,firstname,lastname,phoneno,address,caterin,coolingsystem,attendance,hallfor,addon,start,end,hallname)
VALUES ('$email1','$name','$firstname','$lastname','$phoneno','$address','$caterin','$coolingsystem','$attendance','$hallfor','$addon','$start','$end','$hallname')";
if(mysqli_query($db,$sql)){
    echo 'success';
}else{
    echo 'fail';
}*/
}
?>