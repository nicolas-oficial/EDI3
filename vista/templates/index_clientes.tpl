<!DOCTYPE html>
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
    
    {if $mostrarFormulario}
        {include file='agregar_cliente.tpl'}
    {/if}

    {if isset($mensaje)}
    <p>{$mensaje}</p>
    {/if}

    {if isset($clientes) && count($clientes) > 0}
        <h2>Lista de Clientes</h2>
        <ul>
            {foreach $clientes as $cliente}
                <li>{$cliente.nombre} {$cliente.apellido} - {$cliente.dni}</li>
            {/foreach}
        </ul>
    {/if}
</body>
</html>
