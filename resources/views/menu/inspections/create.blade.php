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
            
        
              <div x-data="{ showFields: false }">
                <label>
                  <input type="checkbox" x-model="showFields"> Mostrar campos
                </label>
            
                <div x-show="showFields">
                  <input type="text" placeholder="Nombre">
                  <input type="email" placeholder="Correo electrónico">
                  <input type="tel" placeholder="Teléfono">
                </div>
              </div>

            {!! Form::close() !!}

            <div x-data="{ count: 0 }">
              <button x-on:click="count++">Incrementar</button>
              <span x-text="count"></span>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
   {{-- @vite(['resources/js/app.js']) --}}
@stop
