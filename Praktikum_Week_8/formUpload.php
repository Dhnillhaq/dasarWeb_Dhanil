<!DOCTYPE html>
<html lang="en">

<head>
    <title>File Upload</title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Masukkan data anda, saya mau Fishing >:/</label>
        <br>
        <br>
        <input type="file" name="myfile" id="myfile">
        <br>
        <br>
        <input type="Submit" name="submit" value="Upload File">
    </form>
</body>

</html>