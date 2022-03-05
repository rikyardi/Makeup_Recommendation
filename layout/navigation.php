<nav id="scroll-ku" class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #FFF9F3;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Makeup</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ml-auto " style="font-weight: bolder;">
          <li class="nav-item">
            <a class="nav-link" href="index.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#brand">Brand</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#rekomendasi">Rekomendasi</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="help.php">Help</a>
          </li> -->
          <li class="nav-item">
            <?php 
            if(isset($_SESSION['nama'])) {?>
              <a class="nav-link" href="logout.php"><button class="btn btn-primary mt-0" style="background-color: #662D1A; border:none">Logout</button></a>
              <?php }else{ ?>
              <a class="nav-link" href="formSignup.php"><button class="btn btn-primary mt-0" style="background-color: #662D1A; border:none">SignUp</button></a>
            <?php }?>
          </li>
      </div>
    </div>
  </nav>
