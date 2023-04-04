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
    {!! Form::label('type_switch', 'Tipo de cambio: ') !!}
    {!! Form::text('type_switch', null, ['class' => 'form-control'.($errors->has('name') ? ' is-invalid' : ''),'placeholder' => 'Escriba un nombre']) !!}

    @error('name')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <strong>Patio</strong>
    @error('yards')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
    @enderror

    {!! Form::select('yard_id', $yards, null, ['class' => 'form-control']) !!}
</div>
