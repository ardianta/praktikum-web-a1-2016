<?php
// operator dan operasi aritmatika dan kondisi

$nilai1 = 10; $nilai2 = 30;

// penjumlahan
echo $nilai1." + ".$nilai2." = ".($nilai1+$nilai2);
echo "<br/>";

// pengurangan
echo $nilai1." - ".$nilai2." = ".($nilai1-$nilai2);
echo "<br/>";

// perkalian
echo $nilai1." * ".$nilai2." = ".($nilai1*$nilai2)."<br/>";

// pembagian
echo $nilai2." / ".$nilai1." = ".($nilai2/$nilai1)."<br/>";

// operasi perbandingan menggunakan ternery operator -> jika hasil yang dibandingkan benar cetak true jika tidak cetak false

// operasi persamaan / equals (==)
echo ($nilai1 == $nilai2) ? 'TRUE' : 'FALSE';
echo "<br/>";

// operasi perbandingan (>)
echo ($nilai1 > $nilai2) ? 'TRUE' : 'FALSE';
echo "<br/>";

// operasi perbandingan (<)
echo ($nilai1 < $nilai2) ? 'TRUE' : 'FALSE';
echo "<br/>";

// operasi perbandingan (<=)
echo ($nilai1 <= $nilai2) ? 'TRUE' : 'FALSE';
echo "<br/>";

// operasi perbandingan (>=)
echo ($nilai1 >= $nilai2) ? 'TRUE' : 'FALSE';
echo "<br/>";

// operasi perbandingan (!==)
echo ($nilai1 !== $nilai2) ? 'TRUE' : 'FALSE';
echo "<br/>";




