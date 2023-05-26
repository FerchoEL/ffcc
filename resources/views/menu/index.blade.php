@extends('adminlte::page')

@section('title', 'DashboardTITLE')

@section('content_header')
    <h1 class="font-bold" >Bienvenido</h1>
@stop

@section('content')
    {{--<x-guest-layout>
            <section class="bg-cover" style="background-image: url({{asset('img/fondoazul.jpg')}})">
                <div style="padding-top: 10rem" class=" mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="w-full md:w-3/4 lg:w-3/4">
                        <p class="text-6xl text-white font-extrabold font-serif ">Sistema de inspeccion de vías ferroviarias</p>
                        <p class="text-3xl text-white font-bold font-serif ">Más de 20 años de experiencia
                            en la industria del transporte </p>
                        <p class="text-white text-lg mt-2 mb-5">Nuestro equipo de profesionales en logística le ayudará para  generar soluciones
                            a las diversas necesidades operativas y administrativas de su negocio.
                        </p>
                    </div>
                    <div style="padding-top: 40px" class="logos d-flex justify-content-between">
                        <div>
                            <img style="" src="{{asset('img/tecnm.png')}}" width="400px" alt="">
                        </div>
                        <div>
                            <img style="" src="{{asset('img/ittap.png')}}" width="200px" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </x-guest-layout>--}}
    <div x-data="{showFields:false}">
        <label>
            <input type="checkbox" x-model="showFields"> Mostrar Campos
        </label>

        <div x-show="showFields">
            <input type="text" name="" id="" placeholder="Escriba el texto">
            <input type="text" name="" id="" placeholder="Escriba el texto">
            <input type="text" name="" id="" placeholder="Escriba el texto">
        </div>
    </div>
    <div x-data="{value1: 'hola'}">
        <p>Valor Actual: <span x-text="value1"></span></p>
{{--        <template x-if="value1 !== null">--}}
            <input type="text" x-model="value1" x-show="value1 !== 1 && value1 !== '1'">
{{--        </template>--}}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
