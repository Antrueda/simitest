<div class="row">
    <div class="form-group col-md-4">
        {{ Form::label('primer_apellido', '1.1 1er. Apellido:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('primer_apellido', null, ['class' => $errors->first('primer_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer apellido', 'maxlength' => '120', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('primer_apellido'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('primer_apellido') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('segundo_apellido', '2do. Apellido:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('segundo_apellido', null, ['class' => $errors->first('segundo_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('segundo_apellido'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('segundo_apellido') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('primer_nombre', '1er. Nombre:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('primer_nombre', null, ['class' => $errors->first('primer_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('primer_nombre'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('primer_nombre') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('segundo_nombre', '2do. Nombre:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('segundo_nombre', null, ['class' => $errors->first('segundo_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('segundo_nombre'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('segundo_nombre') }}
            </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('identitario', '1.2 Nombre Identitario:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('identitario', null, ['class' => $errors->first('identitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre Identitario', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('identitario'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('identitario') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('apodo', '1.3 Apodo:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('apodo', null, ['class' => $errors->first('apodo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Apodo', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
        @if($errors->has('apodo'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('apodo') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_sexo_id', '1.4 ¿Cuál es su sexo de nacimiento?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_sexo_id', $todoxxxx['sexoxxxx'], null, ['id'=>'prm_sexo_id','class' => $errors->first('prm_sexo_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_sexo_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_sexo_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_identidad_genero_id', '1.5 ¿Cuál es su identidad de género?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_identidad_genero_id', $todoxxxx['generoxx'], null, ['id'=>'prm_identidad_genero_id','class' => $errors->first('prm_identidad_genero_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_identidad_genero_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_identidad_genero_id') }}
            </div>
        @endif
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('prm_orientacion_sexual_id', '1.6 ¿Cuál es su orientación sexual?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_orientacion_sexual_id', $todoxxxx['orientax'], null, ['id'=>'prm_orientacion_sexual_id','class' => $errors->first('prm_orientacion_sexual_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_orientacion_sexual_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_orientacion_sexual_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('d_nacimiento', '1.7 Fecha de d_nacimiento:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::date('d_nacimiento', null, ['id'=>'d_nacimiento','class' => $errors->first('d_nacimiento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('d_nacimiento'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('d_nacimiento') }}
            </div>
        @endif
    </div>
    <div class="form-group form-group col-md-4" id="edadxxxx">
        {{ Form::label('aniosxxx', '1.8 Edad (Años)', ['class' => 'control-label']) }}
        {{ Form::number('aniosxxx', null, ['class' => $errors->first('aniosxxx') ?
    'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'min' => '6', 'max' => '100','id'=>'aniosxxx']) }}
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_pai_id', '1.9 País de nacimiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_pai_id', $todoxxxx['paisxxxx'],
             null, ['id'=>'sis_pai_id','class' => $errors->first('sis_pai_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('sis_pai_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_pai_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">

        {{ Form::label('sis_departamento_id', '1.9(a) Departamento de nacimiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_departamento_id', $todoxxxx['departam'], null, ['id'=>'sis_departamento_id','class' => $errors->first('sis_departamento_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('sis_departamento_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_departamento_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_municipio_id', '1.9(b) Municipio de nacimiento', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_municipio_id', $todoxxxx['municipi'],  null, ['id'=>'sis_municipio_id','class' => $errors->first('sis_municipio_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('sis_municipio_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_municipio_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_tipodocu_id', '1.10 Documento con el cual se identifica', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tipodocu_id', $todoxxxx['document'], null, ['id'=>'prm_tipodocu_id','class' => $errors->first('prm_tipodocu_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_tipodocu_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_tipodocu_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_doc_fisico_id', '1.11 Cuenta con el documento físico?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_doc_fisico_id', $todoxxxx['docufisi'], null, ['id'=>'prm_doc_fisico_id','class' => $errors->first('prm_doc_fisico_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_doc_fisico_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_doc_fisico_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_ayuda_id', 'Motivo:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_ayuda_id', $todoxxxx['sindocum'], null, ['id'=>'prm_ayuda_id','class' => $errors->first('prm_ayuda_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_ayuda_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_ayuda_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('s_documento', '1.12 No. de documento:', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_documento', null, ['class' => $errors->first('s_documento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'No. de documento', 'maxlength' => '120']) }}
        @if($errors->has('s_documento'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('s_documento') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_paiexp_id', '1.13 País de expedición', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_paiexp_id', $todoxxxx['paisxxxx'], null, ['id'=>'sis_paiexp_id','class' => $errors->first('sis_paiexp_id') ? 'form-control form-control-sm is-invalid select2 sispaisx' : 'form-control form-control-sm select2 sispaisx']) }}
        @if($errors->has('sis_paiexp_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_paiexp_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">

        {{ Form::label('sis_departamentoexp_id', '1.13(a) Departamento de expedición', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_departamentoexp_id',$todoxxxx['deparexp'], null, ['class' => $errors->first('sis_departamentoexp_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2', 'id' => 'sis_departamentoexp_id']) }}
        @if($errors->has('sis_departamentoexp_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_departamentoexp_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('sis_municipioexp_id', '1.13(b) Municipio de expedición', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('sis_municipioexp_id', $todoxxxx['municexp'], null, ['id'=>'sis_municipioexp_id','class' => $errors->first('sis_municipioexp_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('sis_municipioexp_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('sis_municipioexp_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_gsanguino_id', '1.14 Grupo Sanguíneo', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_gsanguino_id', $todoxxxx['gruposax'], null, ['id'=>'prm_gsanguino_id','class' => $errors->first('prm_gsanguino_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_gsanguino_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_gsanguino_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_factor_rh_id', 'RH', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_factor_rh_id', $todoxxxx['rhxxxxxx'], null, ['id'=>'prm_factor_rh_id','class' => $errors->first('prm_factor_rh_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_factor_rh_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_factor_rh_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_situacion_militar_id', '1.15 ¿Tiene definida su situación militar?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_situacion_militar_id', $todoxxxx['situdefi'], null, ['id'=>'prm_situacion_militar_id','class' => $errors->first('prm_situacion_militar_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_situacion_militar_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_situacion_militar_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_clase_libreta_id', 'Si cuenta con libreta militar indicar', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_clase_libreta_id', $todoxxxx['libretax'], null, ['id'=>'prm_clase_libreta_id','class' => $errors->first('prm_clase_libreta_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_clase_libreta_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_clase_libreta_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_estado_civil_id', '1.16 Estado Civil', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_estado_civil_id', $todoxxxx['estacivi'], null, ['id'=>'prm_estado_civil_id','class' => $errors->first('prm_estado_civil_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_estado_civil_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_estado_civil_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_etnia_id', '1.17 ¿Con cuál grupo étnico se reconoce?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_etnia_id', $todoxxxx['grupetni'], null, ['id'=>'prm_etnia_id','class' => $errors->first('prm_etnia_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_etnia_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_etnia_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_poblacion_etnia_id', '¿Cuál?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_poblacion_etnia_id',  $todoxxxx['grupindi'], null, ['id'=>'prm_poblacion_etnia_id','class' => $errors->first('prm_poblacion_etnia_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_poblacion_etnia_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_poblacion_etnia_id') }}
            </div>
        @endif
    </div>
    <div class="form-group col-md-4">
        {{ Form::label('prm_tipoblaci_id', '1.18 ¿Tipo de población?', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::select('prm_tipoblaci_id', $todoxxxx['tipoblac'], null, ['class' => $errors->first('prm_tipoblaci_id') ? 'form-control form-control-sm is-invalid select2' : 'form-control form-control-sm select2']) }}
        @if($errors->has('prm_tipoblaci_id'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_tipoblaci_id') }}
            </div>
        @endif
    </div>
</div>
