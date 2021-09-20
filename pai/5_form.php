<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <h3>Dane Użytkownika</h3>
    <form>
    <input type="text" name="name" placeholder="Podaj imię"><br><br>
    <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
    <input type="color" name="color" placeholder="Wybierz kolor"><br><br>
    <input type="submit" value="Zatwierdź dane"><br><br>
    </form>
    <?php
    if (!empty($_GET['name']) && !empty($_GET['surname']) && !empty($_GET['color'])) {
    echo <<< E
        Imię i nazwisko: {$_GET['name']} {$_GET ['surname']} <br>
        Kolor: {$_GET ['color']}
        E;
    }else{
    echo "Wypełnij wszystkie pola!";
    }
    ?>
</body>
</html>