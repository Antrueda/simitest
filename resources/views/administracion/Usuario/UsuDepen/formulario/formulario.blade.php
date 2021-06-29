<div class="form-group row">
    <div class="form-group col-md-6">
        {{ Form::label('user_id', 'Usuario', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('user_id', $todoxxxx["userxxxx"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_depen_id', 'Upi/Dependencia', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_depen_id', $todoxxxx["dependen"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('i_prm_responsable_id', '¿Responsable de la unidad?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('i_prm_responsable_id', $todoxxxx["responsa"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px']) }}
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_esta_id', $todoxxxx["estadoxx"], null, ['class' => 'form-control form-control-sm select2','style'=>'height:38px']) }}
    </div>
    @include('layouts.registro')
</div>
