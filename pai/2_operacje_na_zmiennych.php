<?php
    echo PHP_VERSION."<br>"; //7.4.8

    //potęgowanie
    echo 2**10,"<hr>";
    

    $x = 10;
    $y = 1;
    echo $x<=>$y."<br>"; //jeśli lewa większa 1, jeśli równe 0, jeśli prawa większa -1

    //równe / indentyczne

    $x = 1;
    $y = 1.0;
    echo "<br>".gettype($x); //integer
    echo "<br>".gettype($y)."<br>"; //double

    if ($x == $y) {
        echo "równe";
    } else {
        echo "różne";
    }

    echo "<br>";

    if ($x === $y) {
        echo "równe";
    } else {
        echo "różne";
    }
?>