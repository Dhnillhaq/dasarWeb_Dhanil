<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    session_unset();
    session_destroy();

    echo "All session variables are now removed, and the session is destroyed.";
    ?>
</body>

</html>