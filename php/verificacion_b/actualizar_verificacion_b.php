<?php
include '../conn.php';
//registro de profesores
$id=$_POST["id"];
$vehiculo=$_POST["vehiculo"];
$vencimiento=$_POST["fecha"];
$estatus=$_POST["estatus"];



$insertar_placas = "UPDATE verificacion_b SET estatus = '$estatus' WHERE id ='$id' ";

$resultadoV= mysqli_query($cone, $insertar_placas);
if (!$resultadoV) {
    echo  $insertar_placas, $resultadoV ;
} else {
    header('Location:../../verificacion_b.php');
}