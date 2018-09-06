<?php

session_start();
$_SESSION['username'];
$_SESSION['message'] = " " ;

?>
<html lang="en">
    <head>
        <title>admin panel</title>
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
    .all{
        font-size: 30px;
        margin-left: 12%;
        margin-top: 6%;
    }
    .detail{
       width: 90%;
    }.logout{
             //background: #1dc116;
     border-radius: 10px;
            color: #FF0000;
            //font-weight: bold;
           background: #e83e8c;
           font-family: comic Sans MS;
    }.imagealine{
        margin-top: 30%;
    }
    
</style>
    
    </head>
    <body bgcolor="">
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
                            <a href="upload_hall.php" class="nav-link text-white">UPDATE HALL IMAGE</a>
                        </li>
                        <li class="nav-item">
                            <a href="#content" class="nav-link text-white">LIST ALL HALLS</a>
                        </li>
                        <li class="nav-item">
                            <a href="user_request_cancel.php" class="nav-link text-white">CHECK CANCEL REQUEST</a>
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
        
        if($_SESSION['username']==true){
        echo "<b><i><br><h4 class='wel'>Hello<span></i>&nbsp;&nbsp;" .$_SESSION['username']."</h4></b>"; 
        }else{
            header("location: admin.php");
        }
        ?>
    <?php
    $db = mysqli_connect('localhost','root','','booking') or die("could not connect");
      $res   = mysqli_query($db, "SELECT count(*) as total FROM hallregister WHERE status = 'approve' or status = 'pending' ");
      $total = mysqli_fetch_array($res)['total'];

      $resultw = mysqli_query($db, "SELECT * FROM hallregister WHERE status = 'approve' or status = 'pending' ");
?>
    <div class="all">
        All Reservation &nbsp;(<?php echo $total ?>)
    </div>
    <div class="container detail">
    <table class="table table-hover table-dark" align="center">
        <thead>
            <tr>
                <th>Sl. No</th>
                <th>Name</th>
                <th>Arival</th>
                <th>Departure</th>
                <th>Hall Name</th>
                <th>NO of Seat</th>
                <th>NO of Days</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
$i = 0;
while ($row = mysqli_fetch_array($resultw)) {
    echo '<tr>';
    //echo '<td>'.++$i.'</td>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['firstname'].' '.$row['lastname'].'</td>';
    echo '<td>'.$row['start'].'</td>';
    echo '<td>'.$row['end'].'</td>';
    echo '<td>'.$row['hallname'].'</td>';
    echo '<td>'.$row['attendance'].'</td>';
    echo '<td>'.$row['noofdays'].'</td>';
    echo '<td><a href=admin_hall_cancel.php?id='.$row['firstname'].'>Cancel</a></td>';
   // echo '<td><input type="hidden" ?act='.$row['lastname'].'';
    echo '</tr>';
  // echo '<input type='hidden' name='lastname'
}
if (!mysqli_num_rows($resultw)) {
    echo '<tr>';
    echo '<td colspan="8" align="center"><b>No requests found!!!</b></td>';
    echo '</tr>';
}
    ?>
        </tbody>
    </table>
    </div>    
    
    
 
    <style>
        
      /* #content{
            width: 50%;
            margin: 20px auto;
            border: 1px solid green;
        }form{
            width: 50%;
            margin: 20px auto;
            
        }form.div{
            
            margin-top: 5px;
        }#img_div{
            width: 50%;
            padding: 5px;
            margin: 15px auto;
            border: 1px solid #007bff;
        }#img_div:after{
            content: "";
            display: block;
            clear: both;
            
        }img{
            float: left;
            margin: 5px;
            width: 300px;
            height: 140px;
        }*/
        
    </style>
    <span id="content">
    <div class="imagealine">
        <div  class="container" >
     <table align="center" style="width: 450px;margin-top:200px;">
         
         <tr>
             <th>Hall name</th>
             <th>Hall image</th>
         </tr>
     <?php
     
     $db = mysqli_connect("localhost","root","","booking") or die("could not connect");
     $sql = "SELECT * FROM images1";
     $result = mysqli_query($db, $sql);
     
     while($row = mysqli_fetch_array($result)){
     
     ?>
             
         <tr>
        <td><?php echo $row['hallname'];?></td>
         <td>
             <br><img src="images/<?php echo $row['image'];?>" style = "width:300px;height:180px;"> </td>
         </tr>
     <?php } ?>
     </table>
            <br><br>
    </div>
    </div> 
    </span>
</body>
</html>

    

    
       
    
