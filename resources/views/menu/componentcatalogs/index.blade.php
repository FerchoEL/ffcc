@extends('adminlte::page')

@section('title', 'FFCC')


@section('content_header')
    <h1>Catálogo de componentes</h1>
@stop
@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>Éxito!</strong> {{session('info')}}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('menu.componentcatalogs.create')}}" class="btn btn-primary">Registrar componente</a>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del componente</th>
                    <th>tipo del componente</th>
                    <th colspan="2"></th>
                </tr>
                </thead>
                <tbody>
                @forelse ($componentcatalogs as $componentcatalog)
                    <tr>
                        <td>{{$componentcatalog->id}}</td>
                        <td>{{$componentcatalog->name}}</td>
                        <td>{{$componentcatalog->type_component === '1' ? 'Vía' : 'Herraje'}}</td>
                        <td width='10px'><a class="btn btn-secondary" href={{route('menu.componentcatalogs.edit',$componentcatalog)}}>Editar</a></td>
                        <td width='10px'>
                            <form action="{{route('menu.componentcatalogs.destroy',$componentcatalog)}}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No hay ningun componente registrada</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <div class="mt-4">
                {{$componentcatalogs->links()}}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
