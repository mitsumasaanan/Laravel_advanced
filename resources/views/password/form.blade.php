@extends('layouts.app')

@section('content')

    <div class="center jumbotron bg-warning">
        <div class="text-center text-white">
            <h1>YouTubeまとめ × SNS</h1>
        </div>
    </div>    
    <div class="text-center">
        <h3 class="login_title text-left d-inline-block mt-5">パスワードの変更</h3>
    </div>
    
    @if(session('warning'))
        <div class="alert alert-danger">
            {{ session('warning') }}
        </div>
    @endif

        
    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::open(['route'=>'password.change','method'=>'put']) !!}
                <div class="form-group">
                    {!! Form::label('current_password','現在のパスワード') !!}
                    {!! Form::password('current_password',['class'=>'form-control']) !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('new_password','新しいパスワード') !!}
                    {!! Form::password('new_password',['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('new_password_confirmation','パスワードの確認') !!}
                    {!! Form::password('new_password_confirmation',['class'=>'form-control']) !!}
                </div>
                
                {!! Form::submit('パスワードを変更する',['class'=>'btn btn btn-primary mt-2']) !!}
            {!! Form::close() !!}
            
        </div>
    </div>
    
@endsection