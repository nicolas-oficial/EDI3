<?php
/* Smarty version 3.1.39, created on 2024-09-25 20:51:48
  from 'C:\xampp\htdocs\app1\vista\templates\agregar_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66f45bc4da5529_74173261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae1e7208f81206df8658ab247f83baeab4822de8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app1\\vista\\templates\\agregar_cliente.tpl',
      1 => 1727290099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f45bc4da5529_74173261 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Cliente</title>
    <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>
    <h1>Agregar Cliente</h1>

    <?php if ((isset($_smarty_tpl->tpl_vars['mensaje']->value))) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>
    <?php }?>

    <form action="../controlador/clienteControlador.php?action=agregar" method="post">
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <input type="submit" value="Agregar Cliente">
    </form>
    <form action="../public/gestorClientes.php" method="get">
        <input type="submit" value="Salir">
    </form>
</body>
</html>
<?php }
}
