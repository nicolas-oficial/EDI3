<?php
require_once '../modelo/serviceCliente.php';
require_once '../libs/smarty/Smarty.class.php';

$smarty = new Smarty;
$smarty->setTemplateDir('../vista/templates');
$smarty->setCompileDir('../vista/templates_c');
$smarty->setCacheDir('../vista/cache');
$smarty->setConfigDir('../vista/config');

$serviceCliente = new ServiceCliente(); 

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'agregar':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
               
                $dni = $_POST['dni'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $telefono = $_POST['telefono'];
                $mail = $_POST['email'];

                $resultado = $serviceCliente->agregarCliente($dni, $nombre, $apellido, $telefono, $mail);

                if ($resultado) {
                    $smarty->assign('mensaje', 'Cliente agregado exitosamente.');
                } else {
                    $smarty->assign('mensaje', 'Error: El cliente ya existe.');
                }
            }

            $smarty->display('agregar_cliente.tpl');
            exit;
               
            case 'modificar':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $dni = $_POST['dni'];
                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $telefono = $_POST['telefono'];
                    $mail = $_POST['email'];
    
                    $resultado = $serviceCliente->modificarCliente($dni, $nombre, $apellido, $telefono, $mail);
    
                    if ($resultado) {
                        $smarty->assign('mensaje', 'Cliente modificado exitosamente.');
                    } else {
                        $smarty->assign('mensaje', 'Error al modificar el cliente. Asegúrate de que el DNI existe.');
                    }
                }
    
                $smarty->display('modificar_cliente.tpl');
                exit;


            case 'eliminar':
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dni'])) {
                    $dni = $_POST['dni'];

                    if ($serviceCliente->eliminarCliente($dni)) {
                        $mensaje = 'Cliente eliminado exitosamente.';
                    } else {
                        $mensaje = 'Error al eliminar el cliente.';
                    }

                    $smarty->assign('mensaje', $mensaje);
                }
                $smarty->display('eliminar_cliente.tpl'); 
                exit;

            case 'mostrar':
                $clientes = $serviceCliente->mostrarClientes();
                $smarty->assign('clientes', $clientes);
                $smarty->display('mostrar_clientes.tpl');
                exit;
        }
    }

    $smarty->display('gestorClientes.tpl');