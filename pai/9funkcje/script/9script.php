<?php
  if(!empty($_POST['name']) && !empty($_POST['color']) && !empty($_POST['nationality'])){
    require_once '../funkcje/9function.php';
    //echo text();

    echo name('Krystyna').'<hr>';
    //echo $_POST['color']."<br>";
    $color=$_POST['color'];
    echo "<div style=\"color: $color\">";
    echo 'Imie: '.validateString($_POST['name'],$_POST['lenght'],$_POST['color'])."<br>";
    echo "Narodowość: ".nationality($_POST['nationality'])."</div><br>";
    

}
  ?>

