<?php
require_once '../configs/conexion.php'; 
require_once 'cliente.php'; 

class ServiceCliente {
    
    public function agregarCliente($dni, $nombre, $apellido, $telefono, $mail) {
        $conexion = ConexionBD::obtenerInstancia()->obtenerConexion();
    
        $checkQuery = "SELECT dni FROM clientes WHERE dni = '$dni'";
        $resultado = $conexion->query($checkQuery);
    
        if ($resultado->num_rows > 0) {
            //echo "Error: El cliente con DNI $dni ya existe." . PHP_EOL;
            return false;
        }
    
        $addCli = "INSERT INTO clientes (dni, nombre, apellido, tel, email) 
                   VALUES ('$dni', '$nombre', '$apellido', '$telefono', '$mail')";
    
        if ($conexion->query($addCli) === TRUE) {
            return true;
        } else {
            return false;
        }
    } 
    

    public function eliminarCliente($dni) {
        $conexion = ConexionBD::obtenerInstancia()->obtenerConexion();
        
        $checkQuery = "SELECT dni FROM clientes WHERE dni = '$dni'";
        $resultado = $conexion->query($checkQuery);
        
        if ($resultado->num_rows === 0) {
            echo "Error: El cliente con DNI $dni no existe." . PHP_EOL;
            return false;
        }
    
        $deleteCli = "DELETE FROM clientes WHERE dni = '$dni'";
        
        if ($conexion->query($deleteCli) === TRUE) {
            echo ('Cliente eliminado.');
            return true;
        } else {
            echo "Error al eliminar el cliente: " . $conexion->error;
            return false;
        }
    }

    public function mostrarClientes() {
        $conexion = ConexionBD::obtenerInstancia()->obtenerConexion();
        
        $query = "SELECT dni, nombre, apellido, tel, email FROM clientes";
        $resultado = $conexion->query($query);
    
        if ($resultado->num_rows > 0) {
            $clientes = [];
            while ($fila = $resultado->fetch_assoc()) {
                $clientes[] = $fila;
            }
            return $clientes;
        } else {
            echo ("No se encontraron clientes." . PHP_EOL);
            return [];
        }
    }
    
        
    public function modificarCliente($dni, $nombre, $apellido, $telefono, $mail) {
        $conexion = ConexionBD::obtenerInstancia()->obtenerConexion();
    
        $checkQuery = "SELECT dni FROM clientes WHERE dni = '$dni'";
        $resultado = $conexion->query($checkQuery);
    
        if ($resultado->num_rows > 0) {

            $updateCli = "UPDATE clientes 
                          SET nombre = '$nombre', apellido = '$apellido', tel = '$telefono', email = '$mail'
                          WHERE dni = '$dni'";
    
            if ($conexion->query($updateCli) === TRUE) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }    
}
