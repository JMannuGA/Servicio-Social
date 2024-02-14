<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar y Eliminar Campos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <h1 class="mt-5 mb-4">Administrador de Base de Datos</h1>
        
        <!-- Formulario para dar de alta -->
        <div class="card mb-4">
            <div class="card-header">Dar de Alta</div>
            <div class="card-body">
                <form action="alta.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
        
        <!-- Listado de elementos en la base de datos -->
        <div class="card">
            <div class="card-header">Elementos en la Base de Datos</div>
            <div class="card-body">
                <?php include 'ver.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>
