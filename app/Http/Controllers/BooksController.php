<?php

namespace App\Http\Controllers;

use App\Books;

class BooksController extends Controller
{
    public function show(){
        $books=Books::paginate(12);
        return View('client.pages.books', ["books"=>$books]);
    }

    public function showBook($id){
        $book = Books::findOrFail($id);
        if($book){
            return View("client.pages.book", ["book"=>$book]);
        }
    }
}
