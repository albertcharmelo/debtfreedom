@extends('layout')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('datos')
    @include('panel.partials.modal-delete')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <h3 class="mb-0 font-weight-semibold">{{ $posts->count() }}</h3>
                                    <h5 class="mb-0 font-weight-medium text-primary">Posts</h5>
                                </div>
                                <div class="wrapper my-auto ml-auto ml-lg-4">
                                    <canvas height="50" width="100" id="stats-line-graph-1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <h3 class="mb-0 font-weight-semibold">{{ $visitas }}</h3>
                                    <h5 class="mb-0 font-weight-medium text-primary">Visitas</h5>

                                </div>
                                <div class="wrapper my-auto ml-auto ml-lg-4">
                                    <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <h3 class="mb-0 font-weight-semibold">
                                        {{ $posts->where('estado', 'publish')->count() }}
                                    </h3>
                                    <h5 class="mb-0 font-weight-medium text-primary">Post Publicados</h5>

                                </div>
                                <div class="wrapper my-auto ml-auto ml-lg-4">
                                    <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Nueva entrada de Blog</h4>
                <p class="card-description"> Rellene los campos para un nuevo post en el blog
                </p>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Creación</th>
                            <th>Ult.Edición</th>
                            <th>Estado</th>
                            <th>Visitas</th>
                            <th>Acciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->titulo }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->updated_at }}</td>
                                <td>
                                    @if ($post->estado == 'pending')
                                        <label class="badge badge-danger">Pendiente</label>
                                    @else
                                        <label class="badge badge-success">Publicado</label>
                                    @endif

                                </td>
                                <td>
                                    {{ $post->visitas }} visitas
                                </td>
                                <td>
                                    <span>
                                        <button class="btn btn-danger" id="delete" data-toggle="modal"
                                            data-target="#deleteModal" data-id="{{ $post->id }}"><i
                                                class="fas fa-trash"></i></button>
                                    </span>
                                    <span>
                                        <a href="{{ route('panel.edit', $post->id) }}" class=" d-inline-block">
                                            <div class="btn btn-info"><i class="fas fa-edit"></i></div>
                                        </a>
                                    </span>

                                    <span>
                                        @if ($post->estado == 'pending')
                                            <span class=" d-inline-block">
                                                <form action="{{ route('post.toogle', $post->id) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <button class="btn btn-secondary" data-toggle="tooltip"
                                                        data-placement="top" title="Switch Publicado"><i
                                                            class="fas fa-toggle-off"></i>
                                                    </button>
                                                </form>
                                            </span>


                                        @else
                                            <span class="d-inline-block">
                                                <form action="{{ route('post.toogle', $post->id) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <button class="btn btn-success" data-toggle="tooltip"
                                                        data-placement="top" title="Switch Penditente"><i
                                                            class="fas fa-toggle-on"></i>
                                                    </button>
                                                </form>
                                            </span>
                                        @endif

                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        $(document).on('click', '#delete', function() {
            let id = $(this).attr('data-id');
            console.log('hola');
            $('#post_id').val(id);
        });

    </script>
@endsection
