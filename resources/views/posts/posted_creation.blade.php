<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>saunadoublog</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        

    </head>
    
    <body>
         <x-app-layout>
            <x-slot name="header">
                新規投稿
            </x-slot>
            <h1>新規投稿</h1>
            <form action="/posts" method="POST">
                @csrf
                <div class="facility_name">
                    <h2>施設名</h2>
                    <input type="text" name="post[facility_name]" placeholder="施設名" value="{{ old('post.facility_name')}}"/>
                    <p class="facility_name_error">{{ $errors->first('post.facility_name') }}</p> 
                </div>
                <div class="good">
                    <h2>評価</h2>
                    
                </div>
                <div class="temperature">
                    <h2>サウナ・水風呂温度</h2>
                    <input type="text" name="post[temperature]" placeholder="温度" value="{{ old('post.temperature') }}"/>
                    <p class="temperature_error">{{ $errors->first('post.temperature') }}</p>
                </div>
                <div class="outside_air">
                    <h2>外気浴</h2>
                    <textarea name="post[outside_air]" placeholder="椅子の数、景色等">{{ old('post.outside_air') }}</textarea>
                    <p class="outside_air_error">{{ $errors->first('post.outside_air') }}</p>
                </div>
                <div class="meal">
                    <h2>食事</h2>
                    <textarea name="post[meal]" placeholder="何を食べたか、オススメ等">{{ old('post.meal') }}</textarea>
                    <p class="meal_error">{{ $errors->first('post.meal') }}</p>
                </div>
                <div class="other">
                    <h2>その他</h2>
                    <textarea name="post[other]" placeholder="良かったところ、改善点等" >{{ old('post.other') }}</textarea>
                    <p class="other_error">{{ $errors->first('post.other') }}</p>
                </div>
                <input type="submit" value="投稿"/>
                
            </form>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </x-app-layout>
    </body>
</html>
