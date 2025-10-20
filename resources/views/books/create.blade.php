<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Agregar Libro</title>
</head>
<body>
<h1>Agregar Nuevo Libro</h1>
<form action="{{ route('books.store') }}" method="POST">
@csrf
<label for="title">Título:</label>
<input type="text" id="title" name="title" required><br>
<label for="author">Autor:</label>
<input type="text" id="author" name="author" required><br>
<label for="description">Descripción:</label>
<textarea id="description" name="description"></textarea><br>
<label for="year">Año:</label>
<input type="number" id="year" name="year"><br>
<label for="genre">Género:</label>
<input type="text" id="genre" name="genre"><br>
<button type="submit">Guardar</button>
</form>
</body>
</html>