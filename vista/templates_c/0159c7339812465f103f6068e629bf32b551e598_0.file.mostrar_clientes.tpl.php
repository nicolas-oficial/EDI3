<?php
/* Smarty version 3.1.39, created on 2024-09-25 20:52:45
  from 'C:\xampp\htdocs\app1\vista\templates\mostrar_clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66f45bfd5ff2a8_30205647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0159c7339812465f103f6068e629bf32b551e598' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app1\\vista\\templates\\mostrar_clientes.tpl',
      1 => 1727290358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f45bfd5ff2a8_30205647 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="../public/css/styleMostrar.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Clientes</h1>

        <?php if (count($_smarty_tpl->tpl_vars['clientes']->value) > 0) {?>
        <table>
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'cliente');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['dni'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['apellido'];?>
</td>
                    <td><?php if ((isset($_smarty_tpl->tpl_vars['cliente']->value['tel']))) {
echo $_smarty_tpl->tpl_vars['cliente']->value['tel'];
} else { ?>N/A<?php }?></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['cliente']->value['email'];?>
</td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        <?php } else { ?>
        <p class="mensaje-error">No hay clientes registrados.</p>
        <?php }?>

        <form action="../public/gestorClientes.php" method="get">
            <input type="submit" value="Salir" class="boton-volver" >   
        </form>
    </div>
</body>
</html>
<?php }
}
