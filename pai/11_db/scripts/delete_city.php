<?php
if (!empty($_GET['deleteCity'])) {
    require_once './connect.php';
    $sql="DELETE FROM `cities` WHERE `cities`.`city_id` = $_GET[deleteCity]";
    $connect->query($sql);
    if ($connect->affected_rows) {
        echo "ok";
        header("location: ../4_city_delete.php?error=Prawidłowo usunięto rekord o id=$_GET[deleteCity]");
    } else {
        echo "error";
        header('location: ../4_city_delete.php?error=Nie usunięto rekordu!');
    }
} else {
    header('location: ../4_city_delete.php');
}
?>