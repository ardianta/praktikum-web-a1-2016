<?php

if (isset($_POST['kirim'])) {
    require 'setting.php';
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jk'];
    $jurusan = $_POST['jurusan'];
    $id = $_POST['id'];

    $query = "UPDATE tbl_mahasiswa
    SET nama='$nama', nim='$nim', jk='$jk', jurusan='$jurusan'
    WHERE id=$id";

    $result = mysqli_query($koneksi, $query);

    if($result == TRUE){
        header('location: index.php');
    }else{
        header('location: form_edit.php');
    }

}else{
    header('location: form_edit.php');
}
