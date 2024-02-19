<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa - Aplikasi Pembayaran SPP</title>
    <link href="logo_smk_merdeka.jpg" rel="icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<style type="text/css">
    body{
        background-color: white;
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
    <div class="container mt-5" >
        <div class="row justify-content-md-center">
            <div class="col-md-4" >
                <div class="card alert alert-info">
                    <div class="card-header">
                        <h1 style="text-align: center;">Masuk</h1>
                    </div>
                        <form action="proses-login-siswa.php" method="post">
                            <div class="form-group mb-2">
                                <label>NISN</label>
                                <input style=" border-color: black;" type="number" name="nisn" class="form-control" placeholder="Masukan NISN anda .." required>
                            </div>
                            <div class="form-group mb-2">
                                <label>NIS</label>
                                <input style=" border-color: black;" type="number" name="nis" class="form-control" placeholder="Masukan NIS anda .." required>
                            </div>
                            <div class="form-group mb-2" align="center">
                                <button type="submit" class="btn btn-success"> LOGIN </button>
                                <button type="reset" class="btn btn-danger"> CANCEL </button>
                            </div>
                            <center><a href="index2.php"><b>LOGIN SEBAGAI ADMIN / PETUGAS </b></a></center>
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