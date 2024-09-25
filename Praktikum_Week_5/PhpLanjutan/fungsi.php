<?php
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $citaCita ,$salam = "Assalamualaikum"){
    echo "$salam, ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Umur saya adalah ".hitungUmur(2004, 2024) ." Tahun<br>";
    echo "Cita-cita saya ".$citaCita. "<br>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Budiono Siregar","Kapal LAWD", "Haloo");

echo "<hr>";


?>