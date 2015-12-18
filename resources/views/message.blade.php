@section('styles')
    @parent
    <link rel="stylesheet" href="{{asset('dist/css/message.min.css')}}"/>
    @stop
@extends('layout')
@section('content')
    <div class="container form-container">
{!! Form::open(['url'=>'contact','id'=>'commentForm']) !!}
<div class="form-group">
    {!! Form::text('name',null ,['placeholder'=>'昵称','class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::textarea('comment', null,['placeholder'=>'随便写点啥吧','class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('发送',['class'=>'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}

@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors-> all() as $error)
            <li>{{$error}}</li>
            @endforeach
    </ul>
@endif
    </div>
@stop