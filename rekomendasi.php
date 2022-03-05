<?php
ob_start();
    include("layout/app.php");
    include("layout/navigation.php");
    
    if (!isset($_SESSION['nama'])) {
        header('location:formLogin.php');
    }
?>
<div class="container-fluid pt-5 " style="background-color:#FFF9F3;">
    <div class="row pt-5 w-50 mx-auto">
        <div class="col text-center">

            <h2 style="color: #662D1A;">Rekomendasi Untuk Anda!</h2>
            <h5>Yuk sama-sama kita hitung kira-kira apa aja sih kriteria kamu sebelum membeli suatu produk foundation??!</h5>
            <form action="hasilRekomendasi.php" method="post">
                <input type="hidden" name="id_produk" value="<?=$idProduk?>">
                <div class="form-group text-left pt-3">
                    <label for="minat">Daya Minat</label>
                    <select class="form-control" id="minat" name="minat">
                        <option value="5">Sangat Penting</option>
                        <option value="4">Penting</option>
                        <option value="3">Biasa Saja</option>
                        <option value="2">Cukup Penting</option>
                        <option value="1">Tidak Penting</option>
                    </select>
                </div>
                <div class="form-group text-left pt-3">
                    <label for="tahan">Daya Tahan</label>
                    <select class="form-control" id="tahan" name="tahan">
                        <option value="5">Sangat Penting</option>
                        <option value="4">Penting</option>
                        <option value="3">Biasa Saja</option>
                        <option value="2">Cukup Penting</option>
                        <option value="1">Tidak Penting</option>
                    </select>
                </div>
                <div class="form-group text-left pt-3">
                    <label for="coverage">Tingkat Coverage</label>
                    <select class="form-control" id="coverage" name="coverage">
                        <option value="5">Sangat Penting</option>
                        <option value="4">Penting</option>
                        <option value="3">Biasa Saja</option>
                        <option value="2">Cukup Penting</option>
                        <option value="1">Tidak Penting</option>
                    </select>
                </div>
                <div class="form-group text-left pt-3">
                    <label for="harga">Harga</label>
                    <select class="form-control" id="harga" name="harga">
                        <option value="5">Sangat Penting</option>
                        <option value="4">Penting</option>
                        <option value="3">Biasa Saja</option>
                        <option value="2">Cukup Penting</option>
                        <option value="1">Tidak Penting</option>
                    </select>
                </div>
                <div class="form-group text-left pt-3">
                    <label for="finishing">Finishing</label>
                    <select class="form-control" id="finishing" name="finishing">
                        <option value="5">Sangat Penting</option>
                        <option value="4">Penting</option>
                        <option value="3">Biasa Saja</option>
                        <option value="2">Cukup Penting</option>
                        <option value="1">Tidak Penting</option>
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
                <button type="submit" name="btn" class="btn btn-primary w-100"  style="background-color: #662D1A;">Minta Rekomendasi</button>
            </form>
        </div>
    </div>
</div>
<?php
include("footer.php")?>