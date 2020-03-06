@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        Ver Etiqueta
                    </div>
                    <div class="car-body pl-2">
                        <p><strong> Nombre: </strong>{{$tag->name}}</p>
                        <p><strong> Slug: </strong>{{$tag->slug}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
