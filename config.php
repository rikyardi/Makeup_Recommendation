<?php
//koneksi ke database
$db = mysqli_connect('localhost','root','','matchfoundi');
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>