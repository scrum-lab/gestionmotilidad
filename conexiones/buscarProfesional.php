<?php

include ("conexion.php");


$conexion = new mysqli($host, $user, $pw, $db);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$sql = "SELECT * FROM profesional_salud";
$result = $conexion->query($sql);

while ($row = $result->fetch_array(MYSQLI_NUM)){   

    echo "<option value='".$row[1]."' >".$row[2]." ".$row[3]."</option>";
    
}  

echo "</select>";

mysql_query ("SET NAMES 'utf8'");

mysqli_close($conexion); 


?>