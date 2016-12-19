<!DOCTYPE html>
<html>
    <head>
        <title>Form Mahasiswa</title>
    </head>
    <body>

        <form action="simpan.php" method="POST">
            <fieldset>

                <label>Nama: </label>
                <input type="text" name="nama" />
                <br>

                <label>NIM: </label>
                <input type="text" name="nim" />
                <br>

                <label>Jenis Kelamin: </label>
                <label>
                    <input type="radio" name="jk" value="L" /> Laki-Laki
                </label>
                <label>
                    <input type="radio" name="jk" value="P" /> Perempuan
                </label>
                <br>

                <label>Jurusan: </label>
                <select name="jurusan">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                </select>
                <br>

                <input type="submit" value="kirim" name="kirim" />
                <input type="reset" value="Batal" />

            </fieldset>
        </form>

    </body>
</html>