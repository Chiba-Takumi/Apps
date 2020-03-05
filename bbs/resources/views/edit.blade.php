@extends('layout')

@section('content')
    <h1>在庫管理アプリ</h1>
    <p>{{ $message }}</p>

    <div class="starter-template">
    {{ Form::model($article, ['route' => ['article.update', $article->id]]) }}

    <div class='form-group'>
        {{ Form::label('category_id', 'カテゴリ:') }}
        {{ Form::select('category_id', $categories) }}
    </div>
    <div class='form-group'>
        {{ Form::label('content', '商品名:') }}
        {{ Form::text('content', null) }}
    </div>
    <div class='form-group'>
      {{ Form::label('money', '値段:') }}
      {{ Form::number('money', null) }}
    </div>
    <div class='form-group'>
      {{ Form::label('quantity', '残数:') }}
      {{ Form::number('quantity', null) }}
    </div>


    <div class='form-group'>
        {{ Form::submit('作成する', ['class' => 'btn btn-primary']) }}
        <a href={{ route('article.list') }}>一覧に戻る</a>
    </div>
    {{ Form::close() }}
    </div>
@endsection
