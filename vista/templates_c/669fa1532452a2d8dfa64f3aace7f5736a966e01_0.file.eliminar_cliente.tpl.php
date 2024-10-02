<?php
/* Smarty version 3.1.39, created on 2024-09-25 20:51:56
  from 'C:\xampp\htdocs\app1\vista\templates\eliminar_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66f45bcc3d0743_81290315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '669fa1532452a2d8dfa64f3aace7f5736a966e01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app1\\vista\\templates\\eliminar_cliente.tpl',
      1 => 1727290114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f45bcc3d0743_81290315 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Cliente</title>
    <link rel="stylesheet" href="../public/css/styleDelCli.css">
</head>
<body>
    <h1>Eliminar Cliente</h1>
    <form action="clienteControlador.php?action=eliminar" method="post">
        <label for="dni">DNI del Cliente:</label>
        <input type="text" id="dni" name="dni" required>
        <input type="submit" value="Eliminar Cliente">
    </form>
    <form action="../public/gestorClientes.php" method="get">
        <input type="submit" value="Salir">
    </form>
</body>
</html>
<?php }
}
