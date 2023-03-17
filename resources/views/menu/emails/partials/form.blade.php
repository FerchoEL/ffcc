<div class="form-group">
    {!! Form::label('list', 'Nombre: ') !!}
    {!! Form::textarea('list', null, ['rows' => 5, 'class' => ' form-control'.($errors->has('list') ? ' is-invalid' : ''),'placeholder' => 'Escriba un nombre']) !!}
    @error('list')
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
    
    {!! Form::select('yard_id', $yards, (isset($email) ? $email->yard->id : '')  , ['class' => 'form-control']) !!}
</div>
{{-- <div class="form-group">
    <strong>Empresa</strong>
    @error('locations')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
    @enderror   
    {!! Form::select('company_id', $companies, null, ['class' => 'form-control mt-2']) !!}
</div> --}}