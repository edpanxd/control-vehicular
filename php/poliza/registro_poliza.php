<?php
include '../conn.php';
//registro de profesores

$id⁪ = $_POST["vehiculo"];
$poliza = $_POST["poliza"];
$seguro = $_POST["seguro"];
$vigencia = $_POST["fecha"];
$nombre=$_POST["nombre"];

if ($_FILES["archivo"]) {
    $nombre_base = basename($_FILES["archivo"]["name"]);
    $nombre_final = date("m-d-y") . "-" . date("H-m-s") . "-" . $nombre_base;
    $ruta = "../../archivos/poliza/" . $nombre_final;
    
    if ($ruta) {


        $insertar_poliza = "INSERT INTO poliza(vehiculo_id, poliza, seguro, vigencia,nombre, archivo)
                VALUES ('$id⁪', '$poliza', '$seguro', '$vigencia','$nombre', '$ruta')";

        $resultadoP = mysqli_query($cone, $insertar_poliza);
        if (!$resultadoP) {
            header("Location: ../../404.html");
            echo  $insertar_poliza, $resultadoP, $id;
        } else {
            $subirarchivo = move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
            header('Location:../../poliza.php');
        }
    } else {
        echo "error";
    }
} else {
    echo "Archivo no seleccionado";
}
