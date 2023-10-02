<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!-- resources/views/create.blade.php -->

<form method="POST" action="{{ route('usuarios.store') }}">
    @csrf

    <label for="nombres">Nombres:</label>
    <input type="text" name="nombres" id="nombres" required>

    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" id="apellidos" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="telefono">Teléfono:</label>
    <input type="tel" name="telefono" id="telefono" required>

    <label for="direccion">Dirección:</label>
    <textarea name="direccion" id="direccion" required></textarea>

    <button type="submit">Guardar Usuario</button>
</form>
    
</body>
</html>
