@extends('main')
@section('text')
    @foreach($num as $num_books)
        {{ $num_books->id }}
        {{ $num_books->author }}
        {{ $num_books->num_books }} <div>

        </div>
    @endforeach
@endsection
