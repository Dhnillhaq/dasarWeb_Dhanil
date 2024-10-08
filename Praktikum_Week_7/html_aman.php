<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah input telah diisi
    if (isset($_POST['input'])) {
        // Mengambil dan mengamankan input
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "Input yang dimasukkan: " . $input;
    } else {
        echo "Tidak ada input yang dimasukkan.";
    }
    if (isset( $_POST["email"])) {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "email aman";
        } else {
            echo "email nya ga masuk";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>

<form method="POST" action="">
    <label for="input">Masukkan sesuatu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
    <input type="text" id="input" name="input">
    <br><br>
    <label for="input">Masukkan sebuah email&nbsp;&nbsp;:</label>
    <input type="email" id="email" name="email">
    <br><br>
    <button type="submit">Kirim</button>
</form>

</body>
</html>
