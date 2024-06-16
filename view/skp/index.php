<?php include 'template/header.php'; ?>

<h2>Daftar SKP</h2>
<a href="tambah.php">Tambah SKP Baru</a>
<table>
    <tr>
        <th>NIP</th>
        <th>Rencana Kerja Diintervensi</th>
        <th>Rencana Kerja</th>
        <th>Perilaku Kerja</th>
        <th>Tanggal Buat</th>
        <th>Aksi</th>
    </tr>
    <!-- Loop untuk menampilkan setiap SKP -->
    <?php foreach ($skps as $skp): ?>
        <tr>
            <td><?php echo $skp['nip']; ?></td>
            <td><?php echo $skp['rencana_kerja_diintervensi']; ?></td>
            <td><?php echo $skp['rencana_kerja']; ?></td>
            <td><?php echo $skp['perilaku_kerja']; ?></td>
            <td><?php echo $skp['tgl_buat']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $skp['id']; ?>">Ubah</a>
                <a href="delete.php?id=<?php echo $skp['id']; ?>">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php include 'template/footer.php'; ?>
