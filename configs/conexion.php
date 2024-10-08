<?php

class ConexionBD {
        
    private static $instancia = null;
    private $conexion;

    private function __construct() {
        $host = "localhost";
        $usuario = "root";
        $contrasena = "";
        $base_de_datos = "automotion";

        $this->conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public static function obtenerInstancia() {
        if (self::$instancia === null) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public function obtenerConexion() {
        return $this->conexion;
    }
}
