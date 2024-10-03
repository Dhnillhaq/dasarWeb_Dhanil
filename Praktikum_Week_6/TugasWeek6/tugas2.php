<!DOCTYPE html>
<head>
    <title>Tugas Data Table PHP</title>
    
    <script src="jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function () {
            $(".toggle").click(function () {
                $(".tabel").slideToggle("slow");
            });
        });


    </script>

    <style>
        .toggle {
            width: 100%;
            padding: 3px;
            background-color: #ffdc2e;
            border-radius: 6px;
            text-align: center;
            color: #000;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 500;
            
            
        }
        .tabel {
            background-color: #ffdc2e;
            height: 22rem;
            padding: 30px;
            margin-top: 30px;
            border-radius: 15px;
        }

        h2 {
            color: white;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: left;
            padding: 16px;
        }
        tr{
            background-color: #f2f2f2;
            
        }
        
        tr:nth-child(even) {
            background-color: #fff;
            
        }
    </style>

</head>

<body>
    <div class='toggle'>Klik disini untuk melihat Data Siswa!</div>
    <div class="tabel">

        <h1>Data Siswa</h1>
        <?php
    $dataSiswa = array(
        array(
            "Nama" => "Andi",
            "Umur" => "15",
            "Kelas" => "10A",
            "Alamat" => "Lawang"
        ),
        array(
            "Nama" => "Siti",
            "Umur" => "16",
            "Kelas" => "10B",
            "Alamat" => "Karangploso"
        ),
        array(
            "Nama" => "Budi",
            "Umur" => "15",
            "Kelas" => "10A",
            "Alamat" => "Turen"
        ),
        array(
            "Nama" => "Anton",
            "Umur" => "25",
            "Kelas" => "15A",
            "Alamat" => "Padang"
        ),
    );
    echo "<table>";
    echo "<tr>
    <th>Nama</th>
    <th>Umur</th>
    <th>Kelas</th>
    <th>Alamat</th>
    </tr>";
    foreach ($dataSiswa as $item) {
        echo "<tr>";
        echo "<td>" . $item["Nama"] . "</td>";
        echo "<td>" . $item["Umur"] . "</td>";
        echo "<td>" . $item["Kelas"] . "</td>";
        echo "<td>" . $item["Alamat"] . "</td></tr>";
    }
    echo "</table>";
    ?>
</div>

</body>

</html>