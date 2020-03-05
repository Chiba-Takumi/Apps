@extends('layout')

@section('content')
        <h1>在庫管理アプリ</h1>
        <p>{{ $message }}</p>

        <div class="starter-template">
        <table class='table table-striped table-hover'>
            <tr>
                <th>カテゴリ</th><th>商品名</th><th>値段</th><th>個数</th><th>入力者</th>
            </tr>

            <tr>
              <td>{{ $article->category->name }}</td>
              <td>{{ $article->content }}</td>
              <td>{{ $article->money }}</td>
              <td>{{ $article->quantity }}</td>
              <td>{{ $article->user->name }}</td>
            </tr>
        </table>

        <h3></h3>
        <p>
              <a href={{ route('article.list') }} class='btn btn-outline-primary'>一覧に戻る</a>
              @auth
                  <a href={{ route('article.edit', ['id' => $article->id]) }} class='btn btn-outline-primary'>編集</a>
                  <div>
                      {{ Form::open(['method' => 'delete', 'route' => ['article.delete', $article->id]]) }}
                          {{ Form::submit('削除', ['class' => 'btn btn-outline-secondary']) }}
                      {{ Form::close() }}
                  </div>
              @endauth

        </p>
      </div>


@endsection
