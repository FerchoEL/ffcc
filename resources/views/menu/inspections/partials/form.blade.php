{{-- <div class="form-group">
    {!! Form::label('name', 'Nombre: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control'.($errors->has('name') ? ' is-invalid' : ''),'placeholder' => 'Escriba un nombre']) !!}

    @error('name')
    <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <strong>Nombre usuario</strong>
    @error('users')
    <small class="text-danger">
        <strong>{{$message}}</strong>
    </small>
    @enderror

    {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <strong>Compania</strong>
    @error('companies')
    <small class="text-danger">
        <strong>{{$message}}</strong>
    </small>
    @enderror

    {!! Form::select('company_id', $companies, null, ['class' => 'form-control']) !!}
</div> --}}

{{-- <div class="form-group">
    <strong>Patios</strong>
    @error('yards')
    <small class="text-danger">
        <strong>{{$message}}</strong>
    </small>
    @enderror

    {!! Form::select('yard_id', [0 => 'Selecciona una opción'] + $yards, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <strong>Via</strong>
    @error('tracks')
    <small class="text-danger">
        <strong>{{$message}}</strong>
    </small>
    @enderror

    {!! Form::select('track_id', [0 => 'Selecciona una opción'] + $tracks, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <strong>Tramos</strong>
    @error('tracksections')
    <small class="text-danger">
        <strong>{{$message}}</strong>
    </small>
    @enderror

{!! Form::select('tracksection_id', [0 => 'Selecciona una opción'] +$tracksections, null, ['class' => 'form-control']) !!}
</div> --}}



{{--
    <div class="form-group">
    <strong>Ubicación</strong>
    @error('locations')
    <small class="text-danger">
        <strong>{{$message}}</strong>
    </small>
    @enderror

    {!! Form::select('location_id', $locations, null, ['class' => 'form-control']) !!}
</div>
    <div class="form-group">
    <strong>Tramo de via</strong>
    @error('tracksections')
    <small class="text-danger">
        <strong>{{$message}}</strong>
    </small>
    @enderror

    {!! Form::select('tracksection_id', $tracksections, null, ['class' => 'form-control']) !!}
</div>--}}
