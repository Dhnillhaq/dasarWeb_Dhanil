<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2</title>
    <style>
        table {
            text-align: center;
            padding: 0;
            width: 30rem;
            height: 10rem;
            border: 3px solid black;
        }
        .baris{
            background-color: #ff042f;
            color: #fff;
            padding: 5px;
        }
        
        th, td {
            border: 2px solid black;
            margin: 0;
        }
    </style>
</head>
<body>
    <h2></h2>
    <?php 
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin'=> 'Perempuan'];

        echo "<table>";
        echo '<tr class="baris">
        <th>Nama</th>
        <th>Domisili</th>
        <th>Jenis Kelamin</th>
        </tr>';
        echo "<tr>
        <td>{$Dosen ['nama']}</td>
        <td>{$Dosen['domisili']}</td>
        <td>{$Dosen ['jenis_kelamin']}</td>
        </tr>";
        echo "</table>";
        
    ?>
</body>
</html>