<?php
//nazwisko.php -> tabela (id, marka, model) -> hiperłącze dodaj auto pod tabela 
/// 
//exportowy.sql -> baza : nazwisko -> tabela : car -> id, marka, model 3 rekordy
if(!empty($_POST)) {
foreach ($_POST as $key => $value){
if(empty($value)){
header("location: ./prochniak.php?error=Zapełnij wszystkie pola&add_user=");
exit();
}
}

$connect = new mysqli("localhost", "root", "", "prochniak");
$sql = "INSERT INTO `car` (`id`, `brand`, `model`) VALUES (NULL, '$_POST[brand]', '$_POST[model]');";
$connect->query($sql);

if($connect->affected_rows) {
    header("location: ./prochniak.php?error=ok");
}else{
    header("location: ./prochniak.php?error=error");
}
}
?>