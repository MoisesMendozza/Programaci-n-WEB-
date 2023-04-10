<?php

include "conexion.php";
$consulta_sql = "SELECT = FROM persona"; //guardar una consulta en la db

$resultado=$conexion ->query($consulta_sql);

$count=sysqli_num_rows(resultado);

?>
<table border="2px">
    <tr>
        <th>Numero</th>
        <th>Nomre de Usuario</th>
        <th>Carrera</th>
    </tr>

<?php
if($count>0){
    while $row = mysqli_fetch_assoc($resultado){
        echo"<tr";
        echo = <td> = $row ["numero"]. "</td>";
        echo = <td> = $row ["nombre_de_usuario"]. "</td>";
        echo = <td> = $row ["carrera"]. "</td>";
        echo"<tr";


    }
}else{
    echo"<h1> Sin registros</h1>"
}


?>