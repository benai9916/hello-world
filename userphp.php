<?php

session_start();
$_SESSION['username'];
//$_SESSION['message'] = " ";

?>
 <?php 
        
        if($_SESSION['username']==true){
        echo "<b><h4 class='wel'>Hello<span>&nbsp;&nbsp;" .$_SESSION['username']."</h4></b>"; 
        }else{
            header("location: user_login.php");
        }
        ?>

<html lang="en">
    <head>
        <title>select date and hall</title>
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
  <script
  src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>
  <link href="http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <style>
      
        .border {
    display: block;
    width: 100%;
    height: 10px;
 margin-top: -2%;
        }
        .date{
            margin-left: 15%;
            font-weight: bold;
            font-size: 17px;
        }
        .wel{
            margin-top: 7%;
            margin-left: 2%;
        }
        .head1{
           // padding-left: 40px;
           // padding-bottom: 0px;
            margin-top: -10px;
            margin-left: 35%;
            color: #6c04d4;
           
        }
        /*.top1{
            padding-top: 100px;
             padding-right: 0%;
            font-weight: bold;
            font-size: 16px;
            width: 20%;
            
        }*/
        .top2{
            padding-top: 3%;
            font-weight: bold;
            font-size: 20px;
        }
        .top3{
            padding-top: 0%;
          padding-left: 10px;
            padding-bottom: 3%;
            
            
        }
        .btn{
            margin-top: 5%;
        }
        .top4{
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 2px;
            padding-bottom: 2px;
            border: 2px solid #41a83e;
            border-radius: 7px 7px 7px 7px;
        }
        .text1{
            margin-left:  60%;
            margin-top: 30%;
            margin-bottom: 20%;
            padding-right: 10%;
            margin-bottom: 20%;
            margin-top: -200px;
        }
        input{
            width: 20%;
            border-radius: 7px 7px 7px 7px;
            border: 2px solid grey;
            color: #6c04d4;
           
        }.boo{
            width: 95px;
        }select{
            width: 130px;
           margin-left: 0%;
        }#error_msg{
             width:350px;
    margin: 15px auto;
    height: 60px;
    font-size: 25px;
  // background: #FFB9B8;
    color: #FF0000;
    text-align: center;
    
        }.img-11{
            margin-left: 5%;
        }.second-half{
            margin-left: 50%;
            margin-top: -24%;
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
 <div class="hv">
        
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
                            <li>
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
     
     
     
     
    
     
         
         <form id="clear"  action="booking.php" method="post"  onsubmit="return validation()" onsubmit="return onvalidation()">
  
             
                
            
                 <h1 class="head1"><pre>HALL BOOKING AREA</pre></h1><br>
            
             <span class="border border-success border-right-0 border-left-0 border-bottom-0"></span>
             <div class="container date">
                
                 <p><h3>Select Date</h3></p>
             <label for="start">Check in</label><br>
             <input type="text" txt-primary name="start" id="start">
             <span id="start1" class="text-danger"></span>
        
             
         <div class="form-group">
            
             <label for="end">Check out</label><br>
             <input type="text"  name="end" id="end">
             <span id="end1" class="text-danger"></span>
         </div>
             
              <input class="btn btn-success  boo" type="submit" name="submit">
             <input class="btn btn-success  boo" type="reset" name="clear">
             <span id="last" class="text-danger"></span>
             <span id="radio" class="text-danger"></span>
                    
         <?php
   
  /* if(isset($_SESSION['message'])){
       echo "<div id='error_msg'>".$_SESSION['message']."</div>";
       unset($_SESSION['message']);    
   }*/
   
   ?>
         
     </div>
     
     
     
     <div class ="container second-half">
         <label class="top2"><h3>Select Hall</h3></label>
         
 
     <div class="top3">
          
        
         <label class="container">
             <input type="radio" name="halls" id="radio1" value="hall-1" style="height:25px;width:25px; vertical-align: middle;"><b> Hall-1</b><br>  
         
         </label>
         
              
     <?php
      
     
     $db = mysqli_connect("localhost","root","","booking") or die("could not connect");
     $sql = "SELECT * FROM images1 WHERE hallname = 'hall-1'";
     $result = mysqli_query($db, $sql);
     while($row = mysqli_fetch_array($result))
         // echo $row['text']."<br>";
          $ho = $row['image'];
          $ho1 =  $row['text'];
     ?>
    
         &nbsp;&nbsp;&nbsp;<img class ="img-11" src="images/<?php   echo $ho; ?>" style = "width:200px;height:120px;">
        
    
     <?php 
     ?>
        
         
         
         <span id="radio" class="text-danger"></span>
        <label class="container">
            <input type="radio" name="halls"  id="radio2" value="hall-2" style="height:25px; width:25px; vertical-align: middle;"><b> Hall-2</b><br>
         
     <?php
     
     
     $db = mysqli_connect("localhost","root","","booking") or die("could not connect");
     $sql = "SELECT * FROM images1 WHERE hallname = 'hall-2'";
     $result = mysqli_query($db, $sql);
     while($row = mysqli_fetch_array($result)){
         // echo $row['text']."<br>";
          $ho = $row['image'];
          $ho1 =  $row['text'];
     ?>
    
    <img class ="img-11" src="images/<?php   echo $ho ?>" style = "width:200px;height:120px;">
    <?php echo "<br><br>"; ?>
     <?php 
     }
     
     ?>
        </label>
         
         <span id="radio" class="text-danger"></span>
         <label class="container">
             <input type="radio" name="halls" id="radio3" value="hall-3" style="height:25px; width:25px; vertical-align: middle;"><b> Hall-3 </b>
        
     <?php
     
     
     $db = mysqli_connect("localhost","root","","booking") or die("could not connect");
     $sql = "SELECT * FROM images1 WHERE hallname = 'hall-3'";
     $result = mysqli_query($db, $sql);
     while($row = mysqli_fetch_array($result)){
         
          $ho = $row['image'];
          $ho1 =  $row['text'];
     ?>
         <br>
    <img class ="img-11 "src="images/<?php   echo $ho ?>" style = "width:200px;height:120px;">
    <?php echo "<br><br>"; ?>
     <?php 
     }
     
     ?>
         </label>
            <!-- <select name="halls" class="top4">
             <option  value="hall-1">hall-1</option>
             <option  value="hall-2">hall-2</option>
             <option value="hall-3">hall-3</option>
             </select>-->
         
            
             
          </div>    
    </div> 
     
     </form>
    
     </div> 
    
        <script>
        /*function validation(){
            var start = document.getElementById('start').value;
            if(start == ""){
                window.alert("please enter ");
                return false;
            }
        }*/
        </script>
          <script>
      $('#start').datepicker(
     { 
        dateFormat: 'dd-mm-yy', 
        minDate: 0,
        beforeShow: function() {
        $(this).datepicker('option', 'maxDate', $('#end').val());
      }
   });
  $('#end').datepicker(
     {
         dateFormat: 'dd-mm-yy',
        //defaultDate: "+1w",
        beforeShow: function() {
        $(this).datepicker('option', 'minDate', $('#start').val());
        if ($('#start').val() === '') $(this).datepicker('option', 'minDate', 0);                             
     }
   });
             </script>
             
             <script>
                
               /*function validation(){
                    var start = document.getElementById('start').value;
                    
            if(start != end){
               document.getElementById('end1').window.alert("hall can be book only for one day");
                return false;
            }else{
                return true;
                
            }
             var end = document.getElementById('end').value;
            if(start < end){
                document.getElementById('end1').window.alert("please check th date");
                return false;
            }else{
                return true;
            }
              } */
             </script>
             
          <script>
       function validation(){
            
          var start = document.getElementById('start').value;
                if(start==""){
                    document.getElementById('start1').innerHTML = "<p><large>please enter check in date</large></p>";
                    return false;  
                 } 
                var end = document.getElementById('end').value;
                if(end==""){
                    document.getElementById('end1').innerHTML = "<p><large>Please enter check out</p></large>";
                    return false;
                }
           
                /*var end;
                var start;
                document.getElementById('end' && 'start').value;
                   /*if((start = end)){
                       document.getElementById('last').innerHTML = "<p><br><small>Alert!booking can be done for one day</p></small>";
                       return false;
                   }  */
           
    var radio1 = document.getElementById("radio1").checked;
    var radio2 = document.getElementById("radio2").checked;
   var radio3 = document.getElementById("radio3").checked;
   if((radio1 || radio2 || radio3) == false){
    document.getElementById("radio").innerHTML = "please select a hall";
    return false;
    }
     }  
        
       </script>

      
       
    </body>
    </html>
    <?php
    
    
?>
<?php
/*$name ="";
$email ="";
$password = "";
$errors= array();

$con = new mysqli('localhost','root','','hall1');

 if(isset($_POST['submit']))
 {
     $name=  mysqli_real_escape_string($_POST['name']);
     $email=  mysqli_real_escape_string($_POST['email']);
     $password= mysqli_real_escape_string($_POST['pass']);
     $cpassword= mysqli_real_escape_string($_POST['cpass']);*/
     
   
     
     
     
     
     
     
     
     
   /* if(empty($name)){
        array_push($errors,"name is required");
    }
    if(empty($email)){
        array_push($errors,"email is required");
    }
    if(empty($password)){
        array_push($password,"password is required");
    }
    if($password != $cpassword){
        array_push($errors,"password doesn't match");
    }
    
    if(count($errors) == 0){
        $sql = "INSERT INTO user(name,email,password)
                VALUES('$name','$email','$password')";
        
        mysqli_query($db,$sql);
    }
        
 }
?>















<!--/*$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    
echo "Connected successfully";
}
$username1 = filter_input(INPUT_POST,"username");
$password1 = filter_input(INPUT_POST,"password");

if($username && $password){
    
    mysql_connect("localhost", "root", "") 
            or die("cant connaect");
    mysql_select_db(admin);     
    
    $query = mysql_query("SELECT * FROM admin1 where='$username'");
    $numrow = mysql_num_rows($query);
    
    if($numrow !=0){
        while ($row = mysql_fetch_assoc($query)){
            $dbusername = $row['name'];
            $dbpassword = $row['password'];
        }
            if($username == $dbusername){   
               if($password == $dbpassword){
                   
               echo 'yor r welcome';
               }
                    else {
                  echo 'you passs s wrong';
            } else {
                        echo 'you name s wrong';
      
                    }
                    }else{
                    echo 'the name not there';
                    }}else{
                echo 'enter the user and password';
    }           

}
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("admin");

      $result = mysql_query("select * from admin1 where username = '$username' and password ='$password'" )
                or die("cant connect".mysql_error());
      $row = mysql_fetch_array($result);
      if($row["username"] == $username && $row["password"] == $password){
          
          echo "welcome ".$row['username'];
      }
      else{
          
          echo 'login fail';
      }*/

 ?>
  