<?php 
    include "../config.php";

    $id = $_GET['id'];

    $sql = "delete from page where id=$id";
    mysqli_query($db, $sql);
    header("location:halaman.php");
?>
