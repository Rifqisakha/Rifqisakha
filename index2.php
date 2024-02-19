<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Petugas / Admin - Aplikasi Pembayaran SPP</title>
    <link href="logo_smk_merdeka.jpg" rel="icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<style type="text/css">
    body{
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        height: 100%;
    }
    title{
        text-align: center;
        font-size: 2.5em;
        color: #000;
    }
</style>
<body>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="card alert alert-info">
                    <div class="card-header">
                     <h1 style="text-align: center;">Masuk</h1>
                    </div>
                    <div class="card-body">
                        <form action="proses-login-petugas.php" method="post">
                            <div class="form-group mb-2">
                                <label>Username</label>
                                <input style=" border-color: black;" type="text" name="username" class="form-control" placeholder="Masukan Username anda .." required>
                            </div>
                            <div class="form-group mb-2">
                                <label>Password</label>
                                <input style=" border-color: black;" type="password" name="password" class="form-control" placeholder="Masukan Password anda .." required>
                            </div>
                            <div class="form-group mb-2 " align="center">
                                <button type="submit" class="btn btn-success"> LOGIN </button>
                                <button type="reset" class="btn btn-danger"> CANCEL </button>
                            </div>
                            <center><a href="index.php"><b>LOGIN SEBAGAI SISWA </b></a></center>
                        </form>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>