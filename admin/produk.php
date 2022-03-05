<?php 
    include("app.php");
?>
    <div class="container-fluid p-5">
        <h1 class="pt-5">Halaman Produk</h1>
        <div class="row w-50">
            <div class="col-12">
                <a href="addProduk.php"><button class="btn btn-primary">Buat Baru</button></a>
            </div>
            <div class="col">
                <form action="#" method="GET">
                <input class="form-control mt-3" type="search" name="cari" id="cari" placeholder="Cari Halaman"> 
            </div>
            
            <div class="col">
                <input type="submit" class="btn btn-primary mt-3" value="Cari"> 
                </form>
            </div>
        </div>
    </div>
    <div class="pl-5">
    <?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "Hasil Pencarian : ".$cari."<br>";
    } ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Brand</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $sql = "SELECT brand.id, brand.foto, produk.id as ProdukId, produk.foto as ProdukFoto, produk.nama, produk.deskripsi FROM brand RIGHT JOIN produk ON brand.id = produk.brand where produk.nama like '%".$cari."%'";
                    $query = mysqli_query($db, $sql);
                }else{
                    $sql = "SELECT brand.id, brand.foto, produk.id as ProdukId, produk.foto as ProdukFoto, produk.nama, produk.deskripsi FROM brand RIGHT JOIN produk ON brand.id = produk.brand;";
                    $query = mysqli_query($db, $sql);
                }
                $i = 1;
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr >    
                <th scope="row"><?= $i ?></th>
                <td style="width: 20%;"><img src="../assets/images/<?= $data['foto']?>" class="rounded" style="width: 80%; height:80%"></td>
                <td style="width: 20%;"><img src="../assets/images/<?= $data['ProdukFoto']?>" class="rounded" style="width: 80%; height:80%"></td>
                <td style="width: 35%;"><?= $data['nama'] ?></td>
                <td>
                    <a href="editProduk.php?id=<?=$data['ProdukId']?>"><button class="btn btn-secondary pe-3">Edit</button></a> 
                   <a href="deleteProduk.php?id=<?=$data['ProdukId']?>" onclick="return confirm('Yakin ingin menghapus <?= $data['nama']?>??')"><button class="btn btn-danger">Delete</button></a> 
                </td>
                
            </tr>
            <?php $i++; }  ?>
        </tbody>
    </table>
    </div>
