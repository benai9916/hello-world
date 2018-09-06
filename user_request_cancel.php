<?php
session_start();
$_SESSION['username'];
$_SESSION['message']= " ";

?>

 <?php 
        
        if($_SESSION['username']==true){
        echo "<b><i><h4 class='wel'>Welcome<span></i>&nbsp;&nbsp;" .$_SESSION['username']."</h4></b>"; 
        }else{
            header("location: admin.php");
        }
        ?>

<html>
    <head>
         <title>user request admin for cancellation</title>
        <link rel="sytlesheet" type="text/css" href="">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="home_css.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">     
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .one1{
       padding-left: 30px;
        height: 20px;
        margin-left: 2%;
        margin-right: 2%;
        margin-top: 9%;
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
                            <a href="welcome_admin.php" class="nav-link text-white">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="upload_hall.php" class="nav-link text-white">UPDATE HALL IMAGE</a>
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
  <div class="one1">
<?php

$db = mysqli_connect("localhost","root","","booking");
$sql = "SELECT * FROM hallregister WHERE status = 'pending'";

$result = mysqli_query($db, $sql);

//$i=0;
/*while($row = mysqli_fetch_array($result)){
     $id = $row['id'];
    $hallname = $row['hallname'];
    $start = $row['start'];
    $end = $row['end'];
    $firstname = $row['firstname'];*/
    ?>
  
<table class="table table-success">
    <h2><pre>CANCELLATION REQUEST FROM USERS</pre></H2> 
    <thead>
        <tr>
            <th>Sl No</th>
            <th>First Name</th>
            <th>Hall Name</th>
            <th>Arrival</th>
            <th>Departure</th> 
            <th><b>Action</b></th>
        </tr>
    </thead>
    <form id="cancel" method="get" name="cancel">
    <?php 
   $i =0;
    while($row  = mysqli_fetch_array($result)){
        $id = $row['id'];
    $hallname = $row['hallname'];;
    $start = $row['start'];
    $end = $row['end'];
    $firstname = $row['firstname'];
        ?>
    <tbody>
        <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $firstname ?></td>
            <td><?php echo $hallname ?></td> 
            <td><?php echo $start ?></td>
            <td><?php echo $end ?></td>
             <!--echo '<button id="id" class="btn" name="cancel">Cancel</button>'</td>-->
            <td> <?php echo '<a href=user_request_cancel.php?name=approve&id='.$row['id'].'>decline cancellation</a>' ?>
    &nbsp;&nbsp <?php echo '<a href=user_request_cancel.php?name=decline&id='.$row['id'].'>approve cancellation</a>' ?></td>
        </tr>
    </tbody>
    
    </div>
    <input name="id" value="<?php echo $id ?>" hidden="">
    <input name="act" value="approve" hidden="">
    </form>
    <?php
    } 
    
    if (!mysqli_num_rows($result)) {
    echo '<tr>';
    echo '<td colspan="8" align="center"><b>No requests found!!!</b></td>';
    echo '</tr>';
}
    ?>
   
    
    <?php
if(isset($_GET['id'])){
    $action  = $_GET['name'];
    $id = $_GET['id'];
    
  // $sql = "DELETE FROM  cancelhall WHERE id = '$id'";
    
     //   echo $id;
      //  echo 'sucess';
        $sql = "UPDATE hallregister SET  status ='$action' WHERE id = '$id'";
        $result = mysqli_query($db, $sql);
    if($result){
        echo '<h1><center>Updated successfull</h1>';
    }else{
        echo "fmail".mysqli_error($db);
    }
}
?>

</table> 
</body>
</html>
       

