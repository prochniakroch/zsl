<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Początek strony</h3>
        <?php
            include './3_1.php'; // wyswietla plik 
            include_once './3_1.php'; // wyswietla tylko raz
            // include '3_123123.php'; //pokazuje warning ale wyswietla reszte strony

            require './3_1.php';
            require_once './3_1.php';
            //require './3____1.php'; // error i nie wyswietla dalej strony
        ?>
    <h3>Koniec strony</h3>
</body>
</html>