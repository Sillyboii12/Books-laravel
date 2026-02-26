<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function create()
    {
        return view('books.add');
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

        return "success";
    }
}
