{{ Form::open(['method' => 'get']) }}
    {{ csrf_field() }}
    <div class='form-group'>
        {{ Form::label('keyword', '商品名を検索') }}
        {{ Form::text('keyword', null, ['class' => 'form-control']  )}}
    </div>
    <div class='form-group'>
        {{ Form::submit('検索', ['class' => 'btn btn-outline-primary']) }}
        <a href={{ route('article.list') }}>クリア</a>
    </div>
{{ Form::close() }}
