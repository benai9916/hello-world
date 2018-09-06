
<?php

session_start();
$_SESSION['username'];
$_SESSION['message'] = " ";

?>

<html lang="en">
    <head>
        <title>user home page</title>
        <link rel="sytlesheet" type="text/css" href="">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="home_css.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">     
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <script
  src="http://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
    
    <style>
        
        #error_msg{
    width:150px;
    margin: 50px auto;
    height: 40px;
    background: #FFB9B8;
    color: #FF0000;
    text-align: center;
    
        }.logout{
             //background: #1dc116;
     border-radius: 10px;
            color: #FF0000;
            //font-weight: bold;
           background: #e83e8c;
           font-family: comic Sans MS;
          //  border-radius:  6px 6px 6px 6px;
        }.wel{
            padding-top: 70px;
            padding-left: 30px;
        }.reserv{
            margin-top: 5%;
            width: 99%;
            padding-left: 18px;
        }.notavail{
            margin-left: 2%;
            margin-top: 2%;
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
                            <a href="userphp.php" class="nav-link text-white">BOOK THE HALL</a>
                        </li>
                        <li class="nav-item">
                            <a href="booking_cancel.php" class="nav-link text-white">REQUEST CANCELATION</a>
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
        
        if($_SESSION['username']==true){
        echo "<b><i><h4 class='wel'>Welcome<span></i>&nbsp;&nbsp;" .$_SESSION['username']."</h4></b>"; 
        }else{
            header("location: user_login.php");
        }
        ?>
        

    </body>   
</html>

<?php

$db = mysqli_connect('localhost','root','','booking') or die("could not connect");
$username = $_SESSION['username'];

         $sql = "SELECT * FROM hallregister WHERE username = '$username' and status = 'approve' or status = 'pending'";
         $result = mysqli_query($db, $sql);
         if (!mysqli_num_rows($result)) {
                 ?>
<div class="notavail">
    <h2><pre>YOU HAVE NOT RESERVED ANY HALL YET</pre></h2>
</div>
<?php
         }else{
             
         
 ?>
<div class="reserv">          
 <h1><pre>RESERVATION DETAIL</pre></h1>
            <div class="detail">
           <table class="table table-striped table-warning table-hover">
                
    <thead>
      <tr>
          
        <th>First Name</th>
     
        <th>Last Name</th>
     
      
        <th>Email</th>
      
      
          <th>Phone No</th>
      
      
          <th>Hall Name</th>
     
          <th>Arrival</th>
      
          <th>Departure</th>
     
          <th>Attendance</th>
     
          <th>Cooling System</th>
      
          <th>Caterin</th>
     
          <th>Hall For</th>
     
          <th>Add on Facility</th>
      </tr>
    </thead>
    
    <tbody>
        <?php
       
         //$row = mysqli_fetch_array($result);
          $i=0; 
          while ($row = mysqli_fetch_array($result)) {
             $email = $row['email'];
             $phoneno = $row['phoneno'];
      $firstname = $row['firstname'];
     $lastname = $row['lastname'];
     $start = $row['start'];
     $end = $row['end'];
     $hallname = $row['hallname'];
     $attendance = $row['attendance'];
     $caterin = $row['caterin'];
     $hallfor = $row['hallfor'];
     $coolingsystem = $row['coolingsystem'];
     $addon = $row['addon'];
              
         ?>
      <tr>  
            
       <td><?php echo $firstname?></td> 
      
        <td><?php echo $lastname ?></td>       
     
        <td><?php echo $email?></td>       
     
        <td><?php echo $phoneno ?></td>
     
        <td><?php echo $hallname ?></td>
        <td><?php echo $start ?></td>
        <td><?php echo $end ?></td>

        <td><?php echo $attendance ?></td>
        <td><?php echo $coolingsystem ?></td>
        <td><?php echo $caterin ?></td>
        <td><?php echo $hallfor ?></td>
        <td><?php echo $addon ?></td>
      </tr>
          <?php }  ?>
    </tbody>
  </table>
          
                </div>
</div>     
<?php
         }
         
?>