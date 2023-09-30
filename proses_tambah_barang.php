<?php 
include("koneksi.php");


//buat variabel
$error = '';
$sukses = '';
$nama_barang = '';
$kode_barang = '';
$harga = '';
$stok = '';

//Buat variabel untuk menampung data dari form
if (isset($_POST['submit'])) {
  $nama_barang = $_POST['nama_barang'];
  $kode_barang = $_POST['kode_barang'];
  $harga = $_POST['harga'];
  $stok = $_POST['stok'];
  //buat kondisi jika salah satu data kosong tampilkan pesan
  if (empty($nama_barang) || empty($kode_barang) || empty($harga) || empty($stok)) {
    $error = 'Data tidak boleh ada yang kosong';
  } else {
    //Query untuk menyimpan data ke database menggunakan insert
    $sql = "INSERT INTO barang (nama_barang, kode_barang, harga, stok) VALUES ('$nama_barang', '$kode_barang', '$harga', '$stok')";
    $result = mysqli_query($koneksi, $sql);
    //buat kondisi jika data berhasil di insert tampilkan pesan berhasil
    if ($result) {
      $sukses = 'Data berhasil ditambahkan';
    } else {
      $error = 'Data gagal ditambahkan';
    }
  }
}


?>