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

    /*
    postinkremetacja $x++   
    preinkrementacja ++$x
    postdekremetacja $x--
    predekrementacja --$x
    */

    $x=2;
    echo "<hr>$x"; //2
    echo ++$x; //3
    echo $x++; //3
    echo ++$x."<br>"; //5

    $x=1;
    echo $x; //1
    $x=$x++;
    echo $x; //1
    $x=++$x;
    echo $x; //2
    $y=++$x;
    echo $x; //3
    echo $y; //3
    $y=$x++;
    echo $x; //4
    echo $y."<br>"; //3 

    
?>