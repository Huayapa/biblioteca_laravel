<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libro</title>

    <!-- Fuente moderna -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/create.css'])
</head>
<body>
    <div class="container">
        <h1>📚 Agregar Nuevo Libro</h1>

        <form action="{{ route('books.store') }}" method="POST" class="create-form">
            @csrf

            <label for="title">Título</label>
            <input type="text" id="title" name="title" required>

            <label for="author">Autor</label>
            <input type="text" id="author" name="author" required>

            <label for="description">Descripción</label>
            <textarea id="description" name="description" rows="4"></textarea>

            <label for="year">Año</label>
            <input type="number" id="year" name="year">

            <label for="genre">Género</label>
            <input type="text" id="genre" name="genre">

            <div class="buttons">
                <button type="submit" class="btn-save">💾 Guardar</button>
                <a href="{{ route('books.index') }}" class="btn-cancel">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
