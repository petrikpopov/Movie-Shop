<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieCreateController extends Controller
{
    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'poster' => 'required|url',
            'price' => 'required|numeric|min:0',
        ]);

        Movie::create($validated);

        return redirect()->route('movies.create')->with('success', 'Фильм успешно добавлен!');
    }
}
