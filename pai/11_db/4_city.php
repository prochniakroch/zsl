<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miasta</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h4>Miasta</h4>
    <?php
        $connect = new mysqli("localhost", "root", "", "zsl_3pi2t_g2");

        $sql = "SELECT * FROM `cities`";
        $result = $connect->query($sql);
        
        echo <<< TABLE
        <table>
            <tr>
                <th>Id</th>
                <th>Nazwa miasta</th>
            </tr>
TABLE;

        while ($city = $result->fetch_assoc()) {
        echo <<< USER
            <tr>
                <td>$city[city_id]</td>
                <td>$city[city]</td>
                <td><a href="./scripts/delete_city.php?deleteCity=$city[city_id]">Usuń</a></td>
            </tr>
USER;
        }
        echo "</table>";
    ?>
</body>
</html>