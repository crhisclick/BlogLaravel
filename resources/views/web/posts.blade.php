@extends('layouts.app')

@section('content')


<html>

<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>Lista de articulos</h1>
         @foreach ($posts as $post)
             <div class="card mt-4 mb-4">
                 <div class="card-header">
                        <h2>{{$post->name}}</h2> <br> <p>{{$post->category->name}}</p>
                 </div>
                 <div class="card-body">
                    @if ($post->file)
                        <img src="{{$post->file}}" alt="" srcset="" class="img-fluid">
                    @endif
                    {{$post->excerpt}}
                    <a href="{{ route('post', $post->slug) }}" class="pull-right">leer mas</a>
                 </div>
             </div>
         @endforeach
         {{$posts->render()}}
    </div>
</div>


</html>
@endsection
