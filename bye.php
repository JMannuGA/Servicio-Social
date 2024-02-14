<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar y Eliminar Campos</title>
</head>
<body>
    <h1>Editar y Eliminar Campos</h1>

    <!-- Formulario para editar -->
    <h2>Editar Campo</h2>
    <form action="editar.php" method="POST">
        <label for="campo_id">ID del Campo a Editar:</label>
        <input type="text" id="campo_id" name="campo_id" required>
        <label for="nuevo_valor">Nuevo Valor:</label>
        <input type="text" id="nuevo_valor" name="nuevo_valor" required>
        <button type="submit">Editar Campo</button>
    </form>

    <!-- Formulario para eliminar -->
    <h2>Eliminar Campo</h2>
    <form action="eliminar.php" method="POST">
        <label for="campo_id_eliminar">ID del Campo a Eliminar:</label>
        <input type="text" id="campo_id_eliminar" name="campo_id_eliminar" required>
        <button type="submit">Eliminar Campo</button>
    </form>
</body>
</html>
