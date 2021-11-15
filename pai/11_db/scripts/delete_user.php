<?php
if (!empty($_GET['deleteUser'])) {
    //echo $_GET['deleteUser'];
    require_once './connect.php';
    $sql="DELETE FROM `users` WHERE `users`.`id` = $_GET[deleteUser]";
    $connect->query($sql);
    if ($connect->affected_rows) {
        echo "ok";
        header("location: ../3_db_select_table_delete.php?error=Prawidłowo usunięto rekord o id=$_GET[deleteUser]");
    } else {
        echo "error";
        header('location: ../3_db_select_table_delete.php?error=Nie usunięto rekordu!');
    }
} else {
    header('location: ../3_db_select_table_delete.php');
}
?>