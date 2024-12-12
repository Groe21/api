<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "conexion.php";

class TestConexion {
    public function probarConexion() {
        $conexion = new Conexion();
        if ($conexion->conexion) {
            echo "Conexión exitosa a PostgreSQL";
        } else {
            echo "Error al conectar a PostgreSQL: " . pg_last_error();
        }
    }
}

$test = new TestConexion();
$test->probarConexion();

?>