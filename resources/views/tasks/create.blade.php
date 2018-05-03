@extends('layouts.app')

@section('content')

    <h1>新規タスク追加ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        <div class="from-group col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::label('status', '状態:') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="from-group col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::label('content', 'タスク:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>    
        
            {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
    {!! Form::close() !!}

@endsection