<?php
session_start();
?>

<?php

include ("conexion.php");

$id_paciente=$_POST['id'];
$id_medico=$_POST['medico'];
$id_usuario=$_SESSION['id_usuario'];

date_default_timezone_set($zonaHoraria);
$fecha = new DateTime();
$fechaa = $fecha->format('Y-m-d');

$con=mysqli_connect($host,$user,$pw)or die("Problemas al conectar");
mysqli_select_db($con, $db)or die("Problemas al conectar la bd");

mysqli_query($con, "INSERT INTO asignacion_medico 
(id_pacientepro, id_medico, id_usuario) 
VALUES ('$id_paciente', '$id_medico', '$id_usuario')");
 
mysqli_close($con); 


 
?>