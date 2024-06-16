<?php include 'template/header.php'; ?>

<h2>Ubah Data SKP</h2>
<form action="" method="post">
    <input type="text" name="nip" placeholder="NIP" value="<?php echo $skp['nip']; ?>" required><br>
    <input type="text" name="rencana_kerja_diintervensi" placeholder="Rencana Kerja Diintervensi" value="<?php echo $skp['rencana_kerja_diintervensi']; ?>" required><br>
    <input type="text" name="rencana_kerja" placeholder="Rencana Kerja" value="<?php echo $skp['rencana_kerja']; ?>" required><br>
    <input type="text" name="perilaku_kerja" placeholder="Perilaku Kerja" value="<?php echo $skp['perilaku_kerja']; ?>" required><br>
    <input type="text" name="tgl_buat" placeholder="Tanggal Buat" value="<?php echo $skp['tgl_buat']; ?>" required><br>
    <input type="submit" name="submit" value="Simpan">
</form>

<?php include 'template/footer.php'; ?>
