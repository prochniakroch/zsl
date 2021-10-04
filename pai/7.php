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
    ?>

    <?php
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
        foreach ($_POST as $key => $value) {
            echo "$key: $value<br>";
            if ($key != 'buttonAVG') {
            $ageAVG=$ageAVG+$value;
            }
        }
        echo "Średnia: $ageAVG";
    }
    //dodaj zaokrąglenie wyniku do 2 miejsc po przecinku (number_format)
    //dodaj hiperłącze wyświetlające początkowy formularz (header('location: '))
    ?>
</body>
</html>