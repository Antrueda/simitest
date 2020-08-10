<div class="form-group row">
    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('nombre', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_cvital_id', 'Ciclo Vital', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_cvital_id', $todoxxxx["i_prm_cvital_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_tdependen_id', 'Tipo de Dependencia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_tdependen_id', $todoxxxx["i_prm_tdependen_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_depen_id', 'Dependencia padre', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_depen_id', $todoxxxx["sis_depen_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('i_prm_sexo_id', 'Sexo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_sexo_id', $todoxxxx["i_prm_sexo_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_direccion', 'Dirección', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_direccion', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_departamento_id', 'Departamento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_departamento_id', $todoxxxx["sis_departamento_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_municipio_id', 'Municipio', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_municipio_id', $todoxxxx["sis_municipio_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_localidad_id', 'Localidad', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_localidad_id', $todoxxxx["sis_localidad_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_upz_id', 'Upz', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_upz_id', $todoxxxx["sis_upz_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_upzbarri_id', 'Barrio', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_upzbarri_id', $todoxxxx["sis_barrio_id"], null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_telefono', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_correo', 'Correo electrónico', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_correo', null, ['class' => 'form-control form-control-sm','style'=>'height:38px', $todoxxxx["readonly"]]) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_esta_id', 'Estado:', ['class' => 'control-label col-form-label-sm']) }}
        @if($todoxxxx['accionxx'] == 'Ver')
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], $todoxxxx['modeloxx']->sis_esta_id, ['class' => 'form-control-plaintext','id'=>'sis_esta_id']) }}
        @else
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control is-invalid' : 'form-control','id'=>'sis_esta_id']) }}
        @endif
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
    @include('layouts.tiempos')
    @include('layouts.registro')
</div>
