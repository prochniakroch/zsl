<?php
if (!empty($_POST)) {
foreach ($_POST as $key => $value) {
//echo "$key: $value<br>";
if (empty($value)) {
//echo "<script>history.back()</script>";
header('location: ../4_db_select_table_delete_insert.php?error=Wypełnij wszystkie pola!&addUser=');
exit();
}
}

require_once './connect.php';

$sql="INSERT INTO `users` (`id`,  `name`, `surname`, `birthday`, `create_date`) VALUES (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[birthday]', current_timestamp());";
$connect ->query($sql);
if($connect->affected_rows){
    header('location: ../4_db_select_table_delete_insert.php?error=dodano uzytkownika');
}else{
    header('location: ../4_db_select_table_delete_insert.php?error=nie dodano uzytkownika');
}
}

 ?>
