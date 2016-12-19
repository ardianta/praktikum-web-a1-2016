<?php

// membuat sebuah variabel
$nama = "Budi";
$umur = 20;
$tinggi_badan = 178.5;

// Menampilkan isi variabel
echo 'Nama: '.$nama.' <br>';
echo "Umur: $umur <br>";
echo "Tinggi: $tinggi_badan <br>";
echo "Tahun Lahir: " . ( Date('Y') - $umur );

/* Operator

	- Aritmatika: +, -, *, /, %
	- Penugasan: =, +=, -=, *=, /=, %=
	- Perbandingan/Relational: >, <, >=, <=, !=, ==
	- Logika: &&, ||, !
	- Bitwise: >>, <<, ^, &, |
	- kondisi: ?

*/
echo "<hr>";

$a = 10;
$b = 7;

// penjumlahan
$c = $a + $b;
echo "$a + $b = $c";
echo "<br>";

// pengurangan
$c = $a - $b;
$c += 5;
echo "$a - $b = $c";
echo "<br>";

// operator perbandingan
echo "<hr>";
$c = $a > $b;
echo "$a > $b = $c";

?>