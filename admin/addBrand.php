<?php
ob_start();
include("app.php");
    if (isset($_POST['btn'])) {
            include("upload.php");
            $brand = $_POST['brand'];
            $file = $_FILES["file"]["name"];
            $desc = $_POST['deskripsi'];
            $sql = "Insert into brand values(NULL,'$brand','$file','$desc',CURRENT_TIMESTAMP()) ";
            mysqli_query($db,$sql);
            header("location:brand.php");
        } 
?>
    <div class="container-fluid p-5">
        <h1 class="pt-5">Insert New Brand</h1>

    <form class="pt-5" action="addBrand.php" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="inputBrand" class="col-sm-2 col-form-label">Nama Brand</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputBrand" name="brand" placeholder="Brand" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKutipan" class="col-sm-2 col-form-label">Logo</label>
            <div class="col-sm-10">
            <input type="file" class="form-control" name="file" id="file">
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