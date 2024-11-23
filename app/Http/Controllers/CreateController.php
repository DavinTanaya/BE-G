<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function getIndex(){
        return view('create');
    }

    public function createBook(Request $request){
        $request->validate([
            'title' => 'required|string|min:5',
            'author' => 'required|string|min:5'
        ]);
        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
        ]);

        return redirect('/');
    }
}
