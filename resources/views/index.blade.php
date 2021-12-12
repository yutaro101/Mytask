<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <form id="form1" action="" method="get">
        <input id="sbox1" id="s" name="s" type="text" placeholder="キーワードを入力" />
        <input id="sbtn1" type="submit" value="検索" />
        </form>
    </head>
     @section('content')
    @extends('layouts.app')
    <body>
        {{Auth::user()->name}}
        <h1>My tasks</h1>
        
        [<a href='/posts/create'>create</a>]
        <div class='posts'>
        

         @foreach ($posts as $post)
        <div class='post'>
            <h2 class='title'>
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p class='body'>{{ $post->body }}</p>
        </div>
            @endforeach
            @endsection

            
            
        </div>
    </body>
</html>