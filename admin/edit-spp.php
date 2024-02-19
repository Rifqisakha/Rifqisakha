<?php
$id_spp = $_GET['id_spp'];
include '../koneksi.php';
$sql = "SELECT*FROM spp WHERE id_spp='$id_spp'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>HALAMAN EDIT DATA SPP.</h5>
<a href="?url=spp" class="btn btn-secondary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-edit-spp&id_spp=<?= $id_spp; ?>">
    <div class="form-group mb-2">
        <label>Tahun</label>
        <input value="<?= $data['tahun'] ?>" type="number" name="tahun" maxlength="4" class="form-control" required>
    </div>
    <label>Bulan</label>
        <select name="bulan" maxlength="4" required value="<?= $data['bulan']?>">
            <option value="januari"></option>
            <option value="februari"></option>
            <option value="maret"></option>
            <option value="april"></option>
            <option value="mei"></option>
            <option value="juni"></option>
            <option value="juli"></option>
            <option value="agustus"></option>
            <option value="september"></option>
            <option value="oktober"></option>
            <option value="november"></option>
            <option value="desember"></option>
        </select>
    </div>
    <div class="form-group mb-2">
        <label>Nominal</label>
        <input value="<?= $data['nominal'] ?>" type="number" name="nominal" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> RESET</button>
    </div>
</form>
