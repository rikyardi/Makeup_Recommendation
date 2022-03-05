<?php 
    include "../config.php";


    $id = $_GET['id'];
    
    // Delete Images
    $query = mysqli_query($db, "SELECT brand.id, brand.foto, produk.id as ProdukId, produk.foto as ProdukFoto, produk.nama, produk.deskripsi FROM brand RIGHT JOIN produk ON brand.id = produk.brand where produk.id='$id'");
    while ($data = mysqli_fetch_array($query)) {
        $foto = $data['ProdukFoto'];
        if($foto != NULL){
            if(file_exists("../assets/images/'.$foto'")){
            unlink('../assets/images/'.$foto);
            }
        }
    }
    //Delete Score
    mysqli_query($db,"delete from score where id_produk=$id");
    
    //Delete Point
    mysqli_query($db,"delete from point where id_produk=$id");
    
    //Delete Preferensi
    mysqli_query($db,"delete from preferensi where id_produk=$id");
    
    // Delete Data
    $sql = "delete from produk where id=$id";
    mysqli_query($db, $sql);
    header("location:produk.php");
    
?>
