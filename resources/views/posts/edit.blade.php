<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>saunadoublog</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        

    </head>
    
    <body>
        <h1>編集画面</h1>
        <form action="/posts" method="POST">
            @csrf
            @method('PUT')
            <div class="facility_name">
                <h2>施設名</h2>
                <input type="text" name="post[facility_name]" placeholder="施設名" value="{{ 'post.facility_name'}}"/
                <p class="facility_name_error">{{ $errors->first('post.facility_name') }}</p> 
            </div>
            <div class="good">
                <h2>評価</h2>
                
            </div>
            <div class="temperature">
                <h2>サウナ・水風呂温度</h2>
                <input type="text" name="post[temperature]" placeholder="温度"/>
            </div>
            <div class="outside_air">
                <h2>外気浴</h2>
                <textarea name="post[outside_air]" placeholder="椅子の数、景色等"></textarea>
            </div>
            <div class="meal">
                <h2>食事</h2>
                <textarea name="post[meal]" placeholder="何を食べたか、オススメ等"></textarea>
            </div>
            <div class="other">
                <h2>その他</h2>
                <textarea name="post[other]" ></textarea>
            </div>
            <input type="submit" value="投稿"/>
            
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
