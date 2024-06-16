<?php include 'view/template/header.php'; ?>
<h2>FORM SKP</h2>
<form action="" method="post">
    <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" class="form-control" name="nip" maxlength="25">
    </div>
    <div class="form-group">
        <label for="rencana_kerja_diintervensi">Rencana Kerja Diintervensi</label>
        <input type="text" class="form-control" name="rencana_kerja_diintervensi" maxlength="25">
    </div>
    <div class="form-group">
        <label for="rencana_kerja">Rencana Kerja</label>
        <input type="text" class="form-control" name="rencana_kerja" maxlength="50">
    </div>
    <div class="form-group">
        <label for="perilaku_kerja">Perilaku Kerja</label>
        <input type="text" class="form-control" name="perilaku_kerja" maxlength="50">
    </div>
    <div class="form-group">
        <label for="ktr_perilaku_kerja">Keterangan Perilaku Kerja</label>
        <input type="text" class="form-control" name="ktr_perilaku_kerja" maxlength="50">
    </div>
    <div class="form-group">
        <label for="tgl_buat">Tanggal Buat</label>
        <input type="date" class="form-control" name="tgl_buat">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<?php include 'views/templates/footer.php'; ?>
