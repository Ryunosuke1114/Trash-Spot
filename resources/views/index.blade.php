@extends('layouts.app')
        
 @section('content')
 　<div class="container">
    <div class="col-xs-12">
       <h1 class="text-danger">Trash Spot</h1>
       [<a href='/posts/create'>create</a>]
       [<a href='/map'>Show Map</a>]
       <div class='posts'>
           @foreach($posts as $post)
           <div class="post py-3 pr-3">
               <h3 class="mb-2"><a class="text-danger" href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
               <p class='comment'>{{ $post->comment }}</p>
           </div>
           @endforeach
       </div>
       <div class='paginate'>
           {{ $posts->links() }}
       </div>
    </div>
  </div>
  @endsection
  
   
