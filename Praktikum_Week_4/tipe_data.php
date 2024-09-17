<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;
echo "<p>Variabel a: {$a}</p>";
echo "<p>Variabel b: {$b}</p>";
echo "<p>Variabel c: {$c}</p>";
echo "<p>Variabel d: {$d}</p>";
echo "<p>Variabel e: {$e}</p>";

var_dump($e);


$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;
echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";
var_dump($rataRata);
?>
