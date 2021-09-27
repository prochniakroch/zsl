<?php
// print_r($_POST);
if (!empty($_POST['name']) && (!empty($_POST['figure']))) {
switch ($_POST['figure']) { 
case 'kwadrat':
    header('location: ./6_1_square.php'); //przekierowuje do strony dalej i git
break;
case 'prostokat':
    header('location: ./6_1_rectangle.php');
break;
}
} else  {
    ?>  
    <script>
        history.back(); //wraca użytkownika na poprzednia strone\

    </script>
    <?php
}
?>