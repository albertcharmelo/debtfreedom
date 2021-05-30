@extends('layout')
@section('css')

@endsection
@section('content')
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nueva entrada de Blog</h4>
                <p class="card-description"> Rellene los campos para un nuevo post en el blog </p>
                <form class="forms-sample" method="POST" action="{{ route('post.create') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Titulo</label>
                        <input type="text" class="form-control" name="titulo" required id="exampleInputName1"
                            placeholder="Titulo del Post">
                    </div>

                    <div class="form-group">
                        <label>Imagen de portada</label>
                        <input type="file" accept="image/*" required name="img" id="inputportada"
                            class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" name="imagennombre" id="imagename"
                                readonly value="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-info" type="button" id="filebutton">Subir
                                    Imagen</button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea class="form-control" required name="descripcion" id="editor" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Subir</button>
                    <button class="btn btn-light">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection
