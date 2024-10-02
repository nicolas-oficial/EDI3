<?php
/* Smarty version 3.1.39, created on 2024-09-23 03:12:33
  from 'C:\xampp\htdocs\app1\vista\templates\gestorClientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66f0c081c90c46_57357699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1f473ca7c47b11c6674a86f0e00269cdc5d0da1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app1\\vista\\templates\\gestorClientes.tpl',
      1 => 1727034139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f0c081c90c46_57357699 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Clientes</title>
    <link rel="stylesheet" href="../public/css/styleGestorCli.css">
</head>
<body>
    <div class="container">
        <h1>Gestión de Clientes</h1>
        <div class="button-container">
            
            <form action="../controlador/clienteControlador.php" method="get" style="display: inline;">
                <input type="hidden" name="action" value="agregar">
                <button type="submit" class="btn btn-agregar">Agregar Cliente</button>
            </form>

            <form action="../controlador/clienteControlador.php" method="get" style="display: inline;">
                <input type="hidden" name="action" value="modificar">
                <button type="submit" class="btn btn-modificar">Modificar Cliente</button>
            </form>

            <form action="../controlador/clienteControlador.php" method="get" style="display: inline;">
                <input type="hidden" name="action" value="eliminar">
                <button type="submit" class="btn btn-eliminar">Eliminar Cliente</button>
            </form>

            <form action="../controlador/clienteControlador.php" method="get" style="display: inline;">
                <input type="hidden" name="action" value="mostrar">
                <button type="submit" class="btn btn-lista">Mostrar Clientes</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php }
}
