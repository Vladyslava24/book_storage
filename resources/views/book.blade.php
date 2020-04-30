@extends('layouts.app')

@section('title')
    Книга
@endsection

@section('content')
    <h1>Книга</h1>

    <form action="{{ route('book-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Название</label>
            <input type="text" name="name" placeholder="Введите название" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="author">Автор</label>
            <input type="text" name="author" placeholder="Введите автора" id="author" class="form-control">
        </div>

        <div class="form-group">
            <label for="quotes">Цитата</label>
            <textarea name="quotes" placeholder="Введите цитату" id="quotes" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="tags">Тэги</label>
            <textarea name="tags" placeholder="Введите тэги" id="tags" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Подтвердить</button>
    </form>
@endsection
