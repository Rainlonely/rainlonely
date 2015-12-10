@extends('layout')
@section('content')
<div class="container">
    <div class="wrap text-center">
        <h1>Rain Wu</h1>
        <p>Coder, Runner, Father</p>
        <ul>
            @if(count($contacts))
            @foreach( $contacts as $contact)
                <li><a target="_blank" href="{{$contact->url}}">{{$contact->label}}</a></li>
            @endforeach
            @endif

            <li>Blog(coming soon)</li>
            <li><a target="_blank" href="https://www.facebook.com/#/Rainlonely">Facebook</a></li>
            <li><a target="_blank" href="https://twitter.com/rainwr">Twitter</a></li>
            <li><a target="_blank" href="https://github.com/Rainlonely">Github</a></li>
            <li><a target="_blank" href="https://plus.google.com/u/0/+RainWu">G+</a></li>
            <li><a target="_blank" href="http://weibo.com/rainlonely">Weibo</a></li>
            <li><a target="_blank" href="https://cn.linkedin.com/in/rain-wu-56523824">Linkedin</a></li>
        </ul>
    </div>
</div>
<div class="fa fa-send-o btn-fa-send"></div>
<canvas></canvas>

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
<script>
    document.addEventListener('touchmove', function (e) {
        e.preventDefault()
    })
    var c = document.getElementsByTagName('canvas')[0],
            x = c.getContext('2d'),
            pr = window.devicePixelRatio || 1,
            w = window.innerWidth,
            h = window.innerHeight,
            f = 90,
            q,
            m = Math,
            r = 0,
            u = m.PI*2,
            v = m.cos,
            z = m.random
    c.width = w*pr
    c.height = h*pr
    x.scale(pr, pr)
    x.globalAlpha = 0.6
    function i(){
        x.clearRect(0,0,w,h)
        q=[{x:0,y:h*.7+f},{x:0,y:h*.7-f}]
        while(q[1].x<w+f) d(q[0], q[1])
    }
    function d(i,j){
        x.beginPath()
        x.moveTo(i.x, i.y)
        x.lineTo(j.x, j.y)
        var k = j.x + (z()*2-0.25)*f,
                n = y(j.y)
        x.lineTo(k, n)
        x.closePath()
        r-=u/-50
        x.fillStyle = '#'+(v(r)*127+128<<16 | v(r+u/3)*127+128<<8 | v(r+u/3*2)*127+128).toString(16)
        x.fill()
        q[0] = q[1]
        q[1] = {x:k,y:n}
    }
    function y(p){
        var t = p + (z()*2-1.1)*f
        return (t>h||t<0) ? y(p) : t
    }
    document.onclick = i
    document.ontouchstart = i
    i()
</script>

@stop