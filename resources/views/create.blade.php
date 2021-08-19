<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trash Spot</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        
    </head>
    <body>
       <h1>Trash Spot</h1>
       <form action="/posts" method="POST">
            @csrf
       <div class="title">
                <h2>Spot</h2>
                <input type="text" name="post[title]" placeholder="スポット" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="comment">
                <h2>Comment</h2>
                <textarea name="post[comment]" placeholder="コメント">{{ old('post.comment') }}</textarea>
                <p class="comment__error" style="color:red">{{ $errors->first('post.comment') }}</p>
                <h2>lat</h2>
                <input type='number' step="0.000000001" name="post[lat]"/>
                <p class="lat__error" style="color:red">{{ $errors->first('post.lat') }}</p>
                <h2>lng</h2>
                <input type='number' step="0.000000001" name="post[lng]"/>
                <p class="lng__error" style="color:red">{{ $errors->first('post.lng') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
       
    </body>
</html>
