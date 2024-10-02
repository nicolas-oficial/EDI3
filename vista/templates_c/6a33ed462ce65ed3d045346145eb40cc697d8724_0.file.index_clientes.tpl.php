<?php
/* Smarty version 3.1.39, created on 2024-09-22 04:02:46
  from 'C:\xampp\htdocs\app1\vista\templates\index_clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66ef7ac6c8c099_22335969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a33ed462ce65ed3d045346145eb40cc697d8724' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app1\\vista\\templates\\index_clientes.tpl',
      1 => 1726970553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:agregar_cliente.tpl' => 1,
  ),
),false)) {
function content_66ef7ac6c8c099_22335969 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Clientes</title>
</head>
<body>
    <h1>Gestión de Clientes</h1>
    <a href="?action=mostrar_formulario">Agregar Cliente</a>
    <a href="?action=eliminar">Eliminar Cliente</a>
    <a href="?action=mostrar">Mostrar Clientes</a>
    
    <?php if ($_smarty_tpl->tpl_vars['mostrarFormulario']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:agregar_cliente.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['mensaje']->value))) {?>
    <p><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</p>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['clientes']->value)) && count($_smarty_tpl->tpl_vars['clientes']->value) > 0) {?>
        <h2>Lista de Clientes</h2>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'cliente');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['cliente']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['cliente']->value['apellido'];?>
 - <?php echo $_smarty_tpl->tpl_vars['cliente']->value['dni'];?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>
</body>
</html>
<?php }
}
