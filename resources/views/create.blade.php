<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　
    @section('content')
    <body>
        <h1>TASK</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="どんなことするの">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
             <div class="things">
                <h2>things to bring</h2>
                <textarea name="post[things]" placeholder="何を持っていきますか？">{{ old('post.things') }}</textarea>
                <p class="things__error" style="color:red">{{ $errors->first('post.things') }}</p>
            </div>
           
             <h2>Category</h2>
             <select name="post[category_id]">
           @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
           @endforeach
     </select>
     
      <input type="submit" value="保存"/>
        </form>
       
        <div class="back">[<a href="/">back</a>]
        </div>
        
        <div class="category">
         
   
  </div>
    
     
    </body>
    @endsection
</html>