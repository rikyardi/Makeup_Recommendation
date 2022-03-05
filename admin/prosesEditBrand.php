<?php
ob_start();
    include("../config.php");
    $id = $_POST['id'];
    
    $query = mysqli_query($db, "select * from brand where id='$id'");
    $data = mysqli_fetch_array($query);
    $foto = $data['foto'];
    
    if (empty($_FILES["file"]["name"])) {
        $file = $_POST['foto'];
    }else{
        unlink('../assets/images/'.$foto);
        $file = $_FILES["file"]["name"];
        include("upload.php");
    }        
    
    $nama = $_POST['nama'];
    $isi = $_POST['isi'];
    $sql = "UPDATE brand SET nama = '$nama', foto = '$file', isi = '$isi', tgl = current_Timestamp() WHERE id = '$id'";
    mysqli_query($db,$sql);
    header("location:brand.php");
    
?>
