<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <form id="form1" action="" method="get">
      
        </form>
    </head>
     
     @section('content')
    @extends('layouts.app')
    <body>
       
        <h1>My tasks</h1>
        [<a href='/posts/create'>create</a>]
        <div class='posts'>
         @foreach ($posts as $post)
        <div class='post'>
            <h2 class='title'>
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
            
        </div>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            @endforeach
            @endsection
            </div>
     {{Auth::user()->name}}
    </body>
</html>