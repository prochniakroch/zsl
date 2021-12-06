<?php
if (!empty($_POST)) {
foreach ($_POST as $key => $value) {
if (empty($value)) {
header('location: ../4_db_select_table_delete_insert_update.php?error=Wypełnij wszystkie pola!&addUser=');
exit();
}
}

require_once './connect.php';

$sql="UPDATE `users` SET `name` = $_POST[name], `surname` = $_POST[surname], `birthday` = $_POST[birthday], `city` = $_POST[city] VALUES (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[birthday]', current_timestamp()), '$_POST[city]'";

$connect ->query($sql);
if($connect->affected_rows){
    header('location: ../4_db_select_table_delete_insert_update.php?error=dodano uzytkownika');
}else{
    header('location: ../4_db_select_table_delete_insert_update.php?error=nie dodano uzytkownika');
}
}

 ?>
