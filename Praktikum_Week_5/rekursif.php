<?php
function tampilkanHaloDunia()
{
    echo "Halo dunia!<br>";

    tampilkanHaloDunia();
}

// tampilkanHaloDunia();

function tampilkanAngka(int $jumlah, int $indeks = 1)
{
    echo "Perulangan ke-{$indeks}<br>";

    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);

$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

echo "<hr>";
function tampilkanMenuBertingkat(array $menu)
{
    echo "<ul>";
    foreach ($menu as $key) {
        echo "<li>{$key['nama']}";
        if (isset($key['subMenu'])) {
            tampilkanMenuBertingkat($key['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>