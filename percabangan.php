<?php
echo "--------------------------------------------<br>";
echo "Toko PHP A1 | " . Date('l, d F Y') ."<br>";
echo "--------------------------------------------<br>";

$total_belanja = 190000;
$bayar = 150000;

if($total_belanja > 100000){
	echo "Selamat anda mendapatkan CocaCola 2L <br>";
}


echo "Total Belanja: $total_belanja <br>";
echo "Bayar: $bayar <br>";
echo "Kembalian: " . ($bayar - $total_belanja) . "<br>";

echo "<hr>";
$bilangan = 5;

if ($bilangan % 2 == 0){
	echo "$bilangan adalah bilangan genap <br>";
} else {
	echo "$bilangan adalah bilangan ganjil <br>";
}

echo "<hr>";
$nilai = 89;

if( $nilai > 90){
	$grade = "A";
} elseif ($nilai > 80){
	$grade = "B+";
} elseif ($nilai > 70){
	$grade = "B";
} elseif ($nilai > 60){
	$grade = "C+";
} elseif ($nilai > 50){
	$grade = "C";
} elseif ($nilai > 40){
	$grade = "D";
} else {
	$grade = "E";
}

echo "Nilai: $nilai <br>";
echo "Grade: $grade <br>";

?>