<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moj prvi kalkulator</title>
</head>
<body>
<style>
    body{
        background-color: #ddd;
    }
    .calculator{
        text-align: center;
    }
</style>

<div class="container calculator">
<h2>My first arithmetic calculator</h2>
    <form>
        <input type = "number" name="num1" placeholder="Broj 1">
        <input type = "number" name="num2" placeholder="Broj 2">
        <select name="operator">

        <option>Prazno</option>
        <option>Saberi</option>
        <option>Oduzmi</option>
        <option>Pomnoži</option>
        <option>Podijeli</option>

        </select>
        <br><br>
        <button type="submit" autofocus name="submit" value="submit">Izračunaj</button><br><br>
    </form>
    <h4>Rezultat je: </h4> 


<?php 
 
    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "Prazno":
            echo "<u>Unesite podatke!</u>";
            break;
            case "Saberi":
            echo $result1 + $result2;
            break;
            case "Oduzmi":
            echo $result1 - $result2;
            break;
            case "Pomnoži":
            echo $result1 * $result2;
            break;
            case "Podijeli":
            echo $result1 / $result2;
            break;
        }
}

?>


</div>

</body>
</html>
