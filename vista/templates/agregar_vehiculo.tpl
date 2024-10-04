<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Vehículo</title>
    <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>                  <!-- Cuerpo -->
    <h1>Agregar Vehículo</h1>

    {if isset($mensaje)}
        <p>{$mensaje}</p>
    {/if}

    <form action="../controlador/vehiculoControlador.php?action=agregar" method="post">
        <label for="patente">Patente:</label>
        <input type="text" id="patente" name="patente" required maxlength="7"><br>

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required><br>

        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required><br>

        <label for="dni_cliente">DNI del Cliente:</label>
        <input type="text" id="dni_cliente" name="dni_cliente" required><br>

        <input type="submit" value="Agregar Vehículo">
    </form>
    
    <form action="../public/gestorVehiculos.php" method="get">
        <input type="submit" value="Salir">
    </form>
</body>
</html>
