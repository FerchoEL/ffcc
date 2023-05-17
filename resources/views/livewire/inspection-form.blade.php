<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="row">
        <div class="form-group col-12 col-sm-4">
            <strong>Patios</strong>
            @error('yards')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
            @enderror
        
            {!! Form::select('yard_id', [0 => 'Selecciona una opción'] + $yards, null, ['class' => 'form-control','wire:model' => 'selectedYard']) !!}
        </div>
        <div class="form-group col-12 col-sm-4">
            <strong>Vía</strong>
            @error('tracks')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
            @enderror
        
            {!! Form::select('track_id', [0 => 'Selecciona una opción'] + $tracks, null, ['class' => 'form-control','wire:model' => 'selectedTrack']) !!}
        </div>
        <div class="form-group col-12 col-sm-4">
            <strong>Tramos</strong>
            @error('tracksections')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
            @enderror
        
            {!! Form::select('tracksection_id', [0 => 'Selecciona una opción'] +$tracksections, null, ['class' => 'form-control']) !!}
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
                    {!! Form::label('condicion', 'OK') !!}
                    {!! Form::radio('condicion', '0', true) !!}
                </div>
                <div class="form-group col-6">
                    {!! Form::label('condicion', 'Vo') !!}
                    {!! Form::radio('condicion', '0') !!}
                </div>                 
            </div>
                   
        </div>
        <div class="form-group col-12 col-sm-4">
            <strong>Prioridad</strong>
                    
            {!! Form::select('prioridad', [1 => 'Baja',2=> 'Medio',3 => 'Critica']  , null, ['class' => 'form-control']) !!}
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
            {!! Form::textarea('detalle', null, ['class' => 'form-control','rows' => 6]); !!}
        </div>
        
    </div>
    
    

</div>
