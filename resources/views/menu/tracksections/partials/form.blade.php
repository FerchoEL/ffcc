<div class="form-group">
    {!! Form::label('name', 'Nombre: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control'.($errors->has('name') ? ' is-invalid' : ''),'placeholder' => 'Escriba un nombre']) !!}

    @error('name')
    <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <strong>Vía</strong>
    @error('tracks')
    <small class="text-danger">
        <strong>{{$message}}</strong>
    </small>
    @enderror

    {!! Form::select('track_id', $tracks, null, ['class' => 'form-control']) !!}
{{--    @dd($tracks)--}}
</div>
