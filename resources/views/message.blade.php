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