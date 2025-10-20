<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
        $books = Book::all(); // Obtiene todos los libros

        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create'); // Vista para crear un nuevo libro
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'nullable',
            'year' => 'nullable|numeric',
            'genre' => 'nullable',
        ]);
        Book::create($request->all()); // Crea el nuevo libro

        return redirect()->route('books.index');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id); // Encuentra el libro por ID

        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'nullable',
            'year' => 'nullable|numeric',
            'genre' => 'nullable',
        ]);
        $book = Book::findOrFail($id);
        $book->update($request->all()); // Actualiza el libro

        return redirect()->route('books.index');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete(); // Elimina el libro

        return redirect()->route('books.index');
    }
}
