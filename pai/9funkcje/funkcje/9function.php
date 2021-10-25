<?php
  function text(){
    return "test";
  }
  function name($name){
    return $name;
  }
//zamieni pierwsza litere na duza pozostake znaki male usunie biale znaki
  function validateString($string, $lenght, $color){
    return substr(ucfirst(strtolower(trim($string))), 0, $lenght);
  }
  function nationality($nationality) {
    return ucfirst(strtolower($nationality));
  }
 ?>
