 @extends('layouts.app')
        
　 @section('content')
　 <div class="container">
　   <div class="col-xs-12">
       <h1 class="text-danger">Trash Spot</h1>
       <form action="/posts" method="POST">
            @csrf
       <div class="title">
                <h2>Spot</h2>
                <input type="text" name="post[title]" placeholder="スポット" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="comment">
                <h2 class="">Comment</h2>
                <textarea name="post[comment]" placeholder="コメント">{{ old('post.comment') }}</textarea>
                <p class="comment__error" style="color:red">{{ $errors->first('post.comment') }}</p>
                <h2>lat</h2>
                <input id="lat" type='number' step="0.000000001" name="post[lat]"/>
                <p class="lat__error" style="color:red">{{ $errors->first('post.lat') }}</p>
                <h2>lng</h2>
                <input id="lng" type='number' step="0.000000001" name="post[lng]"/>
                <p class="lng__error" style="color:red">{{ $errors->first('post.lng') }}</p>
            </div>
            <input type="submit" value="store" onclick="storeByLocation()"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
     </div>
   </div>
        
        @endsection
    
