<?php 
    include "../config.php";


    $id = $_GET['id'];
    
    // Delete Images
    $query = mysqli_query($db, "select * from brand where id='$id'");
    while ($data = mysqli_fetch_array($query)) {
        $foto = $data['foto'];
        if($foto != NULL){
            if(file_exists("../assets/images/'.$foto'")){
            unlink('../assets/images/'.$foto);   
            }
        }
    }
    
    // Delete Produk
    $queryProduk = mysqli_query($db, "select * from produk where brand=$id");
    while ($dataProduk = mysqli_fetch_array($queryProduk)) {
        $fotoProduk = $dataProduk['foto'];
        if($fotoProduk != NULL){
            if(file_exists("../assets/images/'.$fotoProduk'")){
            unlink('../assets/images/'.$fotoProduk);   
            }
        }
        $brand = $dataProduk['brand'];
        $sqlProduk = "delete from produk where brand=$brand";
        mysqli_query($db,$sqlProduk);
    }
    
    // Delete Data
    $sql = "delete from brand where id=$id";
    mysqli_query($db, $sql);
    header("location:brand.php");
    exit();
?>
