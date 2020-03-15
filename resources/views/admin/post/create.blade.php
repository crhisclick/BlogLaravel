@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        Crear Entrada
                    </div>
                    <div class="car-body pl-2">
                        {!!Form::open(['route'=>'posts.store','files'=>true])!!}
                        @include('admin.post.partials.form')
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
