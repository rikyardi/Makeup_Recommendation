<?php
    include("app.php");
?>
    <div class="container p-5">
        <h1 class="pt-5">Ganti Password</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="PWlama">Password Lama</label>
                <input type="password" class="form-control" name="PWlama" required minlength="6">
            </div>
            <div class="form-group">
                <label for="PWbaru">Password Baru</label>
                <input type="password" class="form-control" name="PWbaru" required minlength="6">
            </div>
            <div class="form-group">
                <label for="confirm">Konfirmasi Password Baru</label>
                <input type="password" class="form-control" name="confirm" required minlength="6">
            </div>
            <input class="btn btn-primary" name="btn" type="submit" value="Ganti Password">
        </form>
    </div>

<?php
    if (isset($_POST['btn'])) {
        $pwlama = md5($_POST['PWlama']);
        $pwbaru = md5($_POST['PWbaru']);
        $pwconfirm = md5($_POST['confirm']);

        $session = $_SESSION['email'];
        $query = mysqli_query($db, "SELECT * FROM admin where email = '$session' ");

        while ($data = mysqli_fetch_array($query)) {
            if ($data['password'] == $pwlama) {
                if ($pwbaru == $pwconfirm) {
                    $sql = "update admin set password = '$pwbaru' where email = '$session' ";
                    mysqli_query($db, $sql);
                    echo "<script>alert('Berhasil merubah password!')</script>";
                }else{
                    echo "<script>alert('Pastikan Password yang anda masukan sama! ')</script>";
                }
            }else{
                echo "<script>alert('Password anda salah!')</script>";
            }
        }
    }

?>