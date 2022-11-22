@extends('layouts.app')

@section('content')
    {!! Form::open(['method'=>'patch','route'=>['posts.update',$post->id]]) !!}
        {{ csrf_field() }}

    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
    {!! Form::submit('update Post',['class'=>'btn btn-info']) !!}

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE','route'=>['posts.destroy',$post->id]]) !!}
         {{ csrf_field() }}
    {!! Form::submit('delete post',['class'=>'btn btn-danger']) !!}

    {!! Form::close() !!}


@endsection

@yield('footer')
