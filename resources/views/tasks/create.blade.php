@extends('layouts.app')

@section('content')

    <h1>新規タスク追加ページ</h1>
    
    <div class="from-group col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
            {!! Form::label('status', '状態:') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        
            {!! Form::label('content', 'タスク:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        
            {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
        {!! Form::close() !!}
    </div>

@endsection