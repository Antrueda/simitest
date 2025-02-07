<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_upi_id', 'UPI en la que se encuentra activo el NNA', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_upi_id', $upis, null, ['class' => $errors->first('prm_upi_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI', 'autofocus']) }}
    @if($errors->has('prm_upi_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_upi_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('fecha', 'Fecha de salida', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::date('fecha', null, ['class' => $errors->first('fecha') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
    @if($errors->has('fecha'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('fecha') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('hora_salida', 'Hora de salida', ['class' => 'control-label col-form-label-sm']) }}
    <div class="row">
      <div class="col-md-6">
        {{ Form::time('hora_salida', null, ['class' => $errors->first('hora_salida') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('hora_salida'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('hora_salida') }}
          </div>
        @endif
      </div>
      <div class="col-md-6">
        {{ Form::select('prm_hor_sal_id', $ampm, null, ['class' => $errors->first('prm_hor_sal_id') ? 'form-control  col-md-6 form-control-sm is-invalid select2' : 'form-control float-right form-control-sm']) }}
        @if($errors->has('prm_hor_sal_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('prm_hor_sal_id') }}
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-9">
    {{ Form::label('objetivo', 'Objetivo de la salida:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('objetivo[]', $objetivos, null, ['class' => $errors->first('objetivo') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione...', 'id' => 'objetivo', 'multiple']) }}
    @if($errors->has('objetivo'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('objetivo') }}
    </div>
    @endif
  </div>
</div>
<div class="row mt-3">
  <div class="col-md-12">
    <h6>Información básica del representante legal</h6>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('primer_apellido', 'Primer Apellido', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('primer_apellido', null, ['class' => $errors->first('primer_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer Apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('primer_apellido'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('primer_apellido') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('segundo_apellido', 'Segundo Apellido', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('segundo_apellido', null, ['class' => $errors->first('segundo_apellido') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo Apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('segundo_apellido'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('segundo_apellido') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('primer_nombre', 'Primer Nombre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('primer_nombre', null, ['class' => $errors->first('primer_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Primer Nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('primer_nombre'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('primer_nombre') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('segundo_nombre', 'Segundo Nombre', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('segundo_nombre', null, ['class' => $errors->first('segundo_nombre') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Segundo Nombre', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('segundo_nombre'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('segundo_nombre') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_doc_id', 'Tipo de documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_doc_id', $documento, null, ['class' => $errors->first('prm_doc_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2']) }}
    @if($errors->has('prm_doc_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_doc_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('documento', 'Número de documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('documento', null, ['class' => $errors->first('documento') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Número de Documento', 'min' => '0', 'maxlength' => '10']) }}
    @if($errors->has('documento'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('documento') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_parentezco_id', 'Parentesco', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_parentezco_id', $parentezco, null, ['class' => $errors->first('prm_parentezco_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2']) }}
    @if($errors->has('prm_parentezco_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_parentezco_id') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_autorizado_id', '¿Cuenta con autorización del defensor de familia?', ['class' => 'control-label col-form-label-sm']) }}
    <span>(Aplica para NNA con PARD o SRPA)</span>
    {{ Form::select('prm_autorizado_id', $sino, null, ['class' => $errors->first('prm_autorizado_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm select2', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('prm_autorizado_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_autorizado_id') }}
      </div>
    @endif
  </div>
</div>
<div class="row mt-3">
  <div class="col-md-12">
    <h6>Persona autorizada por el Representante Legal que recoja al NNA</h6>
    <span>(Solo aplica para casos que no salga con el representante legal)</span>
  </div>
</div>
<hr>
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
    {{ Form::label('prm_doc2_id', 'Tipo de documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_doc2_id', $documento, null, ['class' => $errors->first('prm_doc2_id') ? 'form-control  col-md-6 form-control-sm is-invalid' : 'form-control float-right form-control-sm select2']) }}
    @if($errors->has('prm_doc2_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_doc2_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('doc_autorizado', 'Número de documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('doc_autorizado', null, ['class' => $errors->first('doc_autorizado') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Número de Documento', 'min' => '0', 'maxlength' => '10']) }}
    @if($errors->has('doc_autorizado'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('doc_autorizado') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_parentezco2_id', 'Parentezco', ['class' => 'control-label col-form-label-sm select2']) }} ']) }}
    @if($errors->has('prm_parentezco2_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_parentezco2_id') }}
      </div>
    @endif
  </div>
</div>
<span>En caso de que salga con una persona autorizada por el representante legal</span><br>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_carta_id', 'Carta de autorización firmada', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_carta_id', $sino, null, ['class' => $errors->first('prm_carta_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('prm_carta_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_carta_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_copiaDoc_id', 'Copia de documento del Representante Legal', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_copiaDoc_id', $sino, null, ['class' => $errors->first('prm_copiaDoc_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('prm_copiaDoc_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_copiaDoc_id') }}
      </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('prm_copiaDoc2_id', 'Fotocopia de documento de la persona autorizada por el representante legal', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('prm_copiaDoc2_id', $sino, null, ['class' => $errors->first('prm_copiaDoc2_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('prm_copiaDoc2_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('prm_copiaDoc2_id') }}
      </div>
    @endif
  </div>
</div>
<div class="row mt-3">
  <div class="col-md-12">
    <h6>Datos de salida del NNA</h6>
    <span>Condiciones de salud en las cuales sale el niño, niña o adolescente.</span>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-6">
    @foreach ($condiciones as $condicion)
      <div class="row mt-2">
        <div class="col-md-6">
          <label for="{{ $condicion }}">{{ $condicion }}</label>
        </div>
        <div class="col-md-6">
          {{ Form::select('condiciones[]', $sina, null, ['class' => $errors->first('condiciones') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm select2', 'id' => 'condiciones']) }}
          @if($errors->has('condiciones'))
            <div class="invalid-feedback d-block">
              {{ $errors->first('condiciones') }}
            </div>
          @endif
        </div>
      </div>
    @endforeach
  </div>
  <div class="col-md-6">
    {{ Form::label('descripcion', 'Descripcion de la condición física y comportamentales en que sale el/la NNA:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('descripcion', null, ['class' => $errors->first('descripcion') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Descripción', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('descripcion'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('descripcion') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    {{ Form::label('objetos', 'Objetos con los cuales sale del IDIPRON:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('objetos', null, ['class' => $errors->first('objetos') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describa los objetos que lleva el NNA', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('objetos'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('objetos') }}
      </div>
    @endif
  </div>
</div>
<div class="row mt-3">
  <div class="col-md-12">
    <h6>Información de la salida</h6>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('prm_upi2_id', 'UPI/AREA/DEPENDENCIA', ['class' => 'control-label col-form-label-sm']) }}
    <br><span>Lugar de donde se realiza la salida</span>
    {{ Form::select('prm_upi2_id', $upis, null, ['class' => $errors->first('prm_upi2_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Seleccione la UPI']) }}
    @if($errors->has('prm_upi2_id'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('prm_upi2_id') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('tiempo', 'Tiempo (Días)', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('tiempo', null, ['class' => $errors->first('tiempo') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Días', 'min' => '0', 'max' => '365']) }}
    @if($errors->has('tiempo'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('tiempo') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('novedad', 'Novedad', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('novedad', null, ['class' => $errors->first('novedad') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Novedad', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('novedad'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('novedad') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('dir_salida', 'Dirección donde se llevará a cabo la salida', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('dir_salida', null, ['class' => $errors->first('dir_salida') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Dirección', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('dir_salida'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('dir_salida') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
    <div class="col-md-3">
      {{ Form::label('tel_contacto', 'Teléfono de contacto', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::number('tel_contacto', null, ['class' => $errors->first('tel_contacto') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Teléfono', 'min' => '0', 'maxlength' => '10']) }}
      @if($errors->has('tel_contacto'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('tel_contacto') }}
      </div>
      @endif
    </div>
</div>
<div class="row">
  <div class="col-md-12">
    {{ Form::label('causa', 'En caso de existir una justa causa para que el NNA no regrese a la UPI en la fecha establecida, indique el motivo:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('causa', null, ['class' => $errors->first('causa') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Describa la justa causa', 'maxlength' => '4000', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('causa'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('causa') }}
      </div>
    @endif
  </div>
</div>
<div class="row mt-3">
  <div class="col-md-12">
    <h6>Información de quien aprueba la salida</h6>
  </div>
</div>
<hr>
<span>Representante legal o persona que recoge al NNA</span>
<div class="row">
  <div class="col-md-3">
    {{ Form::label('nombres_recoge', 'Nombre y Apellido', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('nombres_recoge', null, ['class' => $errors->first('nombres_recoge') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Nombre y Apellido', 'maxlength' => '120', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'style' => 'text-transform:uppercase;']) }}
    @if($errors->has('nombres_recoge'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('nombres_recoge') }}
    </div>
    @endif
  </div>
  <div class="col-md-3">
    {{ Form::label('doc_recoge', 'Nº de Documento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::number('doc_recoge', null, ['class' => $errors->first('doc_recoge') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 'placeholder' => 'Número de Documento', 'min' => '0', 'maxlength' => '10']) }}
    @if($errors->has('doc_recoge'))
    <div class="invalid-feedback d-block">
      {{ $errors->first('doc_recoge') }}
    </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
    {{ Form::label('responsable', 'Responsable de la UPI', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('responsable', $usuarios, null, ['class' => $errors->first('responsable') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('responsable'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('responsable') }}
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-md">
    {{ Form::label('user_doc1_id', 'Persona quien entrega al NNA', ['class' => 'control-label col-form-label-sm']) }}
    <span> (psicosocial, tutor de vivienda, tutor de convivencia, enfermero y/o facilitador).</span>
    {{ Form::select('user_doc1_id', $usuarios, null, ['class' => $errors->first('user_doc1_id') ? 'form-control select2 form-control-sm is-invalid' : 'form-control select2 form-control-sm', 'data-placeholder' => 'Digite el número de documento']) }}
    @if($errors->has('user_doc1_id'))
      <div class="invalid-feedback d-block">
        {{ $errors->first('user_doc1_id') }}
      </div>
    @endif
  </div>
</div>

<div class="row mt-3">
  @canany(['aisalidamenores-crear', 'aisalidamenores-editar'])
    {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
  @endcanany
  <a class="btn btn-primary ml-2" href="{{ route('ai.ver', $dato->id) }}">REGRESAR</a>
</div>