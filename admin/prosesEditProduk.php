<?php
ob_start();
    include("../config.php");
    $id = $_POST['id'];
    
    $sql = "SELECT brand.id, brand.nama as BrandNama, brand.foto, produk.id as ProdukId, produk.foto as ProdukFoto, produk.nama, produk.deskripsi FROM brand RIGHT JOIN produk ON brand.id = produk.brand where produk.id like '$id'";
    $query = mysqli_query($db,$sql);
    $data = mysqli_fetch_array($query);
    $foto = $data['ProdukFoto'];
    
    if (empty($_FILES["file"]["name"])) {
        $file = $_POST['foto'];
    }else{
        unlink('../assets/images/'.$foto);
        $file = $_FILES["file"]["name"];
        include("upload.php");
    }        

    // Add Data
    $brand = $_POST['brand'];
    $nama = $_POST['nama'];
    $idBrand = $_POST['idBrand'];
    $isi = $_POST['isi'];
    $sql1 = "UPDATE produk SET brand = '$idBrand', foto = '$file', nama = '$nama', deskripsi = '$isi', tgl = current_Timestamp() WHERE id = '$id'";
    mysqli_query($db,$sql1);
    header("location:produk.php");
    
?>
