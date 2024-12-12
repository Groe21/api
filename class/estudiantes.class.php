<?php

require_once "conexion/conexion.php";
require_once "respuestas.class.php";

class Estudiante extends Conexion {
    public function listar_estudiante() {
        $query = "SELECT id_estudiante, cedula, apellidos, nombres, fecha_nacimiento, lugar_nacimiento, residencia, direccion, sector, foto, id_paralelo, id_periodo, id_padre, id_madre, id_representante
                  FROM escuela.estudiantes";
        $datos = parent::obtenerDatos($query);
        return json_encode($datos); // Codificar los datos como JSON
    }
}
?>