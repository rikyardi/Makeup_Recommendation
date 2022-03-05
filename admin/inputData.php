<?php 
    include("app.php");

?>

    <div class="container-fluid p-5">
        <h1 class="pt-5">Halaman Input Data Admin</h1>

    <form class="pt-5" action="inputData.php" method="POST">
        <div class="form-group row">
            <label for="inputJudul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputJudul" name="judul" placeholder="Judul" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKutipan" class="col-sm-2 col-form-label">Kutipan</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputKutipan" name="kutip" placeholder="Kutipan" required> 
            </div>
        </div>
        <div class="form-group row">
            <label for="isi" class="col-sm-2 col-form-label">Isi</label>
            <div class="col-sm-10">    
                <textarea id="myeditor" name="isi"></textarea>
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
    <?php 
        if (isset($_POST['btn'])) {
            $judul = $_POST['judul'];
            $kutip = $_POST['kutip'];
            $isi = $_POST['isi'];
            $date = date('m-d-Y h:i:s');
            
            $sql = "Insert into page values('','$judul','$kutip','$isi',CURRENT_TIMESTAMP()) ";

            mysqli_query($db, $sql);
            echo "<script>alert('Halaman Berhasil Dibuat')</script>";
            
        } 
    ?>

    <script>
           CKEDITOR.replace('myeditor',{
            filebrowserUploadUrl : 'ck_upload.php',
            filebrowserUploadMethod : 'form'
        });
        </script>