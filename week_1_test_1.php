<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test 1</title>
</head>
<body>
<h1>Variables</h1>
<h2>Vježba 1 - String</h2>
<?php
$x = "Hello World";
$y = "3";
$z = "24.02";
$d = $y +2;

echo $x;
echo "<br>";

echo $y;
echo "<br>";

echo $z;
echo "<br>";

echo $y + $z;
echo "<br>";

echo $d;
echo "<br>";

$y ++; //inkrement
echo $y++;
echo "<br>";

$y --; //dekrement
echo $y--; //Zašto ne umanjuje vrijednost za 1?
echo "<br>";

echo $x . $y; //konkatenacija ili spajanje
echo "<br>";

echo "\"Hello\"";
echo "<br>";

echo "'Hello'";

?>
<h2>Vježba 2 - Kontrolne strukture</h2>
<?php

$t = date("h");

if ($t < "18"){
    echo "Have a good day!";
}
else {
    echo "Have a good night!";
}



?>


    
</body>
</html>