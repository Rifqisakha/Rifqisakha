<?php   
session_start();
if($_SESSION['level']!='admin'){
    echo"<script>
    alert('Maaf Anda Bukan Sesi Admin');
    window.location.assign('../index2.php');
    </script>";
}
if(empty ($_SESSION['id_petugas'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index2.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Aplikasi Pembayaran SPP</title>
    <link href="../logo_smk_merdeka.jpg" rel="icon">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h4 style="background-color: yellow; padding: 10px; " class="text-center text-grey"><b>SMK MERDEKA BANDUNG</b>  </h4>
    <div class="container mt-5">
        <h5 style="background-color: lightblue; padding: 8px;color: black;">Aplikasi Pencatat transaksi SPP</h5>
        <a href="admin.php" class="btn btn-warning" >Administator</a>
        <a href="admin.php?url=spp" class="btn btn-success" >SPP</a>      
        <a href="admin.php?url=kelas" class="btn btn-secondary" >Kelas</a>      
        <a href="admin.php?url=siswa" class="btn btn-secondary" >Siswa</a>      
        <a href="admin.php?url=petugas" class="btn btn-secondary" >Petugas</a>      
        <a href="admin.php?url=pembayaran" class="btn btn-secondary" >Pembayaran</a>            
        <a href="admin.php?url=laporan" class="btn btn-secondary" >Laporan</a>      
        <a onclick="alert('Apakah anda yakin akan keluar dari web?')" href="admin.php?url=logout" class="btn btn-danger" >Logout</a>
        <div class="card mt-2 alert alert-info">
            <div class="alert alert-danger">
                SELAMAT DATANG <B>ADMINISTATOR</B> DI Aplikasi Pembayaran SPP.     
            </div>
            <div class="card-body">
                <!-- ini isi web kita -->
                <?php 
                $file = @$_GET['url'];
                if(empty($file)){
                    echo"<h4>Hello Administator.</h4>";
                    echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi disekolah.";
                }else{
                    include $file.'.php';
                }
                ?>
            </div>
        </div>
    </div>
        <br>
                <br>
    
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>