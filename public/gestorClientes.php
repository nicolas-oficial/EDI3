<?php
require_once '../libs/smarty/Smarty.class.php';
require_once '../modelo/serviceCliente.php';

// Configuración de Smarty
$smarty = new Smarty;
$smarty->setTemplateDir('../vista/templates');
$smarty->setCompileDir('../vista/templates_c');
$smarty->setCacheDir('../vista/cache');
$smarty->setConfigDir('../vista/config');

// Asignar título
$smarty->assign('titulo', 'Gestión de Clientes');

// Mostrar la vista
$smarty->display('gestorClientes.tpl');
