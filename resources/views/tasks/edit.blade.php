@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
        <div class="form-group ol-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            {!! Form::label('status', '状態:') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            {!! Form::label('content', 'タスク:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
    
    {!! Form::close() !!}

@endsection