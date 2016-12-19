<?php

if (isset($_POST['kirim'])) {
    require 'setting.php';
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jk'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO tbl_mahasiswa VALUES(NULL, '$nama', '$nim', '$jk', '$jurusan')";
    
    $result = mysqli_query($koneksi, $query);
    
    if($result == TRUE){
        header('location: index.php');
    }else{
        header('location: form_add.php');
    }
    
}else{
    header('location: form_add.php');
}