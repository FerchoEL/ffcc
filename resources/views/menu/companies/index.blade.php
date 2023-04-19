@extends('adminlte::page')

@section('title', 'FFCC')


@section('content_header')
    <h1>Lista de empresas</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success" role="alert">
            <strong>Exito!</strong> {{session('info')}}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('menu.companies.create')}}" class="btn btn-primary">Registar empresa</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>RFC</th>
                        <th>Ubicación</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($companies as $company)
                        <tr>
                            <td>{{$company->id}}</td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->RFC}}</td>
                            <td>{{$company->location->name}}</td>
                            <td width='10px'><a class="btn btn-secondary" href={{route('menu.companies.edit',$company)}}>Editar</a></td>
                            <td width='10px'>
                                <form action="{{route('menu.companies.destroy',$company)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No hay ningúna empresa registrada</td>
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
