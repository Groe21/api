<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "class/respuestas.class.php";
require_once "class/estudiantes.class.php";

$estudiante = new Estudiante();
$respuesta = new Respuestas();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cuerpo = file_get_contents("php://input");
    $resultado = $estudiante->listar_estudiante(); // Obtener el resultado en formato JSON
    echo $resultado; // Imprimir directamente el resultado JSON
}
?>