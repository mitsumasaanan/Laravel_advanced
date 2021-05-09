@extends('layouts.app')

@section('content')

    <div class="card mb-3">
        <div class="card-header">
          <h3>退会のご確認</h3>
        </div>
      <div class="card-body">
        <p class="card-text">退会するとアカウントや投稿が全て削除されます。</p>
        <p class="card-text">退会しますか？</p>
      </div>
    </div>
    
    <div class="btn-group">
        {!! Form::open(['route'=>['users.destroy',Auth::user()->id],'method'=>'delete']) !!}
            {!!Form::submit('退会する',['class'=>'btn btn-danger'])!!}
        {!!Form::close()!!}
        
        <div class="ml-3">
            <a href="/" class="btn btn-primary">キャンセルする</a>
        </div>
    </div>

@endsection('content')