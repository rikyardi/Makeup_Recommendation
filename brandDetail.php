<?php 
    include("layout/app.php");
    include("layout/navigation.php");

    function hitungDataAwal($kriteria, $idProduk){
        $sql = "SELECT AVG($kriteria) AS average FROM score WHERE id_produk=$idProduk";
        return $sql;
    }

    $brand = $_GET['brand'];
    $sql = "Select * from brand where nama = '$brand'";
    $query1 = mysqli_query($db, $sql);
    $data1 = mysqli_fetch_array($query1);
    $brandId = $data1['id'];
?>

<div class="container-fluid pt-5" style="background-color: #FFF9F3;">
    <div class="row">
        <div class="col pt-5 pl-3 text-center">
            <img src="assets/images/<?= $data1['foto']?>"  style="height: auto;width:100%;max-width:400px">
        </div>
        <div class="col pt-5 pl-3 ">
            <h6 class="text-justify"><?=$data1['isi']?></h6>
        </div>
    </div>
    <hr style="border-top: 3px solid #662D1A; width:75%">
    <div class="row">
        <div class="col text-center">
            <h4 class ="pt-3">Produk Foundation Brand</h4>
            <h3 style="color: #662D1A;"><?=$data1['nama']?> Cosmetics</h3>

            <?php 
                $sqlProduk = "Select * from produk where brand = '$brandId'";
                $queryProduk = mysqli_query($db,$sqlProduk);
                
                while ($produk = mysqli_fetch_array($queryProduk)) {


            ?>

            <div class="card w-75 mx-auto h-35 m-3" style="background-color: #FFF9F3;border:none">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col">
                            <div class="w-75 mx-auto">
                                <img src="assets/images/<?= $produk['foto']?>"  style="height: auto;width:100%;max-width:400px">
                                <a href="formNilai.php?produk=<?=$produk['id']?>&brand=<?=$brand?>"><button class="btn btn-primary mt-3" style="background-color: #662D1A;border:none">Beri Nilai</button></a>
                            </div>
                        </div>
                        <div class="col" style=" overflow-y:scroll; height:250px">
                            <?php
                            $id = $produk['id'];
                            $sqlPoint="Select * from point where id_produk = '$id'";
                            $queryPoint = mysqli_query($db,$sqlPoint);
                            $data = mysqli_fetch_array($queryPoint);
                            ?>
                            <button class="btn btn-success" disabled>Skor : <?=round($data['point'],2)?>/5</button>
                            <h5 class="card-title"><?= $produk['nama']?></h5>
                            <hr style="border-top: 3px solid #662D1A; width:75%">
                            <p class="card-text"><?= $produk['deskripsi']?></p>
                        </div>
                    </div>
                </div>                
            </div>
            <hr style="border-top: 3px solid #662D1A; width:75%">

            <?php } ?>

        
        
        </div>
    </div>
</div>
<?php include("footer.php")?>