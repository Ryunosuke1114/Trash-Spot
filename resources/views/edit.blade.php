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
      <h1 class="title">Edit</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>Title</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='content__comment'>
                <h2>Comment</h2>
                <input type='text' name='post[comment]' value="{{ $post->comment }}">
            </div>
            <div class='content__lat'>
                <h2>latitude</h2>
                <input type='double' name='post[lat]' value="{{ $post->lat }}">
            </div>
            <div class='content__lng'>
                <h2>longitude</h2>
                <input type='double' name='post[lng]' value="{{ $post->lng }}">
            </div>
            <input type="submit" value="store"> 
        </form>
    </body>
</html>
