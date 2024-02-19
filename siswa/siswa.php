<?php   
session_start();
if(empty ($_SESSION['nisn'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa - Aplikasi Pembayaran SPP</title>
    <link href="../logo_smk_merdeka.jpg" rel="icon">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: cyan;">
    <div class="container mt-5">
        <h3 style="color: black;">Aplikasi Pembayaran SPP</h3>
        <div class="alert alert-info">
            ANDA LOGIN SEBAGAI SISWA <B><?= $_SESSION['nama'] ?></B> Aplikasi Pembayaran SPP.     
        </div>
        <center>
        <a href="siswa.php" class="btn btn-primary" >Siswa</a>
        <a href="siswa.php?url=print" class="btn btn-primary" >Print</a>  
        <a href="siswa.php?url=logout" class="btn btn-danger" >Logout</a>
        </center>
        <div class="card mt-2 alert alert-info">
            <div class="card-body">
                <!-- ini isi web kita -->
                <?php 
                $file = @$_GET['url'];
                if(empty($file)){
                    echo"<h4>Hello Siswa.</h4>";
                    echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi disekolah.";
                    echo"<hr>";
                    include'history-pembayaran.php';
                }else{
                    include $file.'.php';
                }
                ?>
            </div>
        </div>
    </div>
    <br>
    <h4 class="text-center "><b>SMK MERDEKA BANDUNG</b>  </h4>
                <br>
    
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>