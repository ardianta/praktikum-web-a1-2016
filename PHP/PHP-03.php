<?php

$bulan = Date("m");

switch ($bulan) {
	case 1: 
		$bulan = "Januari";
		break;
	case 2:
		$bulan = "Februari";
		break;
	case 3:
		$bulan = "Maret";
		break;
	case 4:
		$bulan = "April";
		break;
		//...
	case 11:
		$bulan = "Nopember";
		break;
	case 12:
		$bulan = "Desember";
		break;
	default:
		$bulan = "Tidak diketahui";
		break;
}

echo "Sekarang tanggal: ".date("d")." ".$bulan." ".date("Y");



?>