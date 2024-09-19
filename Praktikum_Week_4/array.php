<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];
foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<hr><br><br>Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun " . implode(', ', $karyawanPengalamanLimaTahun);

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie' , 85],
    ],
];
$mataKuliah = 'Fisika';
echo "<hr><br><br>Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

// Studi Kasus 
$daftarNilaiSiswa = [
    ["Alice" , 85],
    ["Bob" , 92],
    ["Charlie" , 78],
    ["David", 64],
    ["Eva", 90],
];

$totalNilaiKelas = 0;
$rataRataKelas = 0;
echo "<p>Daftar nilai Matematika siswa kelas xx pada ujian sebelumnya :</p>";
foreach ($daftarNilaiSiswa as $list) {
    $totalNilaiKelas += $list[1];
    echo "<br> - $list[0], Nilai :$list[1]";
}
$rataRataKelas = $totalNilaiKelas / 5;
echo "<h4 style = 'color:red'>Rata-rata nilai Matematika kelas xx : $rataRataKelas</h4><br>";

echo "<h4>Nilai Matematika siswa yang mencapai lebih dari nilai rata rata kelas adalah :<br> </h4>";
foreach ($daftarNilaiSiswa as $list) {
    if ($list[1] > $rataRataKelas) {
        echo "<h4> - $list[0] dengan nilai $list[1]</h4>";
    }
}
echo "<h3>Selamat!!!</h3>"
?>