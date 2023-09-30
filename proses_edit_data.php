<?php
//deklarasi variabel
$sukses = '';
$error = '';
$id = isset($_GET['id']) ? $_GET['id'] : null;
$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id = '$id'");
$data = mysqli_fetch_array($query);

if (isset($_POST['update'])) {
    $nama_barang = $_POST['nama_barang'];
    $kode_barang = $_POST['kode_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    // Validasi input tidak boleh kosong
    if (!empty($nama_barang) && !empty($kode_barang) && !empty($harga) && !empty($stok)) {
        $query = mysqli_query($koneksi, "UPDATE barang SET nama_barang = '$nama_barang', kode_barang = '$kode_barang', harga = '$harga', stok = '$stok' WHERE id = '$id'");
        if ($query) {
            $sukses = 'Data berhasil diubah';
            header("refresh:3;url=./edit_data.php");
        } else {
            $error = 'Data gagal diubah';
        }
    } else {
        $error = 'Inputan tidak boleh kosong';
    }
}


?>