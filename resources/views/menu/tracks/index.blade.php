@extends('adminlte::page')

@section('title', 'FFCC')


@section('content_header')
    <h1>Lista de vías</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>Exito!</strong> {{session('info')}}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('menu.tracks.create')}}" class="btn btn-primary">Registrar Vía</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Patio</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tracks as $track)
                        <tr>
                            <td>{{$track->id}}</td>
                            <td>{{$track->name}}</td>
                            <td>{{$track->yard->name}}</td>
                            <td width='10px'><a class="btn btn-secondary" href={{route('menu.tracks.edit',$track)}}>Editar</a></td>
                            <td width='10px'>
                                <form action="{{route('menu.tracks.destroy',$track)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No hay ningúna vía registrada</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop