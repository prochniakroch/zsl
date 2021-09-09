<?php
echo 'ZSŁ<br>';
echo 'ZSŁ<hr>';

$name = "Janusz";
echo 'imie: $name <br>'; //imie: $name
echo "imie: $name <br>"; //imie: Janusz

// konkatenacja . 
echo "Janusz"." Kowalski <br>";


// typy danych
// całkowity
$calkowita=10;
$bin=0b101; //5
$oct=011; //9
$hex=0x11; //17

// zmiennoprzecinkowy
$x=10.5;

// logiczny
$prawda=true;
$fałsz=false; //w nazwach zmiennych nie należy używać polskich znaków
echo $prawda; //1
echo $fałsz; //nic nie wyświetla

// składnia heredoc
// pierwszy sposób
echo <<< E
    <hr>Twoje imię: $name<br>
    Poznań<br>
    ZSŁ<hr>
E;
// drugi sposób
$text = <<< E
    <hr>Twoje imię: $name<br>
    Poznań<br>
    ZSŁ<hr>
E;
echo $text;

//składnia nowdoc
echo <<< 'E'
    <hr>Twoje imię: $name<br>
    Poznań<br>
    ZSŁ<hr>
E;


$surname = "Nowak";
echo "\$name $surname"; //$name Nowak


?>