<h5>HALAMAN TAMBAH DATA SPP.</h5>
<a href="?url=spp" class="btn btn-secondary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-tambah-spp">
    <div class="form-group mb-2">
        <label>Tahun</label>
        <input type="number" name="tahun" maxlength="4" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Bulan</label>
        <select name="bulan" maxlength="4" required>pilih bulan
            <option value="januari">Januari</option>
            <option value="februari">Februari</option>
            <option value="maret">maret</option>
            <option value="april">april</option>
            <option value="mei">mei</option>
            <option value="juni">juni</option>
            <option value="juli">juli</option>
            <option value="agustus">agustus</option>
            <option value="september">september</option>
            <option value="oktober">oktober</option>
            <option value="november">november</option>
            <option value="desember">desember</option>
        </select>
    </div>
    <div class="form-group mb-2">
        <label>Nominal</label>
        <input type="number" name="nominal" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN</button>
    </div>
</form>