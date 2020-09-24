<?php
    if(isset($_GET['miastoA']) and isset($_GET['miastoB'])){
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
        include("skrypt.php");  
        
            
        
    }
    else{
        
        include("form.php");
    }
?>


