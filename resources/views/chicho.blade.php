<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>志高意</title>
    <link href="{{ asset('css/home_index.css') }}" rel="stylesheet" media="screen">

</head>
<body>



<canvas id="canvas"></canvas>

<div id="container">
    <div id="avatar">
        <img src="{{ asset('img/logo.png') }}" alt="chicho">
    </div>
    <div id="motto">
        There never a decline in full bloom of a blue lotus.
    </div>
    <div id="nav">
        <a href="{{ url('articles') }}">articles</a>
        <a href="#">Share</a>
        <a href="#">Me</a>
        <a href="#">Github</a>
        <a href="{{ url('tools') }}">Tools</a>
        <a href="{{ url('donate') }}">Donate</a>
    </div>
</div>


<script type="text/javascript" src="{{ asset('js/home_index.js') }}" charset="UTF-8"></script>
</body>
</html>
