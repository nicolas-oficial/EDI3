<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Cliente</title>
    <link rel="stylesheet" href="../public/css/styleModifCli.css"> 
</head>
<body>
    <h1>Modificar Cliente</h1>

    {if isset($mensaje)}
        <div class="mensaje">{$mensaje}</div>
    {/if}

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
