<?php
class Respuestas {
    public $responder = [
        'status' => "ok",
        "result" => array()
    ];

    public function error_405() {
        $this->responder['status'] = "error";
        $this->responder['result'] = array(
            "error_id" => "405",
            "error_message" => "Metodo no permitido"
        );
        return $this->responder;
    }

    public function error_200($string = "Datos incorrectos") {
        $this->responder['status'] = "error";
        $this->responder['result'] = array(
            "error_id" => "200",
            "error_message" => $string
        );
        return $this->responder;
    }

    public function error_400() {
        $this->responder['status'] = "error";
        $this->responder['result'] = array(
            "error_id" => "400",
            "error_message" => "Datos incompletos, o formato incorrecto"
        );
        return $this->responder;
    }

    public function error_401($string = "No autorizado") {
        $this->responder['status'] = "error";
        $this->responder['result'] = array(
            "error_id" => "401",
            "error_message" => $string
        );
        return $this->responder;
    }

    public function error_500($string = "Error interno del servidor") {
        $this->responder['status'] = "error";
        $this->responder['result'] = array(
            "error_id" => "500",
            "error_message" => $string
        );
        return $this->responder;
    }

    public function success($data = array()) {
        $this->responder['status'] = "ok";
        $this->responder['result'] = $data;
        return $this->responder;
    }
}
?>