@extends('adminlte::page')

@section('title', 'FFCC')


@section('content_header')
    <h1>Herrajes</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>Éxito!</strong> {{session('info')}}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('menu.railroadswitches.create')}}" class="btn btn-primary">Registrar Herraje</a>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Patio</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($railroadSwitches as $railroadSwitch)
                        <tr>
                            <td>{{$railroadSwitch->id}}</td>
                            <td>{{$railroadSwitch->name}}</td>
                            <td>{{$railroadSwitch->type_switch}}</td>
                            <td>{{$railroadSwitch->yard->name}}</td>
                            <td width='10px'><a class="btn btn-secondary" href={{route('menu.railroadswitches.edit',$railroadSwitch)}}>Editar</a></td>
                            <td width='10px'>
                                <form action="{{route('menu.railroadswitches.destroy',$railroadSwitch)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No hay ningún herraje registrado</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-4">
                {{$railroadSwitches->links()}}
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
