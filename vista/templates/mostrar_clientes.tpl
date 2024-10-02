
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

        {if $clientes|@count > 0}
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
                {foreach $clientes as $cliente}
                <tr>
                    <td>{$cliente.dni}</td>
                    <td>{$cliente.nombre}</td>
                    <td>{$cliente.apellido}</td>
                    <td>{if isset($cliente.tel)}{$cliente.tel}{else}N/A{/if}</td>
                    <td>{$cliente.email}</td>
                </tr>
                {/foreach}
            </tbody>
        </table>
        {else}
        <p class="mensaje-error">No hay clientes registrados.</p>
        {/if}

        <form action="../public/gestorClientes.php" method="get">
            <input type="submit" value="Salir" class="boton-volver" >   
        </form>
    </div>
</body>
</html>
