@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        Editar Etiqueta
                    </div>
                    <div class="car-body pl-2">

                        {!!Form::model($tag,['route'=>['tags.update',$tag->id], 'method'=>'PUT'])!!}
                        @include('admin.tag.partials.form')
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
