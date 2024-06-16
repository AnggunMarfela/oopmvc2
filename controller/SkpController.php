<?php
// Include model Skp
include_once "model/Skp.php";

class SkpController {
    public function index() {
        // Membuat objek Skp
        $skp_model = new Skp();

        // Ambil data SKP dari model
        $skp = $skp->readAll();

        // Kirim data SKP ke view
        include_once "view/skp/index.php";
    }

    // Fungsi untuk menambahkan SKP baru
    public function tambah() {
        include_once "view/skp/tambah.php";
    }

    // Fungsi untuk mengedit SKP
    public function edit($id) {
        include_once "view/skp/edit.php";
    }

    // Fungsi untuk menghapus SKP
    public function hapus($id) {
        // Menghapus SKP dari model
        $skp_model = new Skp();
        $skp_model->delete($id);

        // Redirect kembali ke halaman indeks setelah menghapus SKP
        header("Location: index.php");
    }
}
?>
