<?php 
    include("../config.php");

        if (isset($_POST['btn'])) {
            $id = $_POST['id'];
            $judul = $_POST['judul'];
            $kutip = $_POST['kutip'];
            $isi = $_POST['isi'];

            $sql = "update page set judul = '$judul', kutipan = '$kutip', isi = '$isi', tgl = CURRENT_TIMESTAMP() where id = $id";
            mysqli_query($db, $sql);
            header("location:halaman.php");            
        } 
    ?>
