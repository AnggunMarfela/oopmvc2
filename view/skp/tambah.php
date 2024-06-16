<?php include 'template/header.php'; ?>

<h2>Tambah Data SKP</h2>
<form action="" method="post">
    <input type="text" name="nip" placeholder="NIP" required><br>
    <input type="text" name="rencana_kerja_diintervensi" placeholder="Rencana Kerja Diintervensi" required><br>
    <input type="text" name="rencana_kerja" placeholder="Rencana Kerja" required><br>
    <input type="text" name="perilaku_kerja" placeholder="Perilaku Kerja" required><br>
    <input type="text" name="tgl_buat" placeholder="Tanggal Buat" required><br>
    <input type="submit" name="submit" value="Tambah">
</form>

<?php include 'template/footer.php'; ?>
