<!DOCTYPE html>
<html>
<head>
    <title>Registrar EPPs de Sede</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/equipamientos.css') }}">
</head>
<body>
    <div class="container">

        <h1>Registrar EPPs de Sede</h1>
        <form action="{{ route('equipamientos.index') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre de la Sede:</label>
                <input type="text" name="sede_name" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción de la Sede:</label>
                <input type="text" name="sede_description" required>
            </div>
            <div class="form-group">
                <label for="epps">EPPs de la Sede:</label>
                <textarea name="epps" required></textarea>
            </div>
            <div class="form-group">
            <input type="submit" value="Registrar" class="botonAzul">
            </div>
        </form>
    </div>
</body>
</html>
