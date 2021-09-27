<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwadrat</title>
</head>
<body>
<h3>Kwadrat</h3>
<form method="POST">
<input type="text" name="sideA" placeholder="Podaj bok a"><br><br>
<input type="submit" value="Oblicz"><br><br>
</form>
<?php
if (!empty($_POST['sideA'])) {
$sideA=$_POST['sideA'];
$area=pow($sideA, 2); // do kwadratu
$circle=$sideA*4;
echo <<< RESULT
<hr>
Pole kwadratu wynosi: $area cm<sup>2</sup><br>
Obwód kwadratu wynosi: $circle cm
RESULT;
} else {
    echo "Wypełnij wszystkie pola!";
}
?>
</body>
</html>