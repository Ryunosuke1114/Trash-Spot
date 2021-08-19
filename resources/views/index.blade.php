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
       [<a href='/posts/create'>create</a>]
       <div class='posts'>
           @foreach($posts as $post)
           <div class='post'>
               <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
               <p class='comment'>{{ $post->comment }}</p>
           </div>
           @endforeach
       </div>
       <div class='paginate'>
           {{ $posts->links() }}
       </div>
    </body>
</html>
