<?php
ob_start();
    include("app.php");
        if (isset($_POST['btn'])) {
            include("upload.php");
            $brand = $_POST['brand'];
            $file = $_FILES["file"]["name"];
            $produk = $_POST['produk'];
            $desc = $_POST['deskripsi'];
            $sqlData = "Insert into produk values(NULL,'$brand','$file','$produk','$desc',CURRENT_TIMESTAMP()) ";
            
            mysqli_query($db,$sqlData);
            header("location:produk.php");
            exit();
        } 
?>
    <div class="container-fluid p-5">
        <h1 class="pt-5">Insert New Produk</h1>
    <form class="pt-5" action="addProduk.php" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="inputBrand" class="col-sm-2 col-form-label">Nama Brand</label>
            <div class="col-sm-10">
            <select class="form-control" id="Brand" name="brand" required>
                    <?php 
                        $sql = "Select * from brand";
                        $query = mysqli_query($db, $sql);
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?= $data['id']?>"><?= $data['nama']?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="fotoProduk" class="col-sm-2 col-form-label">Foto Produk</label>
            <div class="col-sm-10">
            <input type="file" class="form-control" name="file" id="file">
            </div>
        </div>    
        <div class="form-group row">
            <label for="inputProduk" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputBrand" name="produk" placeholder="Produk" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="isi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">    
                <textarea id="myeditor" name="deskripsi"></textarea>
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
        </script>