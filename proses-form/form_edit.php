<?php
    // cek ID yang dikirim, kalau kosong alihkan ke halaman index.php
    if( !isset($_GET['id']) ) header('location: index.php');

    // Ambil data yang akan diedit dari database berdasarkan id
    include('setting.php');
    $sql = "SELECT * FROM tbl_mahasiswa WHERE id=".$_GET['id'];
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($query);

    // @TODO: Tampilkan data ke Form
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Form Mahasiswa</title>
    </head>
    <body>

        <form action="update.php" method="POST">
            <fieldset>

                <label>Nama: </label>
                <input type="text" name="nama" value="<?php echo $data['nama'] ?>" />
                <br>

                <label>NIM: </label>
                <input type="text" name="nim" value="<?php echo $data['nim'] ?>" />
                <br>

                <label>Jenis Kelamin: </label>
                <label>
                    <input type="radio" name="jk" value="L"
                    <?php echo $data['jk'] == 'L' ? "checked" : "" ?>
                    /> Laki-Laki
                </label>
                <label>
                    <input type="radio" name="jk" value="P"
                    <?php echo $data['jk'] == 'P' ? "checked" : "" ?>
                    /> Perempuan
                </label>
                <br>

                <label>Jurusan: </label>
                <select name="jurusan">
                    <option value="Teknik Informatika"
                    <?php echo $data['jurusan'] == 'Teknik Informatika' ? 'selected':'' ?>
                    >Teknik Informatika</option>

                    <option value="Desain Komunikasi Visual"
                    <?php echo $data['jurusan'] == 'Desain Komunikasi Visual' ? 'selected':'' ?>
                    >Desain Komunikasi Visual</option>

                    <option value="Jaringan Komputer"
                    <?php echo $data['jurusan'] == 'Jaringan Komputer' ? 'selected':'' ?>
                    >Jaringan Komputer</option>

                </select>
                <br>

                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

                <input type="submit" value="kirim" name="kirim" />
                <input type="reset" value="Batal" />

            </fieldset>
        </form>

    </body>
</html>
