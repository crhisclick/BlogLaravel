@extends('layouts.app')

@section('content')


<html>

<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>{{$post->name}}</h1>
        <div class="card mt-4 mb-4">
            <div class="card-header">
                Categoria
                <a href="{{ route('category',$post->category->slug)}}">{{$post->category->name}}</a>
            </div>
            <div class="card-body">
                @if ($post->file)
                    <img src="{{$post->file}}" alt="" srcset="" class="img-fluid">
                @endif
                {{$post->excerpt}}
                <hr>
                {!! $post->body !!}
                <hr>
                Etiquetas
                @foreach ($post->tags as $tag)
                    <a href="{{route('tag',$tag->slug)}}">{{$tag->name}}</a>
                @endforeach
             </div>
         </div>
    </div>
</div>


</html>
@endsection
