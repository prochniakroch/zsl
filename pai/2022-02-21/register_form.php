<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
</head>
<body>
    <h3>Rejestracja użytkownika</h3>
    <form method="post" action="./scripts/register.php">
        <input type="text" name="name" placeholder="Podaj imię"><br><br>
        <input type="email" name="email1" placeholder="Podaj email"><br><br>
        <input type="email" name="email2" placeholder="Powtórz email"><br><br>
        <input type="password" name="pass1" placeholder="Podaj hasło"><br><br>
        <input type="password" name="pass2" placeholder="Powtórz hasło"><br><br>
        <input type="submit" value="Zarejestruj się">
    </form>
</body>
</html>