<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class TableBookController extends Controller
{
    public function create()
    {
        $books = [
            [
                'book' => 'Demons',
                'author' => 'Fedor Mikhailovich Dostoevsky',
            ],
            [
                'book' => 'Crime and Punishment',
                'author' => 'Fedor Mikhailovich Dostoevsky',
            ],
            [
                'book' => 'Poor people',
                'author' => 'Fedor Mikhailovich Dostoevsky',
            ],
            [
                'book' => 'War and Peace',
                'author' => 'Lev Nikolayevich Tolstoy',
            ],
            [
                'book' => 'Harry Potter and the Philosophers Stone',
                'author' => 'Joanne Rowling',
            ],
            [
                'book' => 'Redemption',
                'author' => 'Ian Russell McEwan',
            ],
            [
                'book' => 'Fine work',
                'author' => 'Sarah Waters',
            ],
            [
                'book' => 'Dark Tower: Shooter',
                'author' => 'Stephen Edwin King',
            ],
            [
                'book' => 'Pet cemetery',
                'author' => 'Stephen Edwin King',
            ],
            [
                'book' => 'Fury',
                'author' => 'Stephen Edwin King',
            ],
            [
                'book' => 'Song of Ice and Fire',
                'author' => 'Martin, George Raymond Richard',
            ],
            [
                'book' => 'The Da Vinci Code',
                'author' => 'Daniel Gerhard Brown',
            ],
            [
                'book' => 'Inferno',
                'author' => 'Daniel Gerhard Brown',
            ],
            [
                'book' => 'Paris',
                'author' => 'Victor Marie Hugo',
            ],
            [
                'book' => 'Journey to the center of the earth',
                'author' => 'Jules Gabriel Verne',
            ],
            [
                'book' => 'Ice Sphinx',
                'author' => 'Jules Gabriel Verne',
            ],
            ];
        foreach ($books as $item) {
            Books::create($item);
}
      $books = Books::all();
        return view('api/v1/books/list', compact('books'));
    }
    public function show(Books $post)
    {
        return view ('api/v1/books/show', compact('post'));
//        $post = Books::findOrFail($id);
//        dd($post->book);
    }
}
