<?php
    include "../config.php";

    $id = $_GET['id'];
    $sql = "delete from user where id=$id";
    // mysqli_query($db,$sql);
    var_dump($sql);
    // header("location:members.php");
?>
