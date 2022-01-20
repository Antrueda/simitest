
<div class="form-row">
    @isset($todoxxxx['modeloxx'])
        <div class="form-group col-md-2">
            {!! Form::label('consecut', 'PLANILLA N°:', ['class' => 'control-label']) !!}
            <div id="consecut" class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->consecut}}
            </div>
        </div>
    @endisset
    <div class="form-group col-md-4">
        {!! Form::label('sis_depen_id', 'LUGAR DE INTERVENCIÓN, SEDE O DEPENDENCIA:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_depen_id', $todoxxxx['sis_depens'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>
    <div class="forn-group col-md-4">
        {!! Form::label('sis_servicio_id', 'TIPO DE SERVICIO:', ['class' => 'control-labl']) !!}
        {!! Form::select('sis_servicio_id', $todoxxxx['sis_servicios'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('sis_servicio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_servicio_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('prm_actividad_id', 'Nombre del programa o actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_actividad_id', $todoxxxx['prm_acti'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if($errors->has('prm_actividad_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_actividad_id') }}
        </div>
        @endif
    </div>
    {{-- <div id="prm_programa_id_field" class="form-group col-md-6">
        {!! Form::label('prm_programa_id', 'Nombre del programa o actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_programa_id', [], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('prm_programa_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_programa_id') }}
        </div>
        @endif
    </div> --}}
    <div id="prm_convenio_id_field" class="form-group col-md-6">
        {!! Form::label('prm_convenio_id', 'CONVENIO /PROGRAMA:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_convenio_id', [], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('prm_convenio_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_convenio_id') }}
        </div>
        @endif
    </div>
    <div id="tipoacti_id_field" class="form-group col-md-6">
        {!! Form::label('tipoacti_id', 'Tipo de Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('tipoacti_id', $todoxxxx['tipoacti'], null, ['class' => 'form-control form-control-sm select2']) !!}
    </div>
    <div id="actividade_id_field" class="form-group col-md-6">
        {!! Form::label('actividade_id', 'Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('actividade_id', $todoxxxx['activida'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('actividade_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('actividade_id') }}
        </div>
        @endif
    </div>
    <div id="tipo_curso_box" class="form-group col-md-6">
        {!! Form::label('prm_tipo_curso', 'TIPO DE CURSO:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_tipo_curso', $todoxxxx['tpcursos'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('prm_tipo_curso'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_tipo_curso') }}
        </div>
        @endif
    </div>
    <div id="curso_box" class="form-group col-md-6">
        {!! Form::label('prm_curso', 'CURSO:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_curso', $todoxxxx['cursosxx'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('prm_curso'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_curso') }}
        </div>
        @endif
    </div>
    <div id="grado_id_field" class="form-group col-md-6">
        {!! Form::label('eda_grados_id', 'GRADO:', ['class' => 'control-label']) !!}
        {!! Form::select('eda_grados_id', $todoxxxx['gradosxx'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('eda_grados_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('eda_grados_id') }}
        </div>
        @endif
    </div>
    <div id="grupo_id_field" class="form-group col-md-6">
        {!! Form::label('prm_grupo_id', 'GRUPO:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_grupo_id', $todoxxxx['gruposxx'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('prm_grupo_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('prm_grupo_id') }}
        </div>
        @endif
    </div>
   
  
    <div class="form-group col-md-6">
        {!! Form::label('user_fun_id', 'Funcionario/Contratista que realiza el registro:', ['class' => 'control-label']) !!}
        {!! Form::select('user_fun_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('user_fun_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_fun_id') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('user_res_id', 'Responsable de UPI:', ['class' => 'control-label']) !!}
        {!! Form::select('user_res_id', $todoxxxx['responsa'], null, ['class' => 'form-control form-control-sm']) !!}
        @if($errors->has('user_res_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_res_id') }}
        </div>
        @endif
    </div>
    @isset($todoxxxx['modeloxx'])
        <div class="form-group col-md-6">
            {!! Form::label('created_at', 'FECHA Y HORA DE REGISTRO:', ['class' => 'control-label']) !!}
            <div id="fechdili" class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->created_at}}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('updated_at', 'FECHA Y HORA DE ACTUALIZACIÓN:', ['class' => 'control-label']) !!}
            <div id="fechdili" class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->updated_at}}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('user_crea_id', 'USUARIO QUE REGISTRÓ:', ['class' => 'control-label']) !!}
            <div id="user_crea_id" class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->userCrea->name}}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('user_edita_id', 'USUARIO QUE ACTUALIZÓ:', ['class' => 'control-label']) !!}
            <div id="user_edita_id" class="form-control form-control-sm">
                {{$todoxxxx['modeloxx']->userEdita->name}}
            </div>
        </div>
        @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
    @endisset
</div>
