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

        $sql = "SELECT * FROM `users` INNER JOIN `cities` ON users.city=cities.city";
        $result = $connect->query($sql);
        
        echo <<< TABLE
        <table>
            <tr>
                <th>Id</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Data urodzenia</th>
                <th>Data utworzenia użytkownika</th>
                <th>Miasto</th>
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
                <td>$user[city]</td>
                <td><a href="./scripts/delete_user.php?deleteUser=$user[id]">Usuń</a></td>
                <td><a href="./4_db_select_table_delete_insert_update.php?updateUser=$user[id]">Aktualizuj</a></td>
            </tr>
USER;
        }
        echo "</table>";
        if (isset($_GET['addUser'])) {
        echo <<< FORMADDUSER
            <h4>Dodawanie użytkownika</h4>
            <form action="./scripts/add_user.php" method="post">
                <input type="text" name="name" placeholder="Podaj imię"><br><br>
                <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
                <input type="text" name="birthday" placeholder="data urodzenia"><br><br>
            <select name="city">
FORMADDUSER;
        $sql = "SELECT * FROM `cities`";
        $result = $connect->query($sql);
        while($city = $result->fetch_Assoc()) {
           echo "<option value=\"$city[city]\">$city[city]</option>";
        }
        echo <<< FORMADUSER
        </select><br><br>
        <input type="submit" value="Dodaj użytkownika">
        </form>
FORMADUSER;
        }else{
        echo '<br><a href="./4_db_select_table_delete_insert.php?addUser=">Dodaj użytkownika<a/>';
}
    ?>
</body>
</html>