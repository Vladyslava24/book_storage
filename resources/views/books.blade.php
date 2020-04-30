@extends('layouts.app')

@section('title')
    Все книги
@endsection

@section('content')
    <h1>Все книги</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->name }}</h3>
            <p>{{ $el->author }}</p>
            <p><small>{{ $el-> created_at }}</small></p>
            <a href="{{ route('book-data-one', $el->id) }}"><button class="btn btn-outline-dark">Детальнее</button></a>
        </div>
    @endforeach
@endsection

