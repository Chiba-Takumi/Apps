@extends('layout')

@section('content')
    <h1>在庫管理アプリ</h1>
    <p>To_do:商品の新規投稿</p>
    {{ Form::open(['route' => 'article.store']) }}
    {{ csrf_field() }}
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
@endsection
