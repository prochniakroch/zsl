<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <h3>System Logowania</h3>
    <form action="./scripts/login.php" method="post">
        <input type="text" name="login" placeholder="Wpisz login"><br><br>
        <input type="password" name="pass" placeholder="Wpisz hasło"><br><br>
        <input type="submit" value="Zaloguj się"><br><br>
        <a href="./register_form.php">Zarejestruj się</a>
    </form>
</body>
</html>