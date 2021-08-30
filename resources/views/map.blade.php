@extends('layouts.app')
 
 @section('content')
 <div class="container">
     <div class="col-xs-12">
    <div style="height:500px" id="map"></div>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script>
        const posts = @json($posts);
        console.log(posts);
    </script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('/js/map.js') }}"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google-map.apikey') }}&callback=initMap&libraries=places"></script>
    </div>
</div>
@endsection

  