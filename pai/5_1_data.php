<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (!empty($_GET['name']) && !empty($_GET['age']) && !empty($_GET['nationality'])) {
        $name = strtolower($_GET['name']);
        $nationality = strtolower($_GET['nationality']);
        echo "Imię: ".ucfirst($name)."<br>"; 
        echo "Narodowość: ".ucfirst($nationality)."<br>"; 
        echo "Wiek: ".$_GET['age']." lat <br>";
    }else{
    echo "Wypełnij wszystkie pola!";
    }
    ?>
</body>
</html>