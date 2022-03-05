<?php 
    include("../config.php");
    
    function hitungDataAwal($kriteria, $idProduk){
        $sql = "SELECT AVG($kriteria) AS average FROM score WHERE id_produk=$idProduk";
        return $sql;
    }

?>