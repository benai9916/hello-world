<!DOCTYPE html>
<html lang="en">
    <head>
        <title>admin panel for update hall image</title>
        <link rel="sytlesheet" type="text/css" href="">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="home_css.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">     
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    
    .success{
        padding-top: 6%;
        text-align: center;
        color: #71dd8a;
    }.center{
        padding-left: 20%;
        padding-top: 8%;
    }input{
        border-radius: 5px 5px 5px 5px;
    }textarea{
        border-radius: 5px 5px 5px 5px;
    }.in{
        margin-left: 20%;
        padding: 20px;
        font-size: 20px;
        border: 10px;
        color: black;
       font-weight: bold;
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
                    <a href="" class="navbar-brand text-warning font-weight-normal">BOOK WITH EASE</a></div> 
                    
                    <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon">  </span>
                    </button>
            
                <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="welcome_admin.php" class="nav-link text-white">HOME</a>
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
 
if(isset($_POST['upload'])){
    $target = "images/".basename($_FILES['image']['name']);


$db = mysqli_connect("localhost","root","","booking") or die("could not connect");
    
    
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];
    $hallname = $_POST['hallname'];
    $halladdress = $_POST['halladdress'];
    $hallcapacity = $_POST['hallcapacity'];
    
    
    //$sql = "INSERT INTO images1 (hallname,image,text,halladdress,hallcapacity) VALUES ('$hallname','$image','$text','$halladdress','$hallcapacity')";
    $sql = "UPDATE images1 SET image = '$image'  WHERE hallname = '$hallname'";
    
    mysqli_query($db, $sql);
    
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        
        ?>
        
        <div class="success">
            <h2>Image Updated successfully</h2>
        </div>
        
  <?php  }else{ ?>
        
        <div class="success">
            <h2>Updation Failed</h2>
        </div>
   <?php     
    }
}
?>
        
<div class="container center">
    <form action=""  name="myform" method="post" enctype="multipart/form-data" onsubmit="return validation()">
           <input type="hidden" name="size"  value="1000000">
           <b><h3>Update Hall Image</h3></b><br>
           <div>
               <b> Choose Hall image</b> <input type="file" name="image"><br><br>
           </div>
           
           <div>
               <br>  <br> <b>Hall name</b>&nbsp;<input type="text" name="hallname">
           </div> 
           <input type="text" name="halladdress" hidden=""><br>
          <input type="text" name="hallcapacity" hidden="">
           <div>
               <br><b></b><textarea  name="text" cols='40' rows="4" hidden=""></textarea><br>
           </div>
           <div class="in">
           <br> <input type="submit" name="upload" value="update">
           </div>
           
       </form>
</div>
        <script>
        function validation(){
            var image=document.myform.image.value;
            var hallname=document.myform.hallname.value;
            if(image == ""){
                alert("please select image");
                return false;
            }else if(hallname == ""){
                alert("please enter hall name");
                return false;
                
            }
        }
        </script>
    </body>
</html>