<script src="https://cdn.tiny.cloud/1/zjmxk3gxksh8lqk3rs23rw73x3lnc08tkfxvvpj6zx8nqe5e/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<div class="form-row align-items-end">
    <div class="row">
        <div class="form-group col-md">
        {{ Form::label('tipotexto_id', 'Tipo de Texto', ['class' => 'control-label']) }}
        {{ Form::select('tipotexto_id',$todoxxxx['tipotext'], null,['class'=> $errors->first('tipotexto_id') ? 'form-control is-invalid ckeditor' :'form-control form-control-sm ckeditor','autofocus']) }}
        @if($errors->has('tipotexto_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('tipotexto_id') }}
        </div>
        @endif
    </div>
</div>
    <div class="form-group col-md-12">
        {{ Form::label('texto', 'Descripción:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::textarea('texto', null, ['class' => $errors->first('texto') ? 'form-control form-control-sm is-invalid contarcaracteres' :'form-control form-control-sm contarcaracteres','id'=>'mytextarea']) }}
        @if($errors->has('texto'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('texto') }}
        </div>
        @endif
    </div>
    <div class="form-group col-md-6">
        {{ Form::label('sis_esta_id', 'Estado', ['class' => 'control-label']) }}
        {{ Form::select('sis_esta_id', $todoxxxx['estadoxx'], null, ['class' => $errors->first('sis_esta_id') ?
    'form-control select2 form-control-sm is-invalid cargos' : 'form-control select2 form-control-sm cargos',
    'data-placeholder' => 'Seleccione un estado']) }}
        @if($errors->has('sis_esta_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_esta_id') }}
        </div>
        @endif
    </div>
</div>