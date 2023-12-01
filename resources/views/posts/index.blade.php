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
        <a href="/posts/posted_creation">新規作成</a>
        <div class="posts">
            @foreach($posts as $post)
                <div class="post_list">
                    <h2 class='facility_name'>
                        <a href="/posts/{{ $post->id }}">{{ $post->facility_name }}</a>
                    </h2>
                    <p class='good'>{{ $post->good }}</p>
                    <p class='temperature'>{{ $post->temperature}}</p>
                    <p class='outside_air'>{{ $post->outside_air }}</p>
                    <p class='meal'>{{ $post->meal }}</p>
                    <p class='other'>{{ $post->other }}</p>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                    </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id) {
            'use strict'
            
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    <!--<script src="{{ asset('/js/script.js') }}"></script>-->
    </body>
</html>
