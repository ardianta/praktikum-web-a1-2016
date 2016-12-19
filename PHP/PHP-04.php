<?php

// Counted Loop 

for($i=0; $i < 10; $i++){
	// kode yang diulang
	echo "perulangan ke-$i<br>";
}

// membuat array
$mahasiswa = array("Andi","Ali", "Ani", "Anis");

// menampilkan isi array dengan perulangan foreach
foreach ($mahasiswa as $mhs) {
	echo $mhs . "<br>";
}


// Uncounted Loop
$a = 1;
while($a <= 10){
	echo "Perulangan ke $a <br>";
	$a++;
}

$b = 0;
do{
	$b++;
	echo "Perualangan ke: $b <br>";

}while($b <= 10);

?>