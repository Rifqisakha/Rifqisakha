<?php
$id_kelas = $_GET['id_kelas'];
include '../koneksi.php';
$sql = "SELECT*FROM kelas WHERE id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>HALAMAN EDIT DATA KELAS.</h5>
<a href="?url=kelas" class="btn btn-secondary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-edit-kelas&id_kelas=<?= $id_kelas; ?>">
    <div class="form-group mb-2">
        <label>Nama_Kelas</label>
        <input value="<?= $data['nama_kelas'] ?>" type="text" name="nama_kelas" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Kompetensi_Keahlian</label>
        <input value="<?= $data['kompetensi_keahlian'] ?>" type="text" name="kompetensi_keahlian" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning">RESER</button>
    </div>
</form>
