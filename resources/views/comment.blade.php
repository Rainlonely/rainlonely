@extends('layout')
@section('content')
    <div class="text-center">
        <h4>留言板</h4>
        <strong>功能才做了一半,不要喷</strong>
    </div>
    <div class="container comment-box">
        <ul>
            @foreach($comments as $comment )
                <li>
                    <p>{{$comment->name}} said:{{$comment->comment}}</p>
                </li>
            @endforeach
        </ul>
    </div>
@stop