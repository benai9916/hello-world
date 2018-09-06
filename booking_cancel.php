<?php
session_start();
$_SESSION['username'];
$_SESSION['message'] = " ";

?>


<html>
    <head>
         <title>user cancel reserved hall</title>
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
    }.reserv{
        margin-top: 8%;
        margin-left: 8%;
       
    }  .detail{
       width: 100%;
       padding-left: 1%;
       padding-right: 9%;
    }
</style>

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
                            <a href="welcome_user.php" class="nav-link text-white">HOME</a>
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
        echo "<b><i><br><br><br><h4 class='wel'>Hello<span></i>&nbsp;&nbsp;" .$_SESSION['username']."</h4></b>"; 
        }else{
            header("location: home.php");
        }
        ?>

<?php

$db = mysqli_connect('localhost','root','','booking') or die("could not connect");
$username = $_SESSION['username'];

         $sql = "SELECT * FROM hallregister WHERE username = '$username' AND status = 'approve'";
         $result = mysqli_query($db, $sql);
         if (!mysqli_num_rows($result)) {
                 ?>
<div class="notavail">
    <h2><pre>YOU HAVE ALREADY REQUESTED FOR CANCELLATION OR YOU HAVE NOTRESERVED ANY HALL YET</pre></h2>
</div>
<?php
         }else{
             
         
 ?>
    <form action="" method="post" name="request" onclick="validation()">
<div class="reserv">          
 <h1><pre>RESERVED HALL</pre></h1>
            <div class="detail">
           <table class="table table-striped table-primary table-hover">
                
    <thead>
      <tr>
          <th>Id no</th>
        <th>First Name</th>
     
        <th>Last Name</th>
     
      
        <th>Email</th>
      
      
          <th>Phone No</th>
      
      
          <th>Hall Name</th>
     
          <th>Arrival</th>
      
          <th>Departure</th>
          <th>Action</th>
     
         
      </tr>
    </thead>
    
    <tbody>
        <?php
       
         //$row = mysqli_fetch_array($result);
          $i=0; 
          while ($row = mysqli_fetch_array($result)) {
              $id = $row['id'];
             $email = $row['email'];
             $phoneno = $row['phoneno'];
      $firstname = $row['firstname'];
     $lastname = $row['lastname'];
     $start = $row['start'];
     $end = $row['end'];
     $hallname = $row['hallname'];
              
         ?>
      <tr>  
          
            <td><?php echo $id ?></td>
       <td><?php echo $firstname?></td> 
      
        <td><?php echo $lastname ?></td>       
     
        <td><?php echo $email?></td>       
     
        <td><?php echo $phoneno ?></td>
     
        <td><?php echo $hallname ?></td>
        <td><?php echo $start ?></td>
        <td><?php echo $end ?></td>
        <td> <?php echo '<button class="btn btn-danger" name="cancel">Request Cancellation</button>'?> </td> 
      </tr>
          <?php }  ?>
    </tbody>
  </table>
          
                </div>
</div> 
    
    
    
    
        <!-- <center> <button class="btn btn-danger" name="request">REQUEST</button></center>-->
<?php
         
         
         if(isset($_POST['cancel'])){
             
         $sql = "UPDATE hallregister SET  status = 'pending' WHERE   firstname = '$firstname' AND lastname =  '$lastname' ";
         
         $result = mysqli_query($db, $sql);
         if($result){
             
             ?>
         <br><br><center><h1>Cancellation Requested to Admin !! Wait for the revert </h1></center>
    
   <?php
         }
         }else{
           // echo " hiisdbfhjbsfjh";
         }
    }
?>

    </form>