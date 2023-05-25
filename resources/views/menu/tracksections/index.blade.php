@extends('adminlte::page')

@section('title', 'FFCC')


@section('content_header')
    <h1>Tramos</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>Éxito!</strong> {{session('info')}}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('menu.tracksections.create')}}" class="btn btn-primary">Registrar Tramo</a>
        </div>
        <div class="card-body">
            <table style="text-align: center" class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Vía</th>
                    <th colspan="2"></th>
                </tr>
                </thead>
                <tbody>
                @forelse ($tracksections as $tracksection)
                    <tr>
                        <td>{{$tracksection->id}}</td>
                        <td>{{$tracksection->name}}</td>
                        <td>{{$tracksection->track->name}}</td>
                        <td width='10px'><a class="btn btn-secondary" href={{route('menu.tracksections.edit',$tracksection)}}>Editar</a></td>
                        <td width='10px'>
                            <form action="{{route('menu.tracksections.destroy',$tracksection)}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay ningún rol registrado</td>
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
