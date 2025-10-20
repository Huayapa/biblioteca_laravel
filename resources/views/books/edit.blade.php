<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <title>Editar Libro</title>
</head>

<body>
        <h1>Editar Libro</h1>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="title">Título:</label>
                <input type="text" id="title" name="title" value="{{ $book->title 
}}" required><br>
                <label for="author">Autor:</label>
                <input type="text" id="author" name="author" value="{{ $book->author }}" required><br>
                <label for="description">Descripción:</label>
                <textarea id="description" name="description">{{ $book->description }}</textarea><br>
                <label for="year">Año:</label>
                <input type="number" id="year" name="year" value="{{ $book->year 
}}"><br>
                <label for="genre">Género:</label>
                <input type="text" id="genre" name="genre" value="{{ $book->genre 
}}"><br>
                <button type="submit">Actualizar</button>
        </form>
</body>

</html>