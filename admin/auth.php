<?php 
session_start();
if(!isset($_SESSION["nama"])) header("Location:../index.php");
if($_SESSION["status"] == "User") header("Location:../index.php");
?>