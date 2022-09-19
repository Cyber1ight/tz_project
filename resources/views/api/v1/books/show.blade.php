@extends('main')
@section('text')
    {{ $post->id }}
        {{ $post->book }}
        <div>
            {{ $post->author }}
        </div>
@endsection
