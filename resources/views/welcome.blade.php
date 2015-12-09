<!DOCTYPE html>
<html>
    <head>
        <title>RAINLONELY</title>

        {{--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">--}}

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
                -webkit-user-select: none;
                -ms-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            h1{
                font-size: 30pt;
                letter-spacing: .12em;
            }
            p{
                font-weight: bolder;
                color: #999;
                letter-spacing: .12em;
            }
            ul{
                list-style: none;
                padding: 0;
            }
            li{
                color: #999;
                padding: 10px 0;
                letter-spacing: .12em;
            }
            li:hover{
                color: #555;
            }
            li:hover a{color: #555;}
            a{
                text-decoration: none;
                color: #999;
            }
            canvas{
                position: absolute;
                left: 0;
                top:0;
                z-index: -1;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>Rain Wu</h1>
                <p>Coder, Runner, Father</p>
                <ul>
                    <li>Blog(coming soon)</li>
                    <li><a target="_blank" href="https://twitter.com/rainwr">Twitter</a></li>
                    <li><a target="_blank" href="https://github.com/Rainlonely">Github</a></li>
                    <li><a target="_blank" href="https://plus.google.com/u/0/+RainWu">G+</a></li>
                    <li><a target="_blank" href="http://weibo.com/rainlonely">Weibo</a></li>
                </ul>
            </div>
        </div>
        <canvas></canvas>
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
    </body>
</html>
