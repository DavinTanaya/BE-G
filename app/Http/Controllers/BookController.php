<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function getIndex(){
        return view('create');
    }

    public function createBook(Request $request){
        $request->validate([
            'title' => 'required|string|min:5',
            'author' => 'required|string|min:5',
            'image' => 'required',
        ]);

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('images'), $filename);

        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'image' => $filename,
        ]);

        return redirect('/');
    }

    public function getEdit($id){
        $book = Book::find($id);
        return view('edit', ['book' => $book]);
    }

    public function editBook(Request $request, $id){
        $book = Book::find($id);
        $request->validate([
            'title' => 'required|string|min:5',
            'author' => 'required|string|min:5',
            'image' => 'required',
        ]);

        unlink(public_path('images/'.$book->image));
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('images'), $filename);

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'image' => $filename,
        ]);

        return redirect('/');
    }

    public function deleteBook($id){
        $book = Book::find($id);
        unlink(public_path('images/'.$book->image));
        $book->delete();
        return redirect('/');
    }
}
