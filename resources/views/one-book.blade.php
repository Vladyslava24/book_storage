@extends('layouts.app')

@section('title')
    {{$data->name}}
@endsection

@section('content')
    <h1>{{$data->name}}</h1>
        <div class="alert alert-info">
            <p>{{ $data->author }}</p>
            <p><b>Цитата.</b> {{ $data->quotes}}</p>
            <p><b>Тэги.</b> {{ $data->tags }} </p>
            <p><small>{{ $data-> created_at }}</small></p>
            <a href="{{ route('book-update', $data->id) }}"><button class="btn btn-outline-dark">Редактировать</button></a>
            <a href="{{ route('book-delete', $data->id) }}"><button class="btn btn-outline-danger">Удалить</button></a>
        </div>
@endsection

