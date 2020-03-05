@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ログイン結果</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ログインに成功しました！
                </div>
            </div>
        </div>
    </div>
    <h3></h3>
    <a href={{ route('article.list') }} class='btn btn-outline-primary'>一覧へ</a>
</div>

@endsection
