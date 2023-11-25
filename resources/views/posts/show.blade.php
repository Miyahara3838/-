<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>saunadoublog</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        

    </head>
    
    <body>
        <h1>SAUNA番付</h1>
        <h2 class="facility_name">
            {{$post->facility_name}}
        </h2>
        <div class="body">
            <h3>評価</h3>
            <p>{{ $post->good }}</p>
            <h3>サウナ・水風呂の温度</h3>
            <p>{{ $post->temperature}}</p>
            <h3>外気浴</h3>
            <p>{{ $post->outside_air }}</p>
            <h3>食事</h3>
            <p>{{ $post->meal }}</p>
            <h3>その他</h3>
            <p>{{ $post->other }}</p>
        </div>
        <div class="edit"><a href="/posts/{{ $post->id }}/edit">編集</a> </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
    </body>
</html>
