<?php
include("koneksi.php");

$error = '';
$sukses = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM barang WHERE id = $id";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        header("Location: ./edit_data.php");
        exit();
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
        header("Location: ./edit_data.php");
    }
}
?>