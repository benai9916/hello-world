<?php

session_start();
$_SESSION['username'];
//$_SESSION['message'] = " ";

?>
 <?php 
        
        if($_SESSION['username']==true){
        echo "<b><i><h4 class='wel'>Hello<span></i>&nbsp;&nbsp;" .$_SESSION['username']."</h4></b>"; 
      }else{
             header("location: booking.php");
      }
        ?>


<html lang="en">
    <head>
        <title>booking consol for user</title>
        <link rel="sytlesheet" type="text/css" href=""> 
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="home_css.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">     
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .wel{
        padding-top: 5%;
        padding-left: 3%;
    }
    .starting{
        
        margin-left: 20%;
        margin-top: 5%;
    }.starting1{
        
        margin-left: 4%;
        margin-top: 5%;
    }input{
       // text-align: center;
        border-radius: 6px 6px 6px 6px;
        border: 1px solid #5F9EA0;
        font-weight: bold;
        margin-top: 10px;
        padding: 2px;
    }textarea{
        border-radius: 6px 6px 6px 6px;
        border: 1px solid #5F9EA0;
        //font-weight: bold;
        margin-top: 10px;
        padding: 2px;
    }h1{
       margin-top: 20px; 
    }.a{
        background: #d4edda;
        font-size: 25px;
        font-weight: bold;
        border-radius: 4px 4px;
        width: 27%;
    }.a1{
         background: #d4edda;
        font-size: 25px;
        font-weight: bold;
        border-radius: 4px 4px;
        width: 22%; 
    
    }.oor{
        margin-left: 80px;
        padding: 10px;
    }textarea{
        border: none;
    }.description{
        margin-left: 45%;
        margin-top: -1.5%;
    }.booking{
        margin-top: 3%;
        padding-left: 10%;
        padding-top: 0.5%;
        color: black;
        font-weight: bold;
        background-color: #c3e6cb;
        width: 50%;
        
    }.table1{
      padding-left: 50%;
      padding-top: 3%;
    }.logout{
             //background: #1dc116;
     border-radius: 10px;
            color: #FF0000;
            //font-weight: bold;
           background: #e83e8c;
           font-family: comic Sans MS;
    }.detail{
        margin-left: 12%;
        margin-top: 3%;
    }.submit1{
        padding: 20px 20px;
        margin-left: 8%;
        
            
    }.detail1{
        margin-left: 60%;
        margin-top: 3%;
        
    }.booking2{
        margin-left: 49%;
        margin-top: -34.8%;
        padding-left: 10%;
        padding-top: 0.5%;
        color: black;
        font-weight: bold;
        background-color: #c3e6cb;
        width: 70%;
    }.btn{
       
        margin-left: 30%;
    }select{
        //text-align: center;
        border-radius: 6px 6px 6px 6px;
        border: 1px solid #5F9EA0;
        font-weight: bold;
        margin-top: 10px;
        padding: 2px;
    }.hallimage{
        margin-left: 27%;
        margin-top: -18%;
    }.halltext{
        margin-left: 63%;
        margin-top: -22%;
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
                    </ul>
                        <div class="logout">
                         <!--<li class="nav-item">-->
                             <a href="user_logout.php" class="nav-link text-white ">LOGOUT</a>
                       
                        </div>
                   
                </div>
            </div>
        </nav>
        




<?php

 //session_start();
 
$db =mysqli_connect('localhost','root','','booking');
if(isset($_POST['submit'])){

$start = $_POST['start'];
$end = $_POST['end'];
$hallname = $_POST['halls'];

/*$sql = "INSERT INTO book1 (start, end, hallname) VALUES('$start','$end','$hallname')";
$result = mysqli_query($db,$sql);
if($result){
    echo 'success';
}else{
    echo 'fail';
}*/
//$sql = "SELECT * FROM book1 WHERE  (start <= '$start' and end >= '$end' or start >= '$start' and end <= '$end' or start >= '$start' and end >= '$end') and hallname = '$hallname'";
$sql = "SELECT * FROM hallregister WHERE  (start <= '$start' and end >= '$end' or start >= '$start' and end <= '$end') and hallname = '$hallname' and status = 'approve' or status = 'pending'";
//$sql = "SELECT * FROM book1 WHERE start <= '$start'  and end >= '$end'";
//$result = $db->query($sql);

//if(!$result->num_rows>0)
    $result = mysqli_query($db, $sql);
    if(! mysqli_num_rows($result)>0)
    {     
     ?>
        
     <div class="container starting1">
         <div class="a1"><marquee>Available on</marquee><br> </div>
           check in Date &nbsp;&nbsp;&nbsp; <input  type="text" value="&nbsp;&nbsp;&nbsp;<?php echo  $start ?>" readonly size="11"><br>
           check out Date &nbsp;<input type="text" value="&nbsp;&nbsp;&nbsp;<?php echo $end ?> " readonly size="11"><br>
           Hall name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="&nbsp;&nbsp;&nbsp;<?php  echo $hallname ?>" readonly size="11" align="middle"><br>
           
        </div> 
        
        
          <?php
     
     
     $db = mysqli_connect("localhost","root","","booking") or die("could not connect");
     $sql = "SELECT * FROM images1 WHERE hallname = '$hallname'";
     $result = mysqli_query($db, $sql);
     while($row = mysqli_fetch_array($result)){
         // echo $row['text']."<br>";
          $ho = $row['image'];
          $ho1 =  $row['text'];
     ?>
        <br>
        <div class="container hallimage">
<h2 class="description">Hall Description &nbsp;</h2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class ="" src="images/<?php   echo $ho ?>" style = "width:400px;height:300px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div class="halltext">
    <?php echo "<textarea rows='17' cols='60' readonly>".$ho1. "</textarea>" ?>
        </div>
             <div class="oor">
            <br><b> click Here to  <a href="userphp.php">Choose another Hall/Date</b></a>   
        </div> 
  <?php
  
  
  $db = mysqli_connect('localhost','root','','booking') or die("could not connect");
    

$start = $_POST['start'];
$end = $_POST['end'];
$hallname = $_POST['halls'];
 $username = $_SESSION['username'];
 
 //echo $start;
 //echo $end;
 //echo $hallname;
 //echo $name;
 //echo $name;
     $sql = "SELECT * FROM userregister1 WHERE username = '$username'";
     // $sql = "SELECT * FROM book1 WHERE hallname = '$hallname'";
     $result = mysqli_query($db, $sql);
    
     while($row = mysqli_fetch_array($result)){
              $email = $row['email'];
              /* $start = $row['start'];
               $end = $row['end'];*/
               //echo "<h1>".$email."</h1>";
                       //echo $end;
              
     }  
    // $sql = "SELECT * FROM book1 WHERE hallname = '$hallname'";
     $sql = "SELECT * FROM images1 WHERE hallname = '$hallname'";
     $result = mysqli_query($db, $sql);
     while($row = mysqli_fetch_array($result)){
         // echo $row['text']."<br>";
         // $ho = $row['image'];
          $ho1 =  $row['text'];
     
    // echo $ho1;
     }
  ?>
 
<form name="myform" action="hall_register.php" method="post" onsubmit="return validateform()">
            <h3 class="booking"><pre>Please Fill Personal Detail</pre></h3>
            <div class="detail">
                <input type="text" name="start" value="<?php echo $_POST['start'] ?>" hidden>
                <input type="text" name="end" value="<?php echo $_POST['end'] ?>" hidden>
                <input type="text" name="hallname" value="<?php echo $_POST['halls'] ?>"hidden="">
                User Name :&nbsp;<input name="name" value="<?php echo $_SESSION['username'] ?>" readonly><br>
                First Name :&nbsp;<input type="text" name="firstname" onkeypress="return lettersOnly(event)"><br>
                <?php //echo $start;
               //echo $end ?>
                Last Name :&nbsp;<input type="text" name="lastname" onkeypress="return lettersOnly(event)"><br>
                Email :&nbsp;&nbsp;&nbsp;<input type="text" name="email" value="<?php echo $email ?>" readonly><br>
                Phone:&nbsp;&nbsp;&nbsp;<b>+91</b><input type="text" onkeypress="return isNumberKey(event)" name="phoneno" maxlength="10"><br>
                <br> Address: &nbsp;<textarea name="address" cols="30"></textarea><br>
                <!--Address line 2: &nbsp;<input type="text" name="address2" size="25"><br>
                pin code:&nbsp;&nbsp;<input type="text" onkeypress="return isNumberKey(event)"  name="pincode"  maxlength="6"/>--><br>
                <div class="submit1">
                    <button class="btn  btn-danger" name="submit" onclick="setDifference(this.form);">Proceed</button>
                   
                </div>
              <input type="hidden" name="days" id="days">
            </div>
            <h3 class="booking2"><pre>Choose Hall Facilities</pre></h3>
             <div class="detail1">
                 Caterin:<select name="caterin">
                     <option>none</option>
                     <option>Lunch</option>
                     <option>Snacks</option>
                 </select><br>
                 cooling system:<select name="coolingsystem">
                     <option>AC</option>
                     <option>Fan</option>
                     <option>Table Fan</option>
                 </select><br>
                Projector:<select name="projector">
                     <option>Yes</option>
                     <option>NO</option>
                 </select><br>
                 NO of Seats:<input type="number" onkeypress="return isNumberKey(event)" min="20" max="500" name="attendance">(max capacity 500)<br>
                 Hall for:<select name="hallfor">
                     <option>Seminar</option>
                     <option>Conference</option>
                     <option>Meeting</option>
                 </select><br>
                 List Add on Facility: <input type="text" name="addon" name="capacity">
                 
             </div>
           
            </form>


     <?php 
     }
      
     ?>
        
        
        
    <?php 
    }else{
     ?>
     <div class="starting">
         <div class="a">Oops!!  Not Available on</div> <br>
        Check in Date &nbsp;&nbsp; <input type="text" value="&nbsp;&nbsp;<?php echo $start; ?>" readonly size="11"><br>
          Check out Date &nbsp;<input type="text" value="&nbsp;&nbsp;<?php echo $end; ?> " readonly size="11"><br>
         Hall Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="&nbsp;&nbsp;<?php echo $hallname; ?>" readonly size="11">
        </div>
            
              <div class="oor">
            <br><b> click Here to  <a href="userphp.php">Choose another Hall/Date</b></a>   
        </div> 

    <?php
    }
}

?>

<script type="text/javascript">
  function isNumberKey(evt)
  {
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57)){
         window.alert("enter only no");
     
        return false;
     }
 
  }
</script>


<script>
    function lettersOnly(evt) {
       evt = (evt) ? evt : event;
       var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
       if (charCode > 31 && (charCode < 65 || charCode > 90) &&
          (charCode < 97 || charCode > 122)) {
          alert("Enter letters only.");
          return false;
      }
  }
    
</script>

<script>
function validateform(){  
var firstname=document.myform.firstname.value;  
var phoneno=document.myform.phoneno.value;  
var lastname=document.myform.lastname.value;
var address=document.myform.address.value;
var attendance=document.myform.attendance.value;
var addon=document.myform.addon.value;


if (firstname==null || firstname==""){  
  alert("First Name can't be blank");  
  return false;  
}if (addon==""){  
  alert("please enter addon facility");  
  return false; 
  }if (attendance==""){  
  alert("please enter the attendance");  
  return false; 
  }if(phoneno.length<10){  
  alert("Phone number must be at least 10 characters long.");  
  return false; 
}if (address==""){  
  alert("Please enter address");  
  return false;
  }else if(lastname == ""){
      alert("enter last name");
      return false;
  }
}  
</script>

       <script type="text/javascript">
  // Error checking kept to a minimum for brevity
  function setDifference(frm)
  {
      var dtElem1 = frm.elements['start'];
      var dtElem2 = frm.elements['end'];
      var resultElem = frm.elements['days'];

      // Return if no such element exists
      if(!dtElem1 || !dtElem2 || !resultElem) {
        return;
      }

      //assuming that the delimiter for dt time picker is a '/'.
      var x = dtElem1.value;
      var y = dtElem2.value;
      var arr1 = x.split('-');
      var arr2 = y.split('-');

      // If any problem with input exists, return with an error msg
      if(!arr1 || !arr2 || arr1.length != 3 || arr2.length != 3) {
        resultElem.value = "Invalid Input";
        return;
      }

     var dt1 = new Date();
      dt1.setFullYear(arr1[2], arr1[1], arr1[0]);
      var dt2 = new Date();
      dt2.setFullYear(arr2[2], arr2[1], arr2[0]);

      resultElem.value = (dt2.getTime() - dt1.getTime()) / (60 * 60 * 24 * 1000);
  }
</script>

    </body>
</html>
  

