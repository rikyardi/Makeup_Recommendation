<?php 
    include("fungsiHitung.php");


    $total_dayaMinat = 0;
    $total_dayaTahan = 0;
    $total_coverage = 0;
    $total_harga = 0;
    $total_finishing = 0;
    $total_jk = 0;

    $arrayDayaMinat = array();
    $arrayDayaTahan = array();
    $arrayCoverage = array();
    $arrayHarga = array();
    $arrayFinishing = array();
    $arrayJk = array();

    $arrayRank = array();

    $query = mysqli_query($db, "select distinct id_produk from score");
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
    
        //Matriks Keputusan Normalisasi
        $pangkat_dayaMinat = pow($data_dayaMinat['average'],2); 
        $pangkat_dayaTahan = pow($data_dayaTahan['average'],2);
        $pangkat_coverage  = pow($data_coverage['average'],2);
        $pangkat_harga     = pow($data_harga['average'],2);
        $pangkat_finishing = pow($data_finishing['average'],2);
        $pangkat_jk        = pow($data_jk['average'],2);
        
        //Menjumlah hasil pangkat dari setiap kriteria
        $total_dayaMinat += $pangkat_dayaMinat;
        $total_dayaTahan += $pangkat_dayaTahan;
        $total_coverage  += $pangkat_coverage;
        $total_harga     += $pangkat_harga;
        $total_finishing += $pangkat_finishing;
        $total_jk        += $pangkat_jk;

    }
    $pembagi_dayaMinat = sqrt($total_dayaMinat);
    $pembagi_dayaTahan = sqrt($total_dayaTahan);
    $pembagi_coverage  = sqrt($total_coverage);
    $pembagi_harga     = sqrt($total_harga);
    $pembagi_finishing = sqrt($total_finishing);
    $pembagi_jk        = sqrt($total_jk);
    
// ===========================================================================================

    $query = mysqli_query($db, "select distinct id_produk from score");
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

        $dayaMinatTerbobot = ($data_dayaMinat['average']/$pembagi_dayaMinat)*4;
        $dayaTahanTerbobot = ($data_dayaTahan['average']/$pembagi_dayaTahan)*5;
        $coverageTerbobot  = ($data_coverage['average']/$pembagi_coverage)*5;
        $hargaTerbobot     = ($data_harga['average']/$pembagi_harga)*5;
        $finishingTerbobot = ($data_finishing['average']/$pembagi_finishing)*5;
        $jkTerbobot        = ($data_jk['average']/$pembagi_jk)*1;
        

        array_push($arrayDayaMinat, $dayaMinatTerbobot);
        array_push($arrayDayaTahan, $dayaTahanTerbobot);
        array_push($arrayCoverage, $coverageTerbobot);
        array_push($arrayHarga, $hargaTerbobot);
        array_push($arrayFinishing, $finishingTerbobot);
        array_push($arrayJk, $jkTerbobot);
    
    }
    // =============================================================

    $dayaMinatTerbesar  = max($arrayDayaMinat);
    $dayaTahanTerbesar  = max($arrayDayaTahan);
    $coverageTerbesar   = max($arrayCoverage);
    $hargaTerbesar      = min($arrayHarga);
    $finishingTerbesar  = max($arrayFinishing);
    $jkTerbesar         = min($arrayJk);

    $dayaMinatTerkecil  = min($arrayDayaMinat);
    $dayaTahanTerkecil  = min($arrayDayaTahan);
    $coverageTerkecil   = min($arrayCoverage);
    $hargaTerkecil      = max($arrayHarga);
    $finishingTerkecil  = min($arrayFinishing);
    $jkTerkecil         = max($arrayJk);
    
    // ================ Mencaari D+ D- ==============================
    
    $query = mysqli_query($db, "select distinct id_produk from score");
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

        $dayaMinatTerbobot = ($data_dayaMinat['average']/$pembagi_dayaMinat)*4;
        $dayaTahanTerbobot = ($data_dayaTahan['average']/$pembagi_dayaTahan)*5;
        $coverageTerbobot  = ($data_coverage['average']/$pembagi_coverage)*5;
        $hargaTerbobot     = ($data_harga['average']/$pembagi_harga)*5;
        $finishingTerbobot = ($data_finishing['average']/$pembagi_finishing)*5;
        $jkTerbobot        = ($data_jk['average']/$pembagi_jk)*1;

        $dplusMinat = pow(($dayaMinatTerbesar - $dayaMinatTerbobot),2);
        $dplusTahan = pow(($dayaTahanTerbesar - $dayaTahanTerbobot),2);
        $dplusCoverage = pow(($coverageTerbesar - $coverageTerbobot),2);
        $dplusHarga = pow(($hargaTerbesar - $hargaTerbobot),2);
        $dplusFinishing = pow(($finishingTerbesar - $finishingTerbobot),2);
        $dplusJk = pow(($jkTerbesar - $jkTerbobot),2);
        
        $dminMinat = pow(($dayaMinatTerkecil - $dayaMinatTerbobot),2);
        $dminTahan = pow(($dayaTahanTerkecil - $dayaTahanTerbobot),2);
        $dminCoverage = pow(($coverageTerkecil - $coverageTerbobot),2);
        $dminHarga = pow(($hargaTerkecil - $hargaTerbobot),2);
        $dminFinishing = pow(($finishingTerkecil - $finishingTerbobot),2);
        $dminJk = pow(($jkTerkecil - $jkTerbobot),2);
        
        $hasilDplus = sqrt($dplusMinat+$dplusTahan+$dplusCoverage+$dplusHarga+$dplusFinishing+$dplusJk);
        $hasilDmin = sqrt($dminMinat+$dminTahan+$dminCoverage+$dminHarga+$dminFinishing+$dminJk);

        $IDProduk = $data['id_produk'];
        $preferensi = $hasilDmin/($hasilDmin+$hasilDplus);
        $sql = "insert into preferensi values(Null,'$IDProduk','$preferensi')";
        mysqli_query($db,$sql);
        
        array_push($arrayRank,$preferensi);
        echo "<br>============= Mencari Preferensi & Meranking ===========<br>";
        echo "<br> Preferensi : ".$preferensi;
        echo "<br>";
        print_r($arrayRank);
        
        $produk12 = $arrayRank[0];
        echo "<br><br>";
        echo $produk12;
        // rsort($arrayRank);
        // print_r($arrayRank);
        echo "<br>=============================================="."<br>";
    }

?>