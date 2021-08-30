 @extends('layouts.app')
        
　 @section('content')
　 <div class="container">
      <h1 class="title">Edit</h1>
    <div class="content">
        <div class="col-xs-12">
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
            <input type="submit" value="store" onclick="showMarkers()"> 
        </form>
        </div>
    </div>
    @endsection
    
