<?php

// import settings.php
include('setting.php');

// query select
$sql = "SELECT * FROM tbl_mahasiswa";
$query = mysqli_query($koneksi, $sql);

?>

<table border="1">
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
        <a href='hapus.php?id={$data['id']}'>Hapus</a>
    </td>";
    echo "</tr>";
}
?>

</tbody>
</table>
