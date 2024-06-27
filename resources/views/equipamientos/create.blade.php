<!DOCTYPE html>
<html>
<head>
    <title>Crear Equipo</title>
</head>
<body>
    <h1>Crear Equipo</h1>
    <form action="{{ route('equipamientos.store') }}" method="post">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="description">Descripción:</label>
        <input type="text" id="description" name="description" required>
        <br>
        <button type="submit">Crear Equipo</button>
    </form>
</body>
</html>