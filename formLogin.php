<?php
ob_start();
include("layout/app.php"); 
if(isset($_POST['btn'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sqlAdmin = "SELECT * FROM admin WHERE email='$email' and password='$password'";
    $queryAdmin = mysqli_query($db, $sqlAdmin);
    
    $sqlUser = "SELECT * FROM user WHERE email='$email' and password='$password'";
    $queryUser = mysqli_query($db, $sqlUser);
    
     
    $dataAdmin = mysqli_fetch_array($queryAdmin);
    $dataUser = mysqli_fetch_array($queryUser);    
 
    if(mysqli_num_rows($queryAdmin) > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['status'] = "Admin";
        $_SESSION['nama'] = $dataAdmin['username'];
        header("location:admin/index.php");
        exit();
    }elseif(mysqli_num_rows($queryUser) > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['status'] = "User";
        $_SESSION['nama'] = $dataUser['nama'];
        $_SESSION['id'] = $dataUser['id'];
        header("location:index.php");
        exit();
    }else{
        echo "<script>alert('Gagal Login, silahkan cek kembali email dan password anda')</script>";
    }
}?>
<div class="container-fluid">
    <div class="row">
        <div class="col-6 " style="background-color: #FFF9F3;">
            <div class="pt-5 py-5">
                <div class="row">
                    <div class="col">
                        <h4 class="p-4">Makeup</h4>
                        <hr style="border-top: 2px solid #662D1A; width:80%; margin:auto;">
                    </div>
                    <div class="col">
                        <h5 class="p-4" style="text-align: right;"><span><a href="formLogin.php" class="text-decoration-none">Login</a></span> | <span><a href="formSignup.php" class="text-decoration-none">Sign Up</a></span></h5>
                    </div>
                </div>
            </div>
            <div class="p-4">
                <legend>LOGIN</legend>
                <h6 class="ps-3">Login to continue to our website</h6>
                <hr style="border-top: 2px solid #662D1A; width:80%; margin:auto;">
                <form role="form" method="POST" action="formLogin.php">
                    <div class="mb-3 mt-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="karakter minimal 6 digit" min="6" required>
                    </div>
                    <div class="col-auto mt-5">
                        <button type="submit" style="width: 100%; background-color:#662D1A" name="btn" class="btn btn-primary mb-3">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-6" style="background-color: #EFCEBB;">
            <img src="assets/images/imgLogin.jpg" alt="images" class="mx-auto d-block rounded-circle mt-5" style="height: 70%; width:70%;">
            <h5 class="text-center pt-3">Hello #BeautyEnthusiast</h5>
            <h6 class="text-center pt-3">Yuk pilih foundation yang pas buat kamu!</h6>
        </div>
    </div>  
</div>
<?php include("footer.php")?>
