<?php
// mulai session
session_start();

// cek session
if(!isset($_SESSION['user'])){
    // suruh dia login
    echo "<script>window.location = 'form_login.php'</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Pemrograman Web</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="animate/animate.min.css" />
</head>

<body>
    <br>
    <header class="container">
        <div class="jumbotron">
            <h1>Selamat Datang</h1>

            <p class="pull-right">
                Hi, Nama Admin |
                <a href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
            </p>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php
                // import settings.php
                include('setting.php');

                // query select
                $sql = "SELECT * FROM tbl_mahasiswa";
                $query = mysqli_query($koneksi, $sql);
                ?>

                <p><a href="form_add.php" class="btn btn-success animated rubberBand">Tambah data</a></p>

                <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Jurusan</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                // Ubah hasil query ke dalam array
                while($data = mysqli_fetch_assoc($query)){
                    // Tampilkan data ke dalam tabel
                    echo "<tr>";
                    echo "<td>".$data['id']."</td>";
                    echo "<td>{$data['nama']}</td>";
                    echo "<td>{$data['jk']}</td>";
                    echo "<td>{$data['jurusan']}</td>";
                    echo "<td>
                        <a href='form_edit.php?id={$data['id']}'>Edit</a>
                        |
                        <a href='javascript:hapus({$data['id']})'>Hapus</a>
                    </td>";
                    echo "</tr>";
                }
                ?>

                </tbody>
                </table>

            </div>
        </div>
    </div>



<script>
function hapus(id){
    var yakin = confirm("Apakah anda yakin akan menghapus?");
    if(yakin){
        window.location = 'hapus.php?id='+id;
    }
}
</script>

</body>
</html>
