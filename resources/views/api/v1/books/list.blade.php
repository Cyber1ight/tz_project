@extends('main')
@section('text')
    @foreach($books as $Books)
        {{ $Books->id }}
        {{ $Books->book }}
        <div>
            {{ $Books->author }}
        </div>
    @endforeach
@endsection
