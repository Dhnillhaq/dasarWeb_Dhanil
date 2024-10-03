<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Week 6</title>
</head>

<body>
    <?php

    echo "<h2>Data Mahasiswa array Multidimensi</h2>";
    $dataMahasiswa = [
        "Mahasiswa1" => [
            "Nama" => "Dina",
            "Nim" => "123456",
            "Jurusan" => "Teknik Kimia",
            "Email" => "dina@gmail.com"
        ],
        "Mahasiswa2" => [
            "Nama" => "Dino",
            "Nim" => "9123124",
            "Jurusan" => "Teknik Listrik",
            "Email" => "dino@gmail.com"
        ]
    ];


    foreach ($dataMahasiswa as $key) {
        echo "<ul><li>Nama : {$key["Nama"]}</li>";
        echo "<li>NIM : {$key["Nim"]}</li>";
        echo "<li>Jurusan : {$key["Jurusan"]}</li>";
        echo "<li>Email : {$key["Email"]}</li></ul>";
        echo "<br>";
    }
    ?>
</body>

</html>