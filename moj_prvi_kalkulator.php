<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moj prvi kalkulator</title>
</head>
<body>
    
</body>
</html>
<h1>Moj prvi kalkulator sa aritmetičkim operacijama</h1>
<form action="moj_prvi_kalkulator.php" method="GET">
    Broj 1:<input type="number" name="num1">
    Broj 2:<input type="number" name="num2">
    <input type="submit">

</form>
<?php

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    echo "Zbir unesenih brojeva je: " . ($num1 + $num2);
    echo "<br>";

    echo "Razlika unesenih brojeva je: " .($num1 - $num2);
    echo "<br>";

    echo "Proizvod unesenih brojeva je: " .($num1 * $num2);
    echo "<br>";

    echo "Količnik unesenih brojeva je:" .($num1 / $num2);
    echo "<br>";
?>