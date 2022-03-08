<hr style="border:3px;">

<div class="row mt-3">
  <div class="col-md-12">
    <h5>-</h5>
  </div>
</div>
<div class="row">
  
  <div class="col-md-4">
    {{ Form::label('fecha', 'Fecha de Diligenciamiento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','max' => $todoxxxx['hoyxxxxx']]) }}
    @if($errors->has('fecha'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('fecha') }}
    </div>
    @endif
  </div>
    <div class="col-md-4">
    {{ Form::label('prm_grupo', 'Grupo', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_grupo', $todoxxxx['grupoxxx'], null, ['class' => $errors->first('prm_grupo') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione el grupo', 'autofocus']) }}
    @if($errors->has('prm_grupo'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_grupo') }}
    </div>
    @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('prm_curso', 'Tipo de Curso', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_curso', $todoxxxx['tipocurs'],null, ['class' => $errors->first('prm_curso') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('prm_curso'))      
          <div class="invalid-feedback d-block">
            {{ $errors->first('prm_curso') }}
          </div>
       @endif
  </div>
   <div class="col-md-4">
    {{ Form::label('curso_id', 'Curso', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('curso_id', $todoxxxx['cursosxx'],null, ['class' => $errors->first('curso_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('curso_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('curso_id') }}
          </div>
       @endif
  </div>
  @if($todoxxxx['usuariox']->sis_nnaj->FiResidencia != null) 
     <div class="col-md-4">
    {{ Form::label('telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('telefono', $todoxxxx['usuariox']->sis_nnaj->FiResidencia->s_telefono_uno, ['class' => $errors->first('telefono') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);"]) }}
        @if($errors->has('telefono'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('telefono') }}
          </div>
       @endif
  </div>
     <div class="col-md-4">
    {{ Form::label('celular', 'Celular 1', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('celular', $todoxxxx['usuariox']->sis_nnaj->FiResidencia->s_telefono_dos, ['class' => $errors->first('celular') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
        @if($errors->has('celular'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('celular') }}
          </div>
       @endif
  </div>
     <div class="col-md-4">
    {{ Form::label('celular2', 'Celular 2', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('celular2', $todoxxxx['usuariox']->sis_nnaj->FiResidencia->s_telefono_tres, ['class' => $errors->first('celular2') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
        @if($errors->has('celular2'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('celular2') }}
          </div>
       @endif
  </div>
  @else
  <div class="col-md-4">
    {{ Form::label('telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('telefono',null, ['class' => $errors->first('telefono') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', "onkeypress" => "return soloNumeros(event);"]) }}
        @if($errors->has('telefono'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('telefono') }}
          </div>
       @endif
  </div>
     <div class="col-md-4">
    {{ Form::label('celular', 'Celular 1', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('celular', null, ['class' => $errors->first('celular') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
        @if($errors->has('celular'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('celular') }}
          </div>
       @endif
  </div>
     <div class="col-md-4">
    {{ Form::label('celular2', 'Celular 2', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('celular2', null, ['class' => $errors->first('celular2') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
        @if($errors->has('celular2'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('celular2') }}
          </div>
       @endif
  </div>
  @endif


</div>
@if($todoxxxx['usuariox']->nnaj_nacimi->Edad<18))
<hr style="border:3px;">
<div class="row mt-3">
  <div class="col-md-12">
    <h5>INFORMACIÓN BÁSICA DEL REPRESENTANTE LEGAL</h5>
  </div>
</div>
<hr style="border:3px;">
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
<div class="row">
  <div class="col-md-3">
    {{ Form::label('ape1_autorizado', 'Primer Apellido', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('ape1_autorizado', null, ['class' => $errors->first('ape1_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer Apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('ape1_autorizado'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('ape1_autorizado') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('ape2_autorizado', 'Segundo Apellido', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('ape2_autorizado', null, ['class' => $errors->first('ape2_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo Apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('ape2_autorizado'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('ape2_autorizado') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('nom1_autorizado', 'Primer Nombre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('nom1_autorizado', null, ['class' => $errors->first('nom1_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer Nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('nom1_autorizado'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('nom1_autorizado') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('nom2_autorizado', 'Segundo Nombre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('nom2_autorizado', null, ['class' => $errors->first('nom2_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo Nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('nom2_autorizado'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('nom2_autorizado') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_doc_id', 'Tipo de documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_doc_id', $todoxxxx['tipodocu'], null, ['class' => $errors->first('prm_doc_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2']) }}
    @if($errors->has('prm_doc_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_doc_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('doc_autorizado', 'No. de doc_autorizado', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('doc_autorizado', null, ['class' => $errors->first('doc_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Número de Documento', 'minlength' => '6', 'maxlength' => '11',"onkeypress" => "return soloNumeros(event);"]) }}
    @if($errors->has('doc_autorizado'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('doc_autorizado') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_parentezco_id', 'Parentesco', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_parentezco_id', $todoxxxx['parentez'], null, ['class' => $errors->first('prm_parentezco_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2']) }}
    @if($errors->has('prm_parentezco_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_parentezco_id') }}
      </div>
    @endif
  </div>
</div>
@endif
<hr>
<hr style="border:3px;">




<div class="row">
  <div class="col-md">
    {{ Form::label('user_id', 'Funcionario(A)/Contratista quien entrega al NNA', ['class' => 'control-label col-form-label-sm']) }}
    <span> (psicosocial, tutor de vivienda, tutor de convivencia, enfermero y/o facilitador).</span>
    {{ Form::select('user_id', $todoxxxx['usuarioz'], null, ['class' => $errors->first('user_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('user_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('user_id') }}
      </div>
    @endif
  </div>
</div>
<br>
<hr>