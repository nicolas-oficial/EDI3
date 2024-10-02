<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Clientes</title>
    <link rel="stylesheet" href="../public/css/styleGestorCli.css">
</head>
<body>
    <div class="container">
        <h1>Gestión de Clientes</h1>
        <div class="button-container">
            
            <form action="../controlador/clienteControlador.php" method="get" style="display: inline;">
                <input type="hidden" name="action" value="agregar">
                <button type="submit" class="btn btn-agregar">Agregar Cliente</button>
            </form>

            <form action="../controlador/clienteControlador.php" method="get" style="display: inline;">
                <input type="hidden" name="action" value="modificar">
                <button type="submit" class="btn btn-modificar">Modificar Cliente</button>
            </form>

            <form action="../controlador/clienteControlador.php" method="get" style="display: inline;">
                <input type="hidden" name="action" value="eliminar">
                <button type="submit" class="btn btn-eliminar">Eliminar Cliente</button>
            </form>

            <form action="../controlador/clienteControlador.php" method="get" style="display: inline;">
                <input type="hidden" name="action" value="mostrar">
                <button type="submit" class="btn btn-lista">Mostrar Clientes</button>
            </form>
        </div>
    </div>
</body>
</html>
