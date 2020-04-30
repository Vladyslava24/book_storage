@extends('layouts.app')

@section('title')
    Редактировать
@endsection

@section('content')
    <h1>Редактировать книгу</h1>

    <form action="{{ route('book-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Название</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Введите название" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="author">Автор</label>
            <input type="text" name="author" value="{{$data->author}}" placeholder="Введите автора" id="author" class="form-control">
        </div>

        <div class="form-group">
            <label for="quotes">Цитата</label>
            <textarea name="quotes" placeholder="Введите цитату" id="quotes" class="form-control">
                {{$data->quotes}}
            </textarea>
        </div>

        <div class="form-group">
            <label for="tags">Тэги</label>
            <textarea name="tags" placeholder="Введите тэги" id="tags" class="form-control">
                {{$data->tags}}
            </textarea>
        </div>

        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection
