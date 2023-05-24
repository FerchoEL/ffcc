@extends('adminlte::page')

@section('title', 'FFCC')

@section('content_header')
    <h1>Nueva inspección</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'menu.inspections.store']) !!}
            {{-- @include('menu.inspections.partials.form') --}}
            @livewire('inspection-form')
            <div class="d-flex justify-content-around">
                {!! Form::submit('Registrar inspección', ['class' => 'btn btn-primary mt-2']) !!}
                {!! Form::submit('Subir archivo', ['class' => 'btn btn-primary mt-2']) !!}
                {!! Form::submit('Cargar imagen', ['class' => 'btn btn-primary mt-2']) !!}
            </div>


            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
