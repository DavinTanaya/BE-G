<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex(){
        $books = Book::all();
        return view('home', ['books' => $books]);
    }
}