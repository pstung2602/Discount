<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $money = $_POST["search1"];
    $rate = $_POST["search2"];
    echo "gia goc: " . $money."<br>";
    echo "%chiet khau: " . $rate."<br>";
    echo "luong chiet khau: " . ($money * $rate / 100)."<br>";
    echo "gia sau khi giam: " . ($money - $money * $rate / 100);
}
?>

</body>
</html>
