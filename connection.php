<?php
$host_db="sql307.byetcluster.com"; //ubicacion de la base de datos
$user_db="epiz_33982749"; //ubicacion del usuario
$pass_db="129GfWd8VEllGG";
$name_db="epiz_33982749_123"; //nombre de la base de datos


$conexion = new msqli($host_db, $user_db, $pass_db, $name_db)

if($conexion -> connect_error){
    echo"<h1> Error en la conexion de DB</h1>";
}else {
    echo"<h1> Conexion con exito</h1>";
}



?>