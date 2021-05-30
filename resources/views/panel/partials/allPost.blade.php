@extends('layout')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('datos')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
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
                        <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
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
                        <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <h3 class="mb-0 font-weight-semibold">7,688</h3>
                                    <h5 class="mb-0 font-weight-medium text-primary">Conversation</h5>
                                    <p class="mb-0 text-muted">+57.62(+0.76%)</p>
                                </div>
                                <div class="wrapper my-auto ml-auto ml-lg-4">
                                    <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                            <div class="d-flex">
                                <div class="wrapper">
                                    <h3 class="mb-0 font-weight-semibold">1,553</h3>
                                    <h5 class="mb-0 font-weight-medium text-primary">Downloads</h5>
                                    <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                                </div>
                                <div class="wrapper my-auto ml-auto ml-lg-4">
                                    <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
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
                                        <div class="btn btn-danger"><i class="fas fa-trash"></i></div>
                                    </span>
                                    <span>
                                        <div class="btn btn-info"><i class="fas fa-edit"></i></div>
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

    </script>
@endsection
