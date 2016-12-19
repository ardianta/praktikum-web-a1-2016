<?php
$host = 'localhost';
$user = 'root';
$password = 'kopi';
$database = 'web_a1';

$koneksi = mysqli_connect($host, $user, $password, $database);

if($koneksi == FALSE){
    mysqli_error($koneksi);
}
