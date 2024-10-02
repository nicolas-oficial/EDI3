<!DOCTYPE html>
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
