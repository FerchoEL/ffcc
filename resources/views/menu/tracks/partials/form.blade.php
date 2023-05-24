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
    <strong>Patio</strong>
    @error('locations')
            <small class="text-danger">
                <strong>{{$message}}</strong>
            </small>
    @enderror

    {!! Form::select('yard_id', $yards, null, ['class' => 'form-control']) !!}
</div>
@if($route === 'create'){{--evalua si esta en la vista create--}}
    <div class="form-group">
        {!! Form::label('type_track', 'Tipo de vía: ') !!}
        {!! Form::select('type_track', [0=>'Selecciona el tipo de vía','Clásica'=>'Clásica','Elástica'=>'Elástica','Clásica/Elástica'=>'Clásica/Elástica'] ,null, ['class' => 'form-control']) !!}
        @error('type_track')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
    {!! Form::label('tracksleeper', 'Durmientes') !!}
    <div style="gap: 30px" class="d-flex">
        <div style="width: 50%" class="form-group">
            {!! Form::label('tracksleeper', 'Durmientes de vía') !!}
            {!! Form::select('type_tracksleeper_one', [0=>'Selecciona el tipo de durmiente','Madera'=>'Madera','Concreto'=>'Concreto'], null, ['class' => ' mb-2 form-control']) !!}
            {!! Form::text('lenght_tracksleeper_one',null, ['class' => 'form-control'.($errors->has('lenght_tracksleeper_one') ? ' is-invalid' : ''),'placeholder' => 'Escriba la longitud del durmiente']) !!}
            @error('type_tracksleeper_one')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
            @error('lenght_tracksleeper_one')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
        </div>
    </div>

    {!! Form::label('rails', 'Rieles') !!}
    <div style="gap: 30px" class="d-flex justify-content-around">
        <div style="width: 50%" class="form-group">
            {!! Form::label('rails', 'Riel 1') !!}
            {!! Form::select('weight_rails_one', [0=>'Selecciona el peso del riel','110'=>'110 lbs/g','115'=>'115 lbs/g'], null, ['class' => ' mb-2 form-control']) !!}
            {!! Form::text('lenght_rails_one', null, ['class' => 'form-control'.($errors->has('lenght_rails_one') ? ' is-invalid' : ''),'placeholder' => 'Escriba la longitud del riel']) !!}
            @error('weight_rails_one')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
            @error('lenght_rails_one')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
        </div>
        <div style="width: 50%" class="form-group">
            {!! Form::label('rails', 'Riel 2') !!}
            {!! Form::select('weight_rails_two', [0=>'Selecciona el peso del riel','110'=>'110 lbs/g','115'=>'115 lbs/g'], null, ['class' => ' mb-2 form-control']) !!}
            {!! Form::text('lenght_rails_two', null, ['class' => 'form-control'.($errors->has('lenght_rails_two') ? ' is-invalid' : ''),'placeholder' => 'Escriba la longitud del riel']) !!}
            @error('weight_rails_two')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
            @error('lenght_rails_two')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
        </div>
    </div>

    {!! Form::label('railroadswitch', 'Herrajes') !!}
    <div style="gap: 30px" class="d-flex justify-content-around">
        <div style="width: 50%" class="form-group">
            {!! Form::label('railroadswitch_interior', 'Herraje Interior') !!}
            {!! Form::select('railroadswitch_interior', [0=>'Selecciona una opción','8'=>'8','10'=>'10'], null, ['class' => ' mb-2 form-control']) !!}
            @error('railroadswitch_interior')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
        </div>
        <div style="width: 50%" class="form-group">
            {!! Form::label('railroadswitch_exterior', 'Herraje Exterior') !!}
            {!! Form::select('railroadswitch_exterior', [0=>'Selecciona una opción','8'=>'8','10'=>'10'], null, ['class' => ' mb-2 form-control']) !!}
            @error('railroadswitch_exterior')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
    </div>
@else {{--sino, está en la vista edit--}}
<div class="form-group">
    {!! Form::label('type_track', 'Tipo de vía: ') !!}
    {!! Form::select('type_track', [0=>'Selecciona el tipo de vía','Clásica'=>'Clásica','Elástica'=>'Elástica','Clásica/Elástica'=>'Clásica/Elástica'],$components->type_track , ['class' => 'form-control']) !!}
    @error('type_track')
    <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
    @enderror
</div>
{!! Form::label('tracksleeper', 'Durmientes') !!}
<div style="gap: 30px" class="d-flex">
    <div style="width: 50%" class="form-group">
        {!! Form::label('tracksleeper', 'Durmientes de vía') !!}
        {!! Form::select('type_tracksleeper_one', [0=>'Selecciona el tipo de durmiente','Madera'=>'Madera','Concreto'=>'Concreto'], $components->type_tracksleeper_one, ['class' => ' mb-2 form-control']) !!}
        {!! Form::text('lenght_tracksleeper_one',$components->lenght_tracksleeper_one, ['class' => 'form-control'.($errors->has('lenght_tracksleeper_one') ? ' is-invalid' : ''),'placeholder' => 'Escriba la longitud del durmiente']) !!}
        @error('type_tracksleeper_one')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        @error('lenght_tracksleeper_one')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
</div>

{!! Form::label('rails', 'Rieles') !!}
<div style="gap: 30px" class="d-flex justify-content-around">
    <div style="width: 50%" class="form-group">
        {!! Form::label('rails', 'Riel 1') !!}
        {!! Form::select('weight_rails_one', [0=>'Selecciona el peso del riel','110'=>'110 lbs/g','115'=>'115 lbs/g'], $components->weight_rails_one, ['class' => ' mb-2 form-control']) !!}
        {!! Form::text('lenght_rails_one', $components->lenght_rails_one, ['class' => 'form-control'.($errors->has('lenght_rails_one') ? ' is-invalid' : ''),'placeholder' => 'Escriba la longitud del riel']) !!}
        @error('weight_rails_one')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        @error('lenght_rails_one')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
    <div style="width: 50%" class="form-group">
        {!! Form::label('rails', 'Riel 2') !!}
        {!! Form::select('weight_rails_two', [0=>'Selecciona el peso del riel','110'=>'110 lbs/g','115'=>'115 lbs/g'], $components->weight_rails_two, ['class' => ' mb-2 form-control']) !!}
        {!! Form::text('lenght_rails_two', $components->lenght_rails_two, ['class' => 'form-control'.($errors->has('lenght_rails_two') ? ' is-invalid' : ''),'placeholder' => 'Escriba la longitud del riel']) !!}
        @error('weight_rails_two')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        @error('lenght_rails_two')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
</div>

{!! Form::label('railroadswitch', 'Herrajes') !!}
<div style="gap: 30px" class="d-flex justify-content-around">
    <div style="width: 50%" class="form-group">
        {!! Form::label('railroadswitch_interior', 'Herraje Interior') !!}
        {!! Form::select('railroadswitch_interior', [0=>'Selecciona una opción','8'=>'8','10'=>'10'], $components->railroadswitch_interior, ['class' => ' mb-2 form-control']) !!}
        @error('railroadswitch_interior')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
    <div style="width: 50%" class="form-group">
        {!! Form::label('railroadswitch_exterior', 'Herraje Exterior') !!}
        {!! Form::select('railroadswitch_exterior', [0=>'Selecciona una opción','8'=>'8','10'=>'10'], $components->railroadswitch_exterior, ['class' => ' mb-2 form-control']) !!}
        @error('railroadswitch_exterior')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
            </span>
        @enderror
    </div>
</div>
@endif


