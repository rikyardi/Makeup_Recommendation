<?php 
    include("app.php");
    $id = $_GET['id'];
    $sql = "SELECT * from page where id=$id";
    $query = mysqli_query($db, $sql);
    $data = mysqli_fetch_array($query)
?>

    <div class="container-fluid p-5">
        <h1 class="pt-5">Edit Halaman</h1>

    <form class="pt-5" action="prosesEditPage.php" method="POST">
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="form-group row">
            <label for="inputJudul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputJudul" name="judul" value="<?=$data['judul']?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKutipan" class="col-sm-2 col-form-label">Kutipan</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputKutipan" name="kutip" value="<?=$data['kutipan']?>" required> 
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