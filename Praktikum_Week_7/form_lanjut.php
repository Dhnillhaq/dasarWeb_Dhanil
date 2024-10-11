<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contoh Form dengan PHP</title>
</head>

<body>
     <h2>Form Contoh</h2> 
    <form method="post" action="proses_lanjut.php">
        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
            <option value="pisang">Pisang</option>
        </select>
        <br>
        
        <label for="warna">Pilih Warna Favoritmu: </label>
        <br>
        <input type="checkbox" name="warna[]" value="merah" checked> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

        <!-- Form Pilih Jenis Kelamin -->
        <label for="">Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki" checked> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>

