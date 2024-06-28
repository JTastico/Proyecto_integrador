<!DOCTYPE html>
<html>
<head>
    <title>Registrar EPPs de Sede</title>
</head>
<body>
    <link rel="stylesheet" href="css/equipamientos.css">
    <h1>Registrar EPPs de Sede</h1>
    <form action="{{ route('equipamientos.index') }}" method="POST">
        @csrf
        <label for="name">Nombre de la Sede:</label>
        <input type="text" name="sede_name" required>
        <br>
        <label for="description">Descripción de la Sede:</label>
        <input type="text" name="sede_description" required>
        <br>
        <label for="epps">EPPs de la Sede:</label>
        <textarea name="epps" required></textarea>
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>