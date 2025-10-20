<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Biblioteca</title>
</head>
<body>
<h1>Lista de Libros</h1>
<a href="{{ route('books.create') }}">Agregar Nuevo Libro</a>
<ul>
@foreach ($books as $book)
<li>
{{ $book->title }} por {{ $book->author }} ({{ $book->year }}) 
<a href="{{ route('books.edit', $book->id) }}">Editar</a>
<form action="{{ route('books.destroy', $book->id) }}"
method="POST" style="display:inline;">
@csrf
@method('DELETE')
<button type="submit">Eliminar</button>
</form>
</li>
@endforeach
</ul>
</body>
</html