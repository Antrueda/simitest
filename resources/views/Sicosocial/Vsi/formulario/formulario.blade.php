<div class="form-group row">
<div class="col-md-4">
        {{ Form::label('sis_depen_id', 'UPI', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_depen_id', $todoxxxx['dependen'], null, ['class' => $errors->first('sis_depen_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus','placeholder'=>'Selecione']) }}
        @if($errors->has('sis_depen_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_depen_id') }}
            </div>
        @endif
    </div>
    <div class="col-md-4">
        {{ Form::label('fecha', 'Fecha de diligenciamiento:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('fecha', \Carbon\Carbon::now(), ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
        @endif
    </div>

    <div class="col-md-4">
    {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'autofocus']) }}
        @if($errors->has('sis_esta_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_esta_id') }}
            </div>
        @endif
    </div>
    @include('layouts.registro')
</div>
