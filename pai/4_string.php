<?php
    $text = <<< T
        ZSŁ - Zespół
        Szkół
        Łączności
    T;

    echo $text."<br>"; // wyswietla zmienna w jednej linii
    echo nl2br($text)."<hr>"; // wyswietla zmienna z wcieciami

    $name="janUSz";
    // zamiana liter na male
    echo strtolower($name)."<br>"; // janusz
    // zamiana liter na duze
    echo strtoupper($name)."<br>"; // JANUSZ

    $data="januSZ koWALski";
    // zamiana pierwsza litere na duza
    echo ucfirst($data)."<br>"; // JanuSZ koWALski
    // zamiana wszystkich pierwszych liter na duze
    echo ucwords($data)."<br>"; // JanuSZ KoWALski

    $lorem="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis impedit facere explicabo, similique eius dolorem nulla ad aut fugit maxime doloremque quidem id vero porro minus enim minima non odit?";

    echo "<hr>$lorem<hr>";
    // $col=wordwrap($lorem, 30, "text"); // po 30 znakach dodaje text
    $col=wordwrap($lorem, 30, "<br>"); // po 30 znakach dodaje <br>
    echo $col;

    // czyszczenie zawartosci bufora
    ob_clean(); // czysci ekran

    // usuwanie bialych znakow (spacje, tabulatory, entery)
    $name="janusz";
    $name1=" janusz  ";
    echo "dlugosc \$name: ".strlen($name)."<br>"; // 6
    echo "dlugosc \$name1: ".strlen($name1)."<br>"; // 9

    echo "dlugosc \$name1: ".strlen(ltrim($name1))."<br>"; // 8 usuwa spacje z lewej strony
    echo "dlugosc \$name1: ".strlen(rtrim($name1))."<br>"; // 7 usuwa spacje z prawej strony
    echo "dlugosc \$name1: ".strlen(trim($name1))."<br>"; // 6 usuwa spacje z obydwu stron

    // przeszukiwanie ciągów zanków
    echo strstr("janusz@gmail.com", "@")."<br>"; // @gmail.com
    echo strstr("janusz@gmail.com", "G")."<br>"; // funkcja jest wrażliwa na wielkosc liter (nic nie wyswietla)
    echo stristr("janusz@gmail.com", "G")."<br>"; //gmail.com

    // substr
    $name="Janusz";
    echo substr($name, 2)."<br>"; //nusz (wyświetla zmienna od 3 znaku, nie wyswietla 2 pierwszych znakow)
    $name="Janusz";
    echo substr($name, 2,3)."<br>"; //nus ()
    $name="Janusz";
    echo substr($name, -2)."<br>"; //sz (wyswietla 2 ostatnie znaki)
    $name="Janusz";
    echo substr($name, -2,1)."<br>"; //s

    echo substr(strstr("janusz@gmail.com", "@"),1)."<br>"; // gmail.com

    // dokonczyc str_replace
?>