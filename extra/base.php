<?php
//include_once("./extra/cabeza.php");

//iniciar sesión
$conn= mysqli_connect(
    'localhost',
    'root',
    '',
    'cinestar'
);
if(isset($conn)){
    echo "";
}else{
    echo "desconectado";
}
?>