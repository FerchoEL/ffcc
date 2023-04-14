@extends('adminlte::page')

@section('title', 'FFCC')


@section('content_header')
    <h1>Lista de ubicaciones</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>Exito!</strong> {{session('info')}}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('menu.locations.create')}}" class="btn btn-primary">Registar ubicación</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th ></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($locations as $location)
                        <tr>
                            <td>{{$location->id}}</td>
                            <td>{{$location->name}}</td>
                            <td width='10px'><a class="btn btn-secondary" href={{route('menu.locations.edit',$location)}}>Editar</a></td>
                            <td width='10px'>
                                <form action="{{route('menu.locations.destroy',$location)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No hay ningún empresa registrado</td>
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