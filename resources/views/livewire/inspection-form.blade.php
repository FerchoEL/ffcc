<div x-data="{ selectedOption: '1' }" class="p-3 pt-5">

    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="row">
        <div class="form-group col-12 col-sm-4">
            <strong>Inspector</strong>
            @error('users')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
            @enderror

            {!! Form::text('name', $user->name, ['class' => 'form-control','readonly' => true]); !!}
        </div>
        <div class="form-group col-12 col-sm-4">
            <strong>Tipo de inspeccion</strong>

            <div class="row">
                <div class="form-group col-6">
                    {!! Form::radio('type_inspection', '1', true, ['wire:model'=>'selectedComponent','x-model' => 'selectedOption','id'=>'via']) !!}
                    {!! Form::label('type_inspection', 'Vía') !!}
                </div>
                <div class="form-group col-6">
                    {!! Form::radio('type_inspection', '2', false,['wire:model'=>'selectedComponent','x-model' => 'selectedOption','id'=>'herraje']) !!}
                    {!! Form::label('type_inspection', 'Herraje') !!}

                </div>
            </div>
        </div>
        <div class="form-group col-12 col-sm-4">
            <strong>Fecha</strong>
            @error('tracksections')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
            @enderror
            {{ Form::text('date', $currentDateTime, ['class' => 'form-control','readonly' => true]) }}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12 col-sm-4">
            <strong>Patios</strong>
            @error('yards')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
            @enderror

            {!! Form::select('yard_id', [0 => 'Selecciona una opción'] + $yards, null, ['id' => 'yard_id','class' => 'form-control','wire:model' => 'selectedYard']) !!}
        </div>
        <div class="form-group col-12 col-sm-4" x-show="selectedOption === '1'">
            <strong>Vía</strong>
            @error('tracks')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
            @enderror
            {!! Form::select('track_id', $tracks=['0' => 'Selecciona una opción'] + $tracks, '0', ['id' => 'track_id','class' => 'form-control','wire:model' => 'selectedTrack']) !!}
        </div>
        <div class="form-group col-12 col-sm-4" x-show="selectedOption === '1'">
            <strong>Tramos</strong>
            @error('tracksections')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
            @enderror

            {!! Form::select('tracksection_id', ['0' => 'Selecciona una opción'] +$tracksections, '0', ['id' => 'tracksection_id','class' => 'form-control']) !!}
        </div>
        <div class="form-group col-12 col-sm-4" x-show="selectedOption === '2'">
            <strong>Herraje</strong>
            @error('railroadswitches')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
            @enderror
            {!! Form::select('railroadswitch_id', [0 => 'Selecciona una opción'] + $railroadswitches, '0', ['id' => 'railroadswitch_id','class' => 'form-control']) !!}
        </div>
{{--        @dump($components,$selectedComponent)--}}
    </div>
    <div x-data="{ mostrarSeccion: '0' }"  >
        <div class="row">
            <div class="form-group col-12 col-sm-4">
                <strong>Condición</strong>
                <div class="row">
                    <div class="form-group col-6">
                        {!! Form::radio('condition', '0', true,['x-model' => 'mostrarSeccion','id'=>'conditionOK']) !!}

                        {!! Form::label('condition', 'OK') !!}
                    </div>

                    <div class="form-group col-6">
                        {!! Form::radio('condition', '1',false,['x-model' => 'mostrarSeccion','id'=>'conditionBO']) !!}
                        {!! Form::label('condition', 'BO') !!}
                    </div>
                </div>
            </div>
            <div class="form-group col-12 col-sm-4">
            </div>
            <div class="form-group col-12 col-sm-4">
            </div>
        </div>
        @dump($selectedComponent)
        <div class="row p-5" x-show="mostrarSeccion === '1'"   x-data="{ conjuntos: [{ defecto: '', priorities: '', comments: '' }] }" >
            <div class="col-12"  >
                <div class="row" name="primera-fila">
                    <div class="form-group col-12 col-sm-4">
                        <label class="etiqueta-escritorio" for="priorities">Defecto</label>
                    </div>
                    <div class="form-group col-12 col-sm-4">
                        <label class="etiqueta-escritorio" for="priorities">Prioridad</label>
                    </div>
                    <div class="form-group col-12 col-sm-4">
                        <label class="etiqueta-escritorio" for="priorities">Comentario</label>
                    </div>
                </div>
                <template  x-for="(conjunto, index) in conjuntos" :key="index" >
                    <div class="row" >
                        <!-- Agrega aquí los elementos select y el campo de comments -->
                        <div class="form-group col-12 col-sm-4" >
                            <label class="etiqueta-movil" x-text="'Defecto ' + (index + 1)" for="defecto"></label>
                            {!! Form::select('defecto[]', $components, null, ['id' => 'defectos_id','class' => 'form-control','x-model'=>'conjunto.defecto']) !!}

                        </div>
                        <div class="form-group col-12 col-sm-4">
                            <label class="etiqueta-movil" x-text="'Proridad ' + (index + 1)" for="priorities"></label>
                            {!! Form::select('priorities[]', [0 => 'Selecciona una opción',1 => 'Baja',2 => 'Media',3 => 'Alta'] , '0', ['id' => 'priority_id','class' => 'form-control','x-model'=>'conjunto.priorities']) !!}
                        </div>
                        <div class="form-group col-12 col-sm-4">
                            <label class="etiqueta-movil" for="comments">Comentario</label>
                            {{ Form::text('comments[]', null, ['class' => 'form-control','x-model'=>'conjunto.comments']) }}
                        </div>
                    </div>
                </template>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button @click="conjuntos.push({ defecto: '', priorities: '', comments: '' })" class="btn btn-success">Agregar defecto <i class='fas fa-plus-circle'></i></button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-12 col-sm-4">
            {!! Form::label('file', 'Evidencia gráfica (opcional)'); !!}
            {!! Form::file('file', ['class'=>'form-control-file','accept' => 'image/*']); !!}
        </div>
        <div class="form-group col-12 col-sm-8">
            <div class="image-wrapper">
                <img id="evidencia" src=" {!! asset('img/kp_tracks.jpg') !!}" >
            </div>
        </div>
    </div>



    {{--
        <div class="row">
        <div class="form-group col-12 col-sm-12">
            <strong>Detalle</strong>
            @error('yards')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
            @enderror
            {!! Form::textarea('comments', null, ['class' => 'form-control','rows' => 5]); !!}
        </div>
    </div>
        Estos campos se envian por separado
    <div class="row">
        <div x-data="{ conjuntos: [{ select1: '', select2: '', texto: '' }], contador: 1 }">
            <template x-for="(conjunto, index) in conjuntos" :key="index">
                <div>
                    <!-- Agrega aquí los elementos select y el campo de texto -->
                    <select :name="'selectA' + (index + 1)" x-model="conjunto.select1">
                        <option value="opcion1">Opción 1</option>
                    </select>
                    <select :name="'selectB' + (index + 1)" x-model="conjunto.select2">
                        <option value="opcion2">Opción 2</option>
                    </select>
                    <input type="text" :name="'textoC' + (index + 1)" x-model="conjunto.texto">
                </div>
            </template>

            <button @click="conjuntos.push({ select1: '', select2: '', texto: '' }); contador++">Agregar</button>
        </div>

    </div>
    --}}

</div>
