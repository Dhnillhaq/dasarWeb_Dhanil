<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <h3>Time</h3>
    <?php
    date_default_timezone_set("asia/jakarta");
    echo date("h:i:sa");

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];



    ?>

</body>

</html>