<?php 
    include("layout/app.php");
    include("layout/navigation.php");?>
    <div class="container-fluid" style="background-color: #FFF9F3;">
    <section id="home">
        <div class="row">
            <div class="col p-5 w-auto">
                <img src="assets/images/imghome1.jpg" alt="images" class="mx-auto d-block rounded-circle mt-5" style="height: auto;width:100%;max-width:400px">
            </div>
            <div class="col p-5">
                <h3 class="pt-5">Hello #BeautyEnthusiast</h3><br>
                <h5 style="color:#662D1A;">Yuk pilih foundation yang pas buat kamu!</h5><br>
                <div style="width: 100%;height:20%;">
                    <h6 class="text-justify" >Foundation tuh apasih? Dikutip dari laman Wikipedia, foundi adalah riasan cair atau bedak yang diaplikasikan pada wajah</h6>
                </div>
                <br>
                    <a href="feed1.php"><button class="btn btn-primary" style="background-color: #662D1A; border:none;">More</button></a>
            </div>
        </div>
    </section>
    <section id="brand">
        <div class="row">
            <div class="col p-5 h-auto w-100">
                <h5 class="pt-5">Yuk kita simak dulu. . .</h5><br>
                <h3 style="color:#662D1A;">Foundation Brand</h3><br>
                <div style="width: 100%;height:20%;">
                    <h6 class="text-justify" >Foudation hadir dari banyak banget brand lho. Brand-brand atau perusahaan yang memang memproduksi produk kosmetik. </h6>
                </div>
                <br>
                    <a href="feed2.php"><button class="btn btn-primary" style="background-color: #662D1A; border:none;">More</button></a>
            </div>
            <div class="col p-5 h-auto w-100">
                <img src="assets/images/imglarge.jpg" alt="images" class="mx-auto d-block rounded mt-5" style="height:auto;width:100%;max-width:400px">
            </div>
        </div>
    </section>

    <section id="rekomendasi">
        <div class="row">
            <div class="col text-center pt-5">
                <h5 class="pt-5">Here we go!</h5> <br>
                <h1 style="color: #662D1A;">Recommendation List</h1><br>
                <h5 class="pl-5 pr-5 ">Pada bagian ini, ada beberapa jenis rekomendasi brand foundation lokal yang bisa kamu jadiin pilihan sebelum membeli foundation itu sendiri lho! Intip yuk!</h5>
                <div class="row pt-5 p-5">
                <?php 
                    $sql = "Select * from brand";
                    $query = mysqli_query($db, $sql);
                    while ($data = mysqli_fetch_array($query)) {
                ?>
                    <div class="col pt-3 my-auto">
                        <a href="brandDetail.php?brand=<?=$data['nama']?>">
                            <img class="card-img" src="assets/images/<?= $data['foto'] ?>" alt="Card image">
                            <div class="card-body"> <?= $data['nama'] ?> </div>
                        </a>
                    </div>
                    <?php
                    }?>
                </div>
                <a href="rekomendasi.php"><button class="btn btn-primary" style="background-color: #662D1A; border:none;">Minta Rekomendasi</button></a>
            </div>
        </div>
    </section>
    </div>
<?php include("footer.php")?>