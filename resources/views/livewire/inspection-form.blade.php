<div x-data="{ selectedOption: '0' }" class="p-3 pt-5">
           
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
                    {!! Form::radio('type_inspection', '0', true, ['x-model' => 'selectedOption','id'=>'via']) !!}
                    {!! Form::label('type_inspection', 'Vía') !!}                    
                </div>
                <div class="form-group col-6">
                    {!! Form::radio('type_inspection', '1', false,['x-model' => 'selectedOption','id'=>'herraje']) !!}
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
        <div class="form-group col-12 col-sm-4" x-show="selectedOption === '0'">
            <strong>Vía</strong>
            @error('tracks')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
            @enderror            
            {!! Form::select('track_id', $tracks=['0' => 'Selecciona una opción'] + $tracks, '0', ['id' => 'track_id','class' => 'form-control','wire:model' => 'selectedTrack']) !!}
        </div>
        <div class="form-group col-12 col-sm-4" x-show="selectedOption === '0'">
            <strong>Tramos</strong>
            @error('tracksections')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
            @enderror
        
            {!! Form::select('tracksection_id', ['0' => 'Selecciona una opción'] +$tracksections, '0', ['id' => 'tracksection_id','class' => 'form-control']) !!}
        </div>
        <div class="form-group col-12 col-sm-4" x-show="selectedOption === '1'">
            <strong>Herraje</strong>
            @error('railroadswitches')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
            @enderror
            {!! Form::select('railroadswitch_id', [0 => 'Selecciona una opción'] + $railroadswitches, '0', ['id' => 'railroadswitch_id','class' => 'form-control']) !!}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12 col-sm-4">
            <strong>Condición</strong>
            @error('yards')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
            @enderror
            <div class="row">
                <div class="form-group col-6">
                    {!! Form::radio('condition', '0', true) !!}
                    {!! Form::label('condition', 'OK') !!}
                </div>
                <div class="form-group col-6">
                    {!! Form::radio('condition', '1') !!}
                    {!! Form::label('condition', 'BO') !!}
                </div>                 
            </div>
                   
        </div>
        <div class="form-group col-12 col-sm-4">
            <strong>Prioridad</strong>
                    
            {!! Form::select('priority', [1 => 'Baja',2=> 'Medio',3 => 'Critica']  , null, ['class' => 'form-control']) !!}
        </div>        
    </div>
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
</div>
