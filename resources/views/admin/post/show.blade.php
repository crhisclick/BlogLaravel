@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        Ver Entradas
                    </div>
                    <div class="car-body pl-2">
                        <p><strong> Nombre: </strong>{{$post->name}}</p>
                        <p><strong> Slug: </strong>{{$post->slug}}</p>
                        <p><strong> Contenido: </strong>{{$post->body}}</p>
                        <p><strong> Categoria: </strong>{{$post->category->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
