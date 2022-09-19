<?php

namespace App\Http\Controllers;

use App\Models\num_books;
use Illuminate\Http\Request;

class TableNumController extends Controller
{
    public function create()
    {
        $num = [
            [
                'author' => 'Fedor Mikhailovich Dostoevsky',
                'num_books' => 3,
            ],
            [
                'author' => 'Lev Nikolayevich Tolstoy',
                'num_books' => 1,
            ],
            [
                'author' => 'Joanne Rowling',
                'num_books' => 1,
            ],
            [
                'author' => 'Ian Russell McEwan',
                'num_books' => 1,
            ],
            [
                'author' => 'Sarah Waters',
                'num_books' => 1,
            ],
            [
                'author' => 'Stephen Edwin King',
                'num_books' => 3,
            ],
            [
                'author' => 'Martin, George Raymond Richard',
                'num_books' => 1,
            ],
            [
                'author' => 'Daniel Gerhard Brown',
                'num_books' => 2,
            ],
            [
                'author' => 'Victor Marie Hugo',
                'num_books' => 1,
            ],
            [
                'author' => 'Jules Gabriel Verne',
                'num_books' => 2,
            ],
            ];
        foreach ($num as $item) {
            num_books::create($item);
        }
        $num = num_books::all();
        return view('num', compact('num'));
}
}
