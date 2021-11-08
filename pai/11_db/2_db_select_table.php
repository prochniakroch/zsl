<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h4>Użytkownicy</h4>
    <?php
        $connect = new mysqli("localhost", "root", "", "zsl_3pi2t_g2");

        $sql = "SELECT * FROM `users`";
        $result = $connect->query($sql);
        
        echo <<< TABLE
        <table>
            <tr>
                <th>Id</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Data urodzenia</th>
                <th>Data utworzenia użytkownika</th>
            </tr>
TABLE;

        while ($user = $result->fetch_assoc()) {
        echo <<< USER
            <tr>
                <td>$user[id]</td>
                <td>$user[name]</td>
                <td>$user[surname]</td>
                <td>$user[birthday]</td>
                <td>$user[create_date]</td>
            </tr>
USER;
        }
        echo "</table>";
    ?>
</body>
</html>