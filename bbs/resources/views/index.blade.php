@extends('layout')

@section('content')
    <div class="starter-template">
    <h1>在庫管理アプリ</h1>
    @auth
    <h5>在庫管理アプリへようこそ{{ Auth::user()->name }}さん</h5>
    @include('search')
    <p>カテゴリ、値段などをクリックするとソートされて順番が切り替わります</p>
    </div>
    <h4></h4>
    <div class="starter-template">
    <div id="users">
    <table class='table table-striped table-hover'>
      <thead>
      <tr>
          <th class="sort" data-sort="name">カテゴリ</th>
          <th class="nise">商品名</th>
          <th class="sort" data-sort="money">値段</th>
          <th class="sort" data-sort="ko">個数</th>
          <th class="sort" data-sort="total">合計金額</th>
          <th class="sort" data-sort="player">入力者</th>
      </tr>
      </thead>
      <tbody class="list">
        @foreach ($articles as $article)
        <tr>
          <td class="name">{{ $article->category->name }}</td>
          <td>
            <a href='{{ route("article.show", ["id" => $article->id]) }}'>
              {{ $article->content }}
            </a>
          </td>
          <td class="money">{{ $article->money }}円</td>
          <td class="ko">{{ $article->quantity }}</td>
          <td class="total"><?php $a = $article->money;
                    $b = $article->quantity;
                    $c = $a*$b;
                    echo $c;?>円</td>
          <td class="player">{{ $article->user->name }}</td>
        </tr>
        @endforeach
      </tbody>
      </table>
      </div>
        <div>
          <a href={{ route('article.new')}} class='btn btn-outline-primary'>新規投稿</a>

          <a href={{ route('article.list') }} class='btn btn-outline-primary'>ページの先頭へ</a>
        </div>
        @endauth
    <h4></h4>
    <a class="btn btn-primary" href="http://192.168.0.106:8000/">ポートフォリオページに戻る</a>
  </div>
@endsection
