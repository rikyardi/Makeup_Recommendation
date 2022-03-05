<?php
ob_start();
    include("layout/app.php");
    include("layout/navigation.php");
    $idProduk = $_GET['produk'];
    $brand = $_GET['brand'];
    $i = 0;
    function hitungDataAwal($kriteria, $idProduk){
        $sql = "SELECT AVG($kriteria) AS average FROM score WHERE id_produk=$idProduk";
        return $sql;
    }

    if (!isset($_SESSION['nama'])) {
        header('location:formLogin.php');
    }
    
    if (isset($_POST['btn'])) {
        
        $query = mysqli_query($db, "select distinct id_produk from score");
        $banyak = mysqli_num_rows($query);
        while($data = mysqli_fetch_array($query)){
            //Daya Minat
            $sql_daya_minat = hitungDataAwal('daya_minat',$data['id_produk']);
            $dayaMinat = mysqli_query($db,$sql_daya_minat);
            $data_dayaMinat = mysqli_fetch_array($dayaMinat);
    
            //Daya Tahan
            $sql_daya_tahan = hitungDataAwal('daya_tahan',$data['id_produk']);
            $dayaTahan = mysqli_query($db,$sql_daya_tahan);
            $data_dayaTahan = mysqli_fetch_array($dayaTahan);
    
            //Coverage
            $sql_coverage = hitungDataAwal('coverage',$data['id_produk']);
            $coverage = mysqli_query($db,$sql_coverage);
            $data_coverage = mysqli_fetch_array($coverage);
    
            //Harga
            $sql_harga = hitungDataAwal('harga',$data['id_produk']);
            $harga = mysqli_query($db,$sql_harga);
            $data_harga = mysqli_fetch_array($harga);
    
            //Finishing
            $sql_finishing = hitungDataAwal('finishing',$data['id_produk']);
            $finishing = mysqli_query($db,$sql_finishing);
            $data_finishing = mysqli_fetch_array($finishing);
    
            //Jenis Kulit
            $sql_jk = hitungDataAwal('jenis_kulit',$data['id_produk']);
            $jk = mysqli_query($db,$sql_jk);
            $data_jk = mysqli_fetch_array($jk);
            
            $point = (floatval($data_dayaMinat['average'])+floatval($data_dayaTahan['average'])+floatval($data_coverage['average'])+floatval($data_harga['average'])+floatval($data_finishing['average'])+floatval($data_jk['average']))/6;

            $produkID = $data['id_produk'];
            $sql = "update point set point = '$point' where id_produk='$produkID' ";
            mysqli_query($db,$sql);
        }
       
        $minat = $_POST['minat'];
        $tahan = $_POST['tahan'];
        $coverage = $_POST['coverage'];
        $harga = $_POST['harga'];
        $finishing = $_POST['finishing'];
        $kulit = $_POST['kulit'];
        $id_user = $_SESSION['id'];
        $id_produk = $_POST['id_produk'];
        $id_brand = $_POST['brand'];

        $sql = "insert into score values(NULL,'$id_produk','$id_user','$minat','$tahan','$coverage','$harga','$finishing','$kulit')";
        mysqli_query($db,$sql);
        
        //cek point 
        $queryPoint = mysqli_query($db, "Select * from point where id_produk=$id_produk");
        $dataPoint = mysqli_fetch_array($queryPoint);
        $nilaiPoint = ($minat+$tahan+$coverage+$harga+$finishing+$kulit)/6;
        if($dataPoint == NULL){
            mysqli_query($db, "insert into point values(NULL,'$id_produk','$nilaiPoint')");
        }
        
        //cek preferensi 
        $queryPreferensi = mysqli_query($db, "Select * from preferensi where id_produk=$id_produk");
        $dataPreferensi = mysqli_fetch_array($queryPreferensi);
        if($dataPreferensi == NULL){
            mysqli_query($db, "insert into preferensi values(NULL,'$id_produk',0)");
        }
        

        echo"<script>alert('Masukan Anda Berhasil Dikirim! Terimakasih~')</script>";
        header("location:brandDetail.php?brand=$id_brand");
        exit();
    }
?>
<div class="container-fluid pt-5 " style="background-color:#FFF9F3;">
    <div class="row pt-5 w-50 mx-auto">
        <div class="col text-center">
            <h4>Here we go!</h4>
            <h2 style="color: #662D1A;">Bantu Beri Nilai Yuk!</h2>
            <form action="formNilai.php" method="post">
                <input type="hidden" name="id_produk" value="<?=$idProduk?>">
                <input type="hidden" name="brand" value="<?=$brand?>">
                
                <div class="form-group text-left pt-3">
                    <label for="minat">Daya Minat</label>
                    <select class="form-control" id="minat" name="minat">
                        <option value="5">Sangat Diminati</option>
                        <option value="4">Cukup Diminati</option>
                        <option value="3">Diminati</option>
                        <option value="2">Kurang Diminati</option>
                        <option value="1">Sangat Tidak Diminati</option>
                    </select>
                </div>
                <div class="form-group text-left pt-3">
                    <label for="tahan">Daya Tahan</label>
                    <select class="form-control" id="tahan" name="tahan">
                        <option value="5">Sangat Tahan Lama</option>
                        <option value="4">Cukup Tahan Lama</option>
                        <option value="3">Tahan Lama</option>
                        <option value="2">Kurang Tahan Lama</option>
                        <option value="1">Sangat Tidak Tahan Lama</option>
                    </select>
                </div>
                <div class="form-group text-left pt-3">
                    <label for="coverage">Tingkat Coverage</label>
                    <select class="form-control" id="coverage" name="coverage">
                        <option value="5">Sangat Baik</option>
                        <option value="4">Cukup Baik</option>
                        <option value="3">Baik</option>
                        <option value="2">Kurang Baik</option>
                        <option value="1">Sangat Tidak Baik</option>
                    </select>
                </div>
                <div class="form-group text-left pt-3">
                    <label for="harga">Harga</label>
                    <select class="form-control" id="harga" name="harga">
                        <option value="5">Sangat Murah</option>
                        <option value="4">Cukup Murah</option>
                        <option value="3">Normal</option>
                        <option value="2">Mahal</option>
                        <option value="1">Sangat Mahal</option>
                    </select>
                </div>
                <div class="form-group text-left pt-3">
                    <label for="finishing">Finishing</label>
                    <select class="form-control" id="finishing" name="finishing">
                        <option value="5">Sangat Baik</option>
                        <option value="4">Cukup Baik</option>
                        <option value="3">Baik</option>
                        <option value="2">Kurang Baik</option>
                        <option value="1">Sangat Tidak Baik</option>
                    </select>
                </div>
                <div class="form-group text-left pt-3">
                    <label for="kulit">Jenis Kulit</label>
                    <select class="form-control" id="kulit" name="kulit">
                        <option value="5">Kering</option>
                        <option value="4">Normal</option>
                        <option value="3">Berminyak</option>
                        <option value="2">Sensitif</option>
                        <option value="1">Kombinasi</option>
                    </select>
                </div>
                <button type="submit" name="btn" class="btn btn-primary w-100"  style="background-color: #662D1A;">Kirim</button>
            </form>
        </div>
    </div>
</div>
<?php
include("footer.php")?>