<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head> 
     @extends('layouts.app')　　　　　　　　　　　　　　　　　　
         @section('content')
    <body>
       <h4>title</h4>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>body</h3>
                <p>{{ $post->body }}</p>
                <h4>things to bring</h> <input type="checkbox"  >
                <p>{{ $post->things }}</p>
         
      <a href="">{{ $post->category->name }}</a>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
         <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
          @csrf
          @method('DELETE')
          <button type="submit">delete</button> 
          </form>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        @endsection
        </div>
    </body>
</html>