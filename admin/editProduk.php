<?php 
    include("app.php");
    $id = $_GET['id'];
    $sql = "SELECT brand.id as BrandId, brand.nama as BrandNama, brand.foto, produk.id as ProdukId, produk.foto as ProdukFoto, produk.nama, produk.deskripsi FROM brand RIGHT JOIN produk ON brand.id = produk.brand where produk.id like '%".$id."%'";
    $query = mysqli_query($db, $sql);
    $data = mysqli_fetch_array($query)
?>

    <div class="container-fluid p-5">
        <h1 class="pt-5">Edit Produk</h1>

    <form class="pt-5" action="prosesEditProduk.php" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Brand</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputNama" name="brand" value="<?=$data['BrandNama']?>" readonly>
            <input type="hidden" name="idBrand" value="<?=$data['BrandId']?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputFoto" class="col-sm-2 col-form-label">Foto Produk</label>
            <div class="col-sm-10">
            <input type="file" class="form-control" name="file" id="file" value="<?=$data['ProdukFoto']?>"> 
            <span>
                <img src="../assets/images/<?= $data['ProdukFoto']?>" style="height: 100px; width:100px;padding:10px"><?= $data['ProdukFoto']?>
                <input type="hidden" name="foto" value="<?=$data['ProdukFoto']?>">
                <input type="hidden" name="id" value="<?=$id?>">
            </span>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputNama" name="nama" value="<?=$data['nama']?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="isi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">    
                <textarea id="myeditor" name="isi"><?=$data['deskripsi']?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="isi" class="col-sm-2 col-form-label"></label>    
            <div class="col-sm-10">
            <button type="submit" name="btn" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
    </div>
    
    <script>
           CKEDITOR.replace('myeditor',{
            filebrowserUploadUrl : 'ck_upload.php',
            filebrowserUploadMethod : 'form'
        });
        function updateAllMessageForms()
        {
            for (instance in CKEDITOR.instances) {
                    CKEDITOR.instances[instance].updateElement();
            }
        }   
    </script>