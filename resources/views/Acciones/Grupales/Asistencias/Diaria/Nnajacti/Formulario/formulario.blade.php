<div class="form-row">
   @include('Acciones.Grupales.Asistencias.Diaria.Nnajacti.Formulario.formular')
    
   <!-- <div class="form-group col-md-4 {{$errors->first('tipoacti_id') ? 'has-error' : ''}}">
        {!! Form::label('tipoacti_id', 'Tipo de Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('tipoacti_id', $todoxxxx['tipoacti'], null, ['class' => 'form-control form-control-sm select2','required']) !!}
        @if($errors->has('tipoacti_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('tipoacti_id') }}
        </div>
        @endif
    </div>
    
    <div class="form-group col-md-4 {{$errors->first('actividade_id') ? 'has-error' : ''}}">
        {!! Form::label('actividade_id', 'Actividad:', ['class' => 'control-label']) !!}
        {!! Form::select('actividade_id', $todoxxxx['activida'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('actividade_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('actividade_id') }}
        </div>
        @endif
    </div>


   <div class="form-group col-md-4">
        {!! Form::label('prm_novedadx_id', 'Novedad u Observación:', ['class' => 'control-label']) !!}
        {!! Form::select('prm_novedadx_id', $todoxxxx['novedadx'], null, ['class' => 'form-control form-control-sm select2']) !!}
        @if ($errors->has('prm_novedadx_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_novedadx_id') }}
            </div>
        @endif
    </div> -->


    
    @isset($todoxxxx['modeloxx'])
        <div class="form-group col-md-6">
            {!! Form::label('created_at', 'FECHA Y HORA DE REGISTRO:', ['class' => 'control-label']) !!}
            <div id="fechdili" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->created_at }}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('updated_at', 'FECHA Y HORA DE ACTUALIZACIÓN:', ['class' => 'control-label']) !!}
            <div id="fechdili" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->updated_at }}
            </div>
        </div>

        <div class="form-group col-md-6">
            {!! Form::label('user_crea_id', 'USUARIO QUE REGISTRÓ:', ['class' => 'control-label']) !!}
            <div id="user_crea_id" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->userCrea->name }}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('user_edita_id', 'USUARIO QUE ACTUALIZÓ:', ['class' => 'control-label']) !!}
            <div id="user_edita_id" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->userEdita->name }}
            </div>
        </div>
    @endisset
</div>
