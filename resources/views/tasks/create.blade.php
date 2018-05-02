@extends('layouts.app')

@section('content')

    <h1>新規タスク追加ページ</h1>
    
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('status', '状態:') !!}
        {!! Form::text('status') !!}
    
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('投稿') !!}
    
    {!! Form::close() !!}

@endsection