<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>saunadoublog</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!--<link rel="stylesheet" href="/css/style.css">-->
        

    </head>
    
    <body>
        <x-app-layout>
            <x-slot name="header">
                フォロー
            </x-slot>
            @foreach($followings as $following)
            <div>
                <!--<div>{{$following->id}}</div>-->
            </div>
            @endforeach
            <div class="account_name">
                ログインユーザー：{{ Auth::user()->name }}
            </div>
             <div class="footer">
                <a href="/">戻る</a>
            </div>
            <script src="/js/script.js"></script>
        </x-app-layout>
    </body>
</html>
