<?php
/* Smarty version 3.1.39, created on 2024-09-25 20:51:53
  from 'C:\xampp\htdocs\app1\vista\templates\modificar_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66f45bc9c0ca97_29182998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '777e4a6b31d124f818011806bc38d66e8efbc5fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app1\\vista\\templates\\modificar_cliente.tpl',
      1 => 1727290130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f45bc9c0ca97_29182998 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Cliente</title>
    <link rel="stylesheet" href="../public/css/styleModifCli.css"> 
</head>
<body>
    <h1>Modificar Cliente</h1>

    <?php if ((isset($_smarty_tpl->tpl_vars['mensaje']->value))) {?>
        <div class="mensaje"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
    <?php }?>

    <form action="../controlador/clienteControlador.php?action=modificar" method="post">
        <label for="dni">DNI del Cliente:</label>
        <input type="text" id="dni" name="dni" required><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <input type="submit" value="Modificar Cliente">
    </form>

    <form action="../public/gestorClientes.php" method="get">
        <input type="submit" value="Salir">
    </form>
</body>
</html>
<?php }
}
