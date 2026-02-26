<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'string',
            'author' => 'string',
            'date' => 'string',
            'description' => 'string|max:255'
        ]);
        Book::create($validated);

        return redirect("books/index");
    }
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
}
