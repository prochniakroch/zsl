<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px black solid;

        };
        tr {
            border: 1px black solid;
            padding: 5px;
        }
        th {
            border: 1px black solid;
            padding: 5px;
        }
        td {
            border: 1px black solid;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_GET['error'])){
        echo $_GET['error'];
    }
    ?>
    <h4>Samochody</h4>
    <?php
    $connect = new mysqli("localhost", "root", "", "prochniak");
    $sql = "SELECT * FROM `car`";
    $result = $connect->query($sql);

    echo <<< TABLE
    <table>
    <tr>
        <th>Id</th>
        <th>Brand</th>
        <th>Model</th>
    </tr>
TABLE;

    while ($car = $result->fetch_assoc()) {
    echo <<< CAR
    <tr>
        <td>$car[id]</td>
        <td>$car[brand]</td>
        <td>$car[model]</td>
    </tr>
CAR;
    }
    echo "</table><br><br>";
    if(isset($_GET['add_car'])) {
    echo <<< ADD
        <h4>Dodaj samochód</h4>
        <form action="./script.php" method="POST">
            <input name="brand" type="text" placeholder="Wpisz marke"><br><br>
            <input name="model" type="text" placeholder="Wpisz model"><br><br>
            <input type="submit" value="OK"><br><br>
        </form>
ADD;
    }else{
    echo '<a href="./prochniak.php?add_car=">Dodaj auto</a>';
    }
    ?>
</body>
</html>