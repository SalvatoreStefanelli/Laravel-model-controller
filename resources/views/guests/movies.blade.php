@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($movies as $movie)
            <div class="card">
                {{$movie['title']}}
            </div>
        @endforeach
    </div>
       

@endsection
   