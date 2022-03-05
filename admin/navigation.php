<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" >
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Dashboard Admin</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 " style="font-weight: bolder; color:wheat">
            <!--<li class="nav-item">-->
            <!--    <a class="nav-link" href="halaman.php">Halaman</a>-->
            <!--</li>-->
            <li class="nav-item">
                <a class="nav-link" href="brand.php">Brand</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="produk.php">Produk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="members.php">Members</a>
            </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0 ml-auto" style="font-weight: bolder; color:wheat">
                <li class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        Hai <?= $_SESSION['nama']  ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="gantiPW.php">Change Password</a>
                    </div>
                </li>
            </ul>
        </div>
        </div>
    </nav>