<?php
  if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
      // echo "$key: $value<br>";
      if (empty($value)) {
        // echo "<script>history.back()</script>";
        // header('location: ../4_db_select_table_delete_insert.php?error=Wypełnij wszystkie pola!&addUser=');
        header('location: ../4_db_select_table_delete_insert_update.php?error=Wypełnij wszystkie pola!&addUser=');
        exit();
      }
    }
    require_once './connect.php';
    $sql="UPDATE `users` SET `cityid` = '$_POST[cityid]', `name` = '$_POST[name]', `surname` = '$_POST[surname]', `birthday` = '$_POST[birthday]' WHERE `users`.`id` = $_POST[id];";
    $connect->query($sql);
 
    if ($connect->affected_rows == 1) {
      // header('location: ../4_db_select_table_delete_insert.php?error=Prawidłowo dodano użytkownika');
      header('location: ../4_db_select_table_delete_insert_update.php?error=Prawidłowo zaktualizowano użytkownika');
    }else{
      // header('location: ../4_db_select_table_delete_insert.php?error=Nie dodano użytkownika');
      header('location: ../4_db_select_table_delete_insert_update.php?error=Nie zaktualizowano użytkownika');
    }
 
  }
 ?>