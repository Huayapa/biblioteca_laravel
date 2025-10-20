<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>

    <!-- Fuente moderna -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/index.css'])
</head>
<body>
    <div class="container">
        <header>
            <h1>📚 Biblioteca Virtual</h1>
            <a href="{{ route('books.create') }}" class="btn-primary">+ Agregar Libro</a>
        </header>

        <ul class="book-list">
            @foreach ($books as $book)
            <li class="book-card">
                <div class="book-info">
                    <h2>{{ $book->title }}</h2>
                    <p class="author">por <strong>{{ $book->author }}</strong></p>
                    <p class="meta">📅 {{ $book->year }} — 🎭 {{ $book->genre }}</p>
                    <p class="desc">{{ $book->description }}</p>
                </div>
                <div class="book-actions">
                    <a href="{{ route('books.edit', $book->id) }}" class="btn-edit">Editar</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">Eliminar</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
