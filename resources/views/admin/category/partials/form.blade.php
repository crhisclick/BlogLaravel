<div class="form-group">
    {{ Form::label('name','Nombre de la etiqueta') }}
    {{ Form::text('name',null,['class'=>'form-control','id'=>'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug','Url Amigable') }}
    {{ Form::text('slug',null,['class'=>'form-control','id'=>'slug']) }}
</div>
<div class="form-group">
    {{ Form::label('body','Descripcion') }}
    {{ Form::textarea('body',null,['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar',['class'=>'btn btn-sm btn-primary']) }}
</div>
@section('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function(){
         $("#name").keyup(function(){
                var cadena = $(this).val();
                string_to_slug(cadena);
            });
        });


        function string_to_slug (str) {
            str = str.replace(/^\s+|\s+$/g, '');
            str = str.toLowerCase();

            //quita acentos, cambia la ñ por n, etc
            var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
            var to   = "aaaaeeeeiiiioooouuuunc------";

            for (var i=0, l=from.length ; i<l ; i++) {
                    str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str.replace(/[^a-z0-9 -]/g, '') // quita caracteres invalidos
                    .replace(/\s+/g, '-') // reemplaza los espacios por -
                    .replace(/-+/g, '-'); // quita las plecas

            return $("#slug").val(str);
            }
     </script>
@endsection
