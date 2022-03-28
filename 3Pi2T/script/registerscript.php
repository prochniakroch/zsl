<?php
    session_start();

    require_once './conn.php';
    $error = 0;

    foreach($_POST as $key => $value){
        $_SESSION['error'] = "Wypełnij wszystkie pola!";
        if(empty($value)) {
            $error = 1;
        }
    }

    if($_POST["pass1"] != $_POST["pass2"]) {
        $error = 1;
        $_SESSION['error'] = "Hasła muszą być identyczne!";
    }

    if($_POST["email1"] != $_POST["email2"]) {
        $error = 1;
        $_SESSION['error'] = "Email muszą być identyczne!";
    }

    if(!isset($_POST["terms"])) {
        $error = 1;
        $_SESSION['error'] = "Musisz zgodzić się na warunki!";
    }
    
    if ($error != 0){
        echo "<script>history.back();</script>";
        exit();
    }

    $password = password_hash($_POST['pass1'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `birthday`, `city`, `gender`, `create_date`) VALUES (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[email1]', '$password', '$_POST[birthday]', '$_POST[city]', '$_POST[gender]', current_timestamp());";
    $result = $conn->query($sql);
    header("location: ../login.php");
?>