<?php
ob_start();
    include("app.php");
    $id = $_GET['id'];
    $sql = "SELECT * from brand where id=$id";
    $query = mysqli_query($db, $sql);
    $data = mysqli_fetch_array($query)
?>

    <div class="container-fluid p-5">
        <h1 class="pt-5">Edit Brand</h1>

    <form class="pt-5" action="prosesEditBrand.php" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Nama Brand</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputNama" name="nama" value="<?=$data['nama']?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputLogo" class="col-sm-2 col-form-label">Logo Brand</label>
            <div class="col-sm-10">
            <input type="file" class="form-control" name="file" id="file" value="<?=$data['foto']?>"> 
            <span>
                <img src="../assets/images/<?= $data['foto']?>" style="height: 100px; width:100px;padding:10px"><?= $data['foto']?>
                <input type="hidden" name="foto" value="<?=$data['foto']?>">
                <input type="hidden" name="id" value="<?=$id?>">

            </span>

            </div>
        </div>
        <div class="form-group row">
            <label for="isi" class="col-sm-2 col-form-label">Isi</label>
            <div class="col-sm-10">    
                <textarea id="myeditor" name="isi"><?=$data['isi']?></textarea>
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