<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    <h4>Użytkownicy</h4>
    <?php
        $connect = new mysqli("localhost", "root", "", "zsl_3pi2t_g2");

        $sql = "SELECT * FROM `users`";
        $result = $connect->query($sql);
        //$user = $result->fetch_assoc(); jeden użytkownik
        
        while ($user = $result->fetch_assoc()) {
        echo <<< USER
        Id: $user[id]<br>
        Imię i Nazwisko: $user[name] $user[surname]<br>
        Data urodzenia: $user[birthday]<br>
        Data utworzenia użytkownika: $user[create_date]
        <hr>
USER;
        }
    ?>
</body>
</html>