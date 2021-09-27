<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostokąt</title>
</head>
<body>
    <h3>Prostokąt</h3>
<form method="POST">
<input type="text" name="sideA" placeholder="Podaj bok a"><br><br>
<input type="text" name="sideB" placeholder="Podaj bok b"><br><br>
<input type="submit" value="Oblicz"><br><br>
</form>
<?php
if (!empty($_POST['sideA']) && !empty($_POST['sideB'])) {
$sideA=$_POST['sideA'];
$sideB=$_POST['sideB'];
$area=$sideA*$sideB;
$circle=($sideA+$sideB)*2;
echo <<< RESULT
<hr>
Pole prostokąta wynosi: $area cm<sup>2</sup><br>
Obwód prostokąta wynosi: $circle cm
RESULT;
} else {
    echo "Wypełnij wszystkie pola!";
}
?>
</body>
</html>