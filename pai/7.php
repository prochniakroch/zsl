<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Średni wiek</title>
</head>
<body>
    <?php
    if (!isset($_POST['person']) && !isset($_POST['buttonAVG'])) {
        echo <<< FORMCOUNTPERSON
            <h3>Ilość osób w rodzinie</h3>
            <form method="POST">
                <input type="number" name="person" placeholder="Podaj ilość osób"><br><br>
                <input type="submit" value="Zatwierdź"><br><br>
            </form>
    FORMCOUNTPERSON;
    }

    if (!empty($_POST['person'])) {
        echo "<h3>Ilość osób w rodzinie: $_POST[person]</h3>";
        echo <<< FORMAGEPERSON
        <form method="POST">
    FORMAGEPERSON;

        for ($y=1; $y <= $_POST['person']; $y++) {
            echo "<input type=\"number\" name=\"age$y\" placeholder=\"Podaj wiek osoby $y\"><br><br>";
        }
        echo '<input type="submit" name="buttonAVG" value="Oblicz średni wiek"><br><br>';
        echo <<< FORMAGEPERSON
        </form>
    FORMAGEPERSON;
    }

    if (isset($_POST['buttonAVG'])) {
        $ageAVG=0;
        $z=0;
        foreach ($_POST as $key => $value) {
            if ($key != 'buttonAVG') {
            $ageAVG=$ageAVG+$value;
            $z++;
            }
        }
        $ageAVG1=$ageAVG / $z;
        $ageAVG1=number_format($ageAVG1,2,',','');
        echo "Średnia: $ageAVG1";
    }

    echo "<hr>";
    echo "<a href header(Location:7.php#location)>Strona główna</a>";

    ?>
</body>
</html>