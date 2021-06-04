@extends('layout')
@section('css')

@endsection
@section('content')
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Actualizar entrada de Blog</h4>
                <p class="card-description"> Rellene los campos para actualizar el post <span class=" font-weight-bold">
                        {{ $post->titulo }}</span> en el blog </p>
                <form class="forms-sample" method="POST" action="{{ route('post.edit', $post->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Titulo</label>
                        <input type="text" class="form-control" value="{{ $post->titulo }}" name="titulo" required
                            id="exampleInputName1" placeholder="Titulo del Post">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea class="form-control" name="descripcion" id="editor"
                            rows="4">{!! $post->descripcion !!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <button class="btn btn-light">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        //agregar pugling al textarea
        ClassicEditor.create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });

        document.getElementById('filebutton').addEventListener('click', function() {
            //hacer click en el input file oculto
            $('#inputportada').click();


        });
        document.getElementById('inputportada').addEventListener('change', function() {
            //obtener nombre del documento
            let fullPath = document.getElementById('inputportada').value;
            var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath
                .lastIndexOf(
                    '/'));
            var filename = fullPath.substring(startIndex);
            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1);
            }
            //agregar nombre al input text
            document.getElementById('imagename').value = filename


        })

    </script>

@endsection
