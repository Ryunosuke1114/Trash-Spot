 @extends('layouts.app')
 
　 @section('content')
　 <div class="container">
　   <div class="col-xs-12">
       <h1 class="text-danger">Trash Spot</h1>
       <div class='post'>
               <h2 class='title py-3 pr-3'>{{ $post->title }}</h2>
               <p class='comment mb-2'>{{ $post->comment }}</p>
               <p class='updated_at mb-2'>{{ $post->updated_at }}</p>
       </div>
        <div class="footer">
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
            <a href="/">back</a>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
            @csrf
            @method('DELETE')
        <button type="button" onclick="return deletePost(this);">delete</button> 
        </form>
        </div>
      </div>
   </div>  
         <script>
            function deletePost(e){
                'use strict';
                if(confirm('削除したら元に戻せません\n本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
        @endsection
    