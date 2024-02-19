<?php   
session_start();
if(empty($_SESSION['id_petugas'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index2.php');
    </script>";
}    
if($_SESSION['level']!='petugas'){
    echo"<script>
    alert('Maaf Anda Bukan Sesi Admin');
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
    <title>Petugas - Aplikasi Pembayaran SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #eab676;">
    <div class="container mt-5">
        <h3 style="color: grey;">Aplikasi Pembayaran SPP</h3>
        <div class="alert alert-warning">
            ANDA LOGIN SEBAGAI PETUGAS  <B><?= $_SESSION['nama_petugas'] ?></B> Aplikasi Pembayaran SPP.     
        </div>
        <center>    
        <a href="petugas.php" class="btn btn-secondary" >Petugas</a>      
        <a href="petugas.php?url=pembayaran" class="btn btn-secondary" >Pembayaran</a>            
        <a href="petugas.php?url=logout" class="btn btn-danger" >Logout</a>
        </center>
        <div class="card mt-2 alert alert-warning">
            <div class="card-body">
                <!-- ini isi web kita -->
                <?php 
                $file = @$_GET['url'];
                if(empty($file)){
                    echo"<h4>Hello Petugas .</h4>";
                    echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi disekolah.";
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