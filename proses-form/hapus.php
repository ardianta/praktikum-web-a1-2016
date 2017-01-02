<?php
include('setting.php');

// Ambil id yang akan dihapus
$id = $_GET['id'];

// Lakukan Query Hapus
$sql = "DELETE FROM tbl_mahasiswa WHERE id=$id";
$query = mysqli_query($koneksi, $sql);

// Redirect ke index.php jika berhasil
if($query){
    echo "<script>window.location = 'index.php';</script>";
}
