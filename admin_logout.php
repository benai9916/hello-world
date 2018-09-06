<?php

session_start();
session_destroy();
unset($_SESSION['username']);
$_SESSION['message'] = "you are logout";
header("location: admin.php");
?>


