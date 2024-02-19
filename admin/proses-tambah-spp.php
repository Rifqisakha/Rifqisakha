<?php 

$tahun = $_POST['tahun'];
$bulan = $_POST['bulan'];
$nominal = $_POST['nominal'];

include '../koneksi.php';
$sql = "INSERT INTO spp(tahun,bulan,nominal) VALUES('$tahun','$bulan','$nominal')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=spp");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=spp');</script>";
}