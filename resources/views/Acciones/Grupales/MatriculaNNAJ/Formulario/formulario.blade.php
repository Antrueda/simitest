
  
@if(!isset($todoxxxx["modeloxx"]->id))
@include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
@endif
<div style="display: none">
    {{ Form::label('sis_nnaj_id', '1er. Apellido', ['class' => 'control-label']) }}
        {{ Form::text('sis_nnaj_id', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}
        {{ Form::label('sis_nnaj_id', '1er. asfasfas', ['class' => 'control-label']) }}
        {{ Form::text('id', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}

</div>
  <div class="form-row align-items-end">
        <div class="form-group col-md-4">
            {{ Form::label('s_primer_apellido', '1er. Apellido', ['class' => 'control-label']) }}
            {{ Form::text('s_primer_apellido', null, ['class' => 'form-control form-control-sm',"onkeyup" => "javascript:this.value=this.value.toUpperCase();", "onkeypress" => "return soloLetras(event);",'readonly']) }}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('s_segundo_apellido', '2do. Apellido', ['class' => 'control-label']) }}
            {{ Form::text('s_segundo_apellido', null, ['class' => 'form-control form-control-sm' ,
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly']) }}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('s_primer_nombre', '1er. Nombre', ['class' => 'control-label']) }}
            {{ Form::text('s_primer_nombre', null, ['class' => 'form-control form-control-sm',
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly']) }}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('s_segundo_nombre', '2do. Nombre', ['class' => 'control-label']) }}
            {{ Form::text('s_segundo_nombre', null, ['class' => 'form-control form-control-sm',
        "onkeyup" => "javascript:this.value=this.value.toUpperCase();","onkeypress" => "return soloLetras(event);",'readonly']) }}
        </div>
      <div class="form-group col-md-4">
        {{ Form::label('tipodocu', 'Número del documento', ['class' => 'control-label col-form-label-sm','readonly']) }}
        {{ Form::text('tipodocu', null, ['class' => 'form-control form-control-sm','readonly']) }}
      </div>
      <div class="form-group col-md-4">
        {{ Form::label('s_documento', 'Número del documento', ['class' => 'control-label col-form-label-sm','readonly']) }}
        {{ Form::text('s_documento', null, ['class' => 'form-control form-control-sm','readonly']) }}
      </div>
      <div class="form-group col-md-4">
      {{ Form::label('d_nacimiento', 'Fecha de Nacimiento', ['class' => 'control-label']) }}
      {{ Form::text('d_nacimiento', null, ['class' => 'form-control form-control-sm','readonly']) }}
      </div>
      <div class="form-group col-md-3">
        {{ Form::label('s_nombre_identitario', 'Nombre Identitario', ['class' => 'control-label col-form-label-sm']) }}
        {{ Form::text('s_nombre_identitario', null, ['class' => $errors->first('s_nombre_identitario') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm','readonly']) }}
      </div>
     
</div>

<br>
<hr>
<div class="row mt-3">
    <div class="col-md-12">
      <h5>VERIFICACIÓN DE DOCUMENTOS A ENTREGAR</h5>
    </div>
  </div>
  <div class="form-row align-items">
        <div class="form-group col-md-6">
            {{ Form::label('','Copia del documento') }}
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input"
                    name="prm_copdoc" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_copdoc == 227) ? 'checked' : ''; ?> value="227">SI
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input {{$errors->first('prm_copdoc') ? ' is-invalid' : ''}}"
                    name="prm_copdoc" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_copdoc == 228) ? 'checked' : ''; ?> value="228">NO
                </label>
            </div>
            @if($errors->has('prm_copdoc'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_copdoc') }}
            </div>
            @endif
        </div>

        <div class="form-group col-md-6">
            {{ Form::label('','Certificados académicos') }}
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input"
                    name="prm_certif" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_certif == 227) ? 'checked' : ''; ?> value="227">SI
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input {{$errors->first('prm_certif') ? ' is-invalid' : ''}}"
                    name="prm_certif" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_certif == 228) ? 'checked' : ''; ?> value="228">NO
                </label>
            </div>
            @if($errors->has('prm_certif'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_certif') }}
            </div>
            @endif
        </div>


        <div class="form-group col-md-6">
            {{ Form::label('','Acta de recuperación de logros') }}
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input"
                    name="prm_recupe" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_recupe == 227) ? 'checked' : ''; ?> value="227">SI
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input {{$errors->first('prm_recupe') ? ' is-invalid' : ''}}"
                    name="prm_recupe" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_recupe == 228) ? 'checked' : ''; ?> value="228">NO
                </label>
            </div>
            @if($errors->has('prm_recupe'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_recupe') }}
            </div>
            @endif
        </div>


        <div class="form-group col-md-6">
            {{ Form::label('','Formato de matrícula') }}
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input"
                    name="prm_matric" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_matric == 227) ? 'checked' : ''; ?> value="227">SI
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input {{$errors->first('prm_matric') ? ' is-invalid' : ''}}"
                    name="prm_matric" <?php echo (isset($todoxxxx['modeloxx']) && $todoxxxx['modeloxx']->prm_matric == 228) ? 'checked' : ''; ?> value="228">NO
                </label>
            </div>
            @if($errors->has('prm_matric'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('prm_matric') }}
            </div>
            @endif
        </div>
    </div>

<br>
<hr>
<div class="row">
  <div class="col-md-12">
  {{ Form::label('observaciones', 'Observación', ['class' => 'control-label col-form-label-sm']) }}
  {{ Form::textarea('observaciones', null, ['class' => $errors->first('observaciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '500', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
      <p id="contadorobservaciones">0/500</p>
      @if($errors->has('observaciones'))
    <div class="invalid-feedback d-block">
          {{ $errors->first('observaciones') }}
        </div>
    @endif
  </div>
</div>





