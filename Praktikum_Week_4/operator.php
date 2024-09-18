<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilkurang = $a - $b;
$hasilkali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah : ".$hasilTambah."<br><br>";
echo "Hasil Kurang : ". $hasilkurang."<br><br>";
echo "Hasil Kali : ".$hasilkali."<br><br>";
echo "Hasil Bagi : ".$hasilBagi."<br><br>";
echo "Sisa Bagi : ".$sisaBagi."<br><br>";
echo "Hasil a Pangkat b : ".$pangkat."<br><br>";

$hasilSama = $a == $b;
echo "Hasil Sama : ".$hasilSama."<br><br>";
$hasilTidakSama = $a != $b;
echo "Hasil Tidak Sama : ".$hasilTidakSama."<br><br>";
$hasilLebihKecil = $a < $b;
echo "Hasil Lebih Kecil : ".$hasilLebihKecil."<br><br>";
$hasilLebihBesar = $a > $b;
echo "Hasil Lebih Besar : ".$hasilLebihBesar."<br><br>";
$hasilLebihKecilSama = $a <= $b;
echo "Hasil Lebih Kecil Sama : ".$hasilLebihKecilSama."<br><br>";
var_dump( $hasilLebihKecilSama );
$hasilLebihBesarSama = $a >= $b;
echo "<br>Hasil Lebih Besar Sama : ".$hasilLebihBesarSama."<br><br>";
var_dump( $hasilLebihBesarSama );

$hasilAnd = $a && $b;
echo "<br>Hasil And : ".$hasilAnd."<br><br>";
$hasilOr = $a || $b;
echo "Hasil Or : ".$hasilOr."<br><br>";
$hasilNotA = !$a;
echo "Hasil Not A : ".$hasilNotA."<br><br>";
$hasilNotB = !$b;
echo "Hasil Not B : ".$hasilNotB."<br><br>";

$hasilIdentik = $a === $b;
echo "Hasil Identik : ".$hasilIdentik."<br><br>";
$hasilTidakIdentik = $a !== $b;
echo "Hasil Tidak Identik : ".$hasilTidakIdentik."<br><br>";


$kursi = 45;
$kursiSdhDitempati = 28;
$sisaKursi = $kursi - $kursiSdhDitempati;
$persentaseSisa = $sisaKursi /  $kursi * 100;

echo "<br><br>Banyaknya kursi dalam suatu Restoran : ".$kursi."<br>";
echo "Banyaknya kursi yang sudah ditempati adalah : ".$kursiSdhDitempati."<br>";
echo "Persentase Sisa Kursi yang masih kosong yaitu : ".$persentaseSisa."%<br>";
