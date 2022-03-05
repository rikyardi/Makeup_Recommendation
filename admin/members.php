<?php 
    include("app.php");
?>
    <div class="container-fluid p-5">
        <h1 class="pt-5">Halaman Members</h1>
        <div class="row w-50">
            <div class="col">
                <form action="members.php" method="get">
                <input class="form-control mt-5" type="search" name="cari" id="cari" placeholder="Cari Member"> 
            </div>
            <div class="col">
                <input type="submit" class="btn btn-primary mt-5" value="Cari"> 
                </form>
            </div>
        </div>
    </div>
    <div class="pl-5">
    <?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "Hasil Pencarian : ".$cari."<br>";
    } ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $sql = "SELECT * from user where nama like '%".$cari."%'";
                    $query = mysqli_query($db, $sql);
                }else{
                    $sql = "SELECT * from user";
                    $query = mysqli_query($db, $sql);
                
                }
                $i = 1;
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['email'] ?></td>
            </tr>
            
            <?php $i++; }  ?>
        </tbody>
    </table>
    </div>