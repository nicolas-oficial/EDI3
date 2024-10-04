<?php
require_once '../configs/conexion.php'; 
require_once 'vehiculo.php'; 

class ServiceVehiculo {

    public function agregarVehiculo($patente, $marca, $modelo, $dni_cliente) {
        $conexion = ConexionBD::obtenerInstancia()->obtenerConexion();
    
        $checkQuery = "SELECT patente FROM vehiculos WHERE patente = '$patente'";
        $resultado = $conexion->query($checkQuery);
    
        if ($resultado->num_rows > 0) {
            //echo "Error: El vehículo con patente $patente ya existe." . PHP_EOL;
            return false;
        }
    
        $addVeh = "INSERT INTO vehiculos (patente, marca, modelo, dni_cliente) 
                   VALUES ('$patente', '$marca', '$modelo', '$dni_cliente')";
    
        if ($conexion->query($addVeh) === TRUE) {
            return true;
        } else {
            return false;
        }
    } 

    public function eliminarVehiculo($patente) {
        $conexion = ConexionBD::obtenerInstancia()->obtenerConexion();
        
        $checkQuery = "SELECT patente FROM vehiculos WHERE patente = '$patente'";
        $resultado = $conexion->query($checkQuery);
        
        if ($resultado->num_rows === 0) {
            echo "Error: El vehículo con patente $patente no existe." . PHP_EOL;
            return false;
        }
    
        $deleteVeh = "DELETE FROM vehiculos WHERE patente = '$patente'";
        
        if ($conexion->query($deleteVeh) === TRUE) {
            echo ('Vehículo eliminado.');
            return true;
        } else {
            echo "Error al eliminar el vehículo: " . $conexion->error;
            return false;
        }
    }

    public function mostrarVehiculos() {
        $conexion = ConexionBD::obtenerInstancia()->obtenerConexion();
        
        $query = "SELECT patente, marca, modelo, dni_cliente FROM vehiculos";
        $resultado = $conexion->query($query);
    
        if ($resultado->num_rows > 0) {
            $vehiculos = [];
            while ($fila = $resultado->fetch_assoc()) {
                $vehiculos[] = $fila;
            }
            return $vehiculos;
        } else {
            echo ("No se encontraron vehículos." . PHP_EOL);
            return [];
        }
    }

    public function modificarVehiculo($patente, $marca, $modelo, $dni_cliente) {
        $conexion = ConexionBD::obtenerInstancia()->obtenerConexion();
    
        $checkQuery = "SELECT patente FROM vehiculos WHERE patente = '$patente'";
        $resultado = $conexion->query($checkQuery);
    
        if ($resultado->num_rows > 0) {
            $updateVeh = "UPDATE vehiculos 
                          SET marca = '$marca', modelo = '$modelo', dni_cliente = '$dni_cliente'
                          WHERE patente = '$patente'";
    
            if ($conexion->query($updateVeh) === TRUE) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }    
}
