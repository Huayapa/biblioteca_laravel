<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>

    <!-- Fuente moderna -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/edit.css'])
</head>
<body>
    <div class="container">
        <h1>✏️ Editar Libro</h1>

        <form action="{{ route('books.update', $book->id) }}" method="POST" class="edit-form">
            @csrf
            @method('PUT')

            <label for="title">Título</label>
            <input type="text" id="title" name="title" value="{{ $book->title }}" required>

            <label for="author">Autor</label>
            <input type="text" id="author" name="author" value="{{ $book->author }}" required>

            <label for="description">Descripción</label>
            <textarea id="description" name="description" rows="4">{{ $book->description }}</textarea>

            <label for="year">Año</label>
            <input type="number" id="year" name="year" value="{{ $book->year }}">

            <label for="genre">Género</label>
            <input type="text" id="genre" name="genre" value="{{ $book->genre }}">

            <div class="buttons">
                <button type="submit" class="btn-save">💾 Actualizar</button>
                <a href="{{ route('books.index') }}" class="btn-cancel">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
