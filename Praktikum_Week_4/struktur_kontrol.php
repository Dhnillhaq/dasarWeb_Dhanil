<?php

// IF ELSE
$nilaiNumerik = 92;

echo "<b>Struktur Kontrol IF: </b><br><br>";
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

// WHILE
echo "<br><br><b>Struktur Kontrol While: </b>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br><br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500km.";

// FOR
echo "<br><br><b>Struktur Kontrol FOR: </b>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br><br>Jumlah buah yang akan dipanen adalah: $jumlahBuah";

// FOR EACH
echo "<br><br><b>Struktur Kontrol For Each: </b>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "<br><br>Total skor ujian adalah: $totalSkor";

// FOR EACH
echo "<br><br><b>Struktur Kontrol Continue: </b>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "<br><br>Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "<br><br>Nilai: $nilai (Lulus) <br>";
}

// Studi Kasus 1
$newNilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilaiWoTR = 0;
$rataRata = 0;
for ($i = 0; $i < count($newNilaiSiswa); $i++) {
    if ($newNilaiSiswa[$i] == 96 || $newNilaiSiswa[$i] == 70) {
        continue;
    }
    $totalNilaiWoTR += $newNilaiSiswa[$i];
} 
$rataRata = $totalNilaiWoTR / 8;

echo "<br><br>Total nilai siswa seluruhnya: $totalNilaiWoTR";
echo "<br><br>Rata-rata nilai siswa: $rataRata";

// Studi Kasus 2
$hargaProduk = 120000;
$discountPersen = 20;
$hargaYgHrsDibayar = 0;

if ($hargaProduk > 100000) {
    $hargaYgHrsDibayar = $hargaProduk - ($hargaProduk * $discountPersen / 100);
} else {
    $hargaYgHrsDibayar = $hargaProduk;
}
echo "<br><br>Harga Produk yang ingin anda beli adalah Rp.$hargaProduk,00.<br><b>Selamat Anda Mendapatkan diskon 20% dikarenakan pembelian anda diatas Rp.100.000</b>";
echo "<br><br>Total harga yang harus anda bayar <s>Rp.$hargaProduk</s>. hanya <b>Rp.$hargaYgHrsDibayar</b>";

// Studi Kasus 3
echo "<br><br><h4><b>CONTOH</b></h4>";
$contohTotalSkor = 560;
$hadiahTambahan = $contohTotalSkor > 500 ? "YA!!!" : "TIDAK:(";
echo "Total skor pemain adalah : $contohTotalSkor<br>";  
echo "Apakah pemain mendapatkan hadiah tambahan? <b>$hadiahTambahan</b>"


?>