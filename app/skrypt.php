<?php

#x - szerokość
#y - długość

$x1 = 50.06;
$y1 = 19.93;
$x2 = 52.21;
$y2 = 20.10;

$taryfa = 2.8;

$imie = $_GET['nazwa'];
$miastoA = $_GET['miastoA'];
$miastoB = $_GET['miastoB'];

$distance = sqrt(($x1 - $x2)*($x1 - $x2) + ($y1-$y2)*($y1-$y2)) * 111;
$cena = ceil($distance * $taryfa);

#echo $distance, ' ';
echo $imie, ' <br>';
echo $miastoA, ' do ', $miastoB, ' <br>';
echo ceil($distance), 'km ', '<br>';
echo $cena, ' ', 'zł';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <br>
    <a href="zamow.php"> <button style="width:120px; height:50px;">Zamów Bilet</button></a>

</body>
</html>