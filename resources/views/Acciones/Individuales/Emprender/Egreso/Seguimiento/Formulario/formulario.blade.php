<hr style="border:3px;">
<div class="row">
  
  <div class="col-md-4">
    {{ Form::label('consul_id', 'Consulta Del Proceso Del NNAJ En Simi', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('consul_id', $todoxxxx['dependen'],null, ['class' => $errors->first('consul_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('consul_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('consul_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-12">
    {{ Form::label('observconsu', 'Observaciones:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('observconsu', null, ['class' => $errors->first('observconsu') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
    'id' => 'observconsu', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();', 'cols'=>'30','rows'=>'4',
    'style' => 'text-transform:uppercase;']) }}
    <span id="consul"></span>
        @if($errors->has('observconsu'))
    <div class="invalid-feedback d-block">
            {{ $errors->first('observconsu') }}
        </div>
    @endif
    </div>
  </div>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('verifi_id', 'Verificación De Historia Social', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('verifi_id', $todoxxxx['dependen'],null, ['class' => $errors->first('verifi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('verifi_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('verifi_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-12">
    {{ Form::label('observerifi', 'Observaciones:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('observerifi', null, ['class' => $errors->first('observerifi') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
    'id' => 'observerifi', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();','cols'=>'30','rows'=>'4',
     'style' => 'text-transform:uppercase;']) }}
    <span id="verifi"></span>
        @if($errors->has('observerifi'))
    <div class="invalid-feedback d-block">
            {{ $errors->first('observerifi') }}
        </div>
    @endif
    </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('contact_id', 'Contacto Telefónico', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('contact_id', $todoxxxx['dependen'],null, ['class' => $errors->first('contact_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('contact_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('contact_id') }}
          </div>
       @endif
  </div>
</div>
<hr>

<hr style="border:3px;">
<div class="row">
  <div id="autoUpdate" class="autoUpdate">
    <div class="card">
      <div class="card-header">
        <h5>Tipo de Llamada</h5>
      </div>
      <div class="card-body">
      @include($todoxxxx['rutacarp'].'Seguimiento.Formulario.contacto')
      <hr>
      <br>
      <hr>
      @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
    </div>
  </div>
</div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('numcontac', 'Número de teléfono donde se estableció contacto', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('numcontac', null, ['class' => $errors->first('numcontac') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('numcontac'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('numcontac') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('persocpntac', 'Nombre De La Persona Que Atiende La Llamada', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::text('persocpntac', null, ['class' => $errors->first('persocpntac') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('persocpntac'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('persocpntac') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('parent_id', 'Parentesco', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('parent_id', $todoxxxx['dependen'],null, ['class' => $errors->first('parent_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('parent_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('parent_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('motivoe_id', 'Motivo egreso, inactivación y/o retiro según nnaj y/o familia (indagar en el contacto).', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('motivoe_id', $todoxxxx['dependen'],null, ['class' => $errors->first('motivoe_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('motivoe_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('motivoe_id') }}
          </div>
       @endif
  </div>
</div>
<hr>
<h5>Mencione Situación De Vulneración Encontrada En El Seguimiento Telefónico, Consumo Spa, Situación De Calle, Sin Apoyo Familiar, Etc</h5>
<hr>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('upi_id', 'Tipo de población', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('upi_id', $todoxxxx['dependen'],null, ['class' => $errors->first('upi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('upi_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('upi_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('vulnera_id', 'Situaciones de vulneraciones', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('vulnera_id', $todoxxxx['dependen'],null, ['class' => $errors->first('vulnera_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('vulnera_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('vulnera_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('victimaescnna_id', 'Víctima ESCNNA', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('victimaescnna_id', $todoxxxx['dependen'],null, ['class' => $errors->first('victimaescnna_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('victimaescnna_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('victimaescnna_id') }}
          </div>
       @endif
  </div>


  <div class="col-md-4">
    {{ Form::label('riesgoescnna_id', 'En riesgo de ESCNNA', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('riesgoescnna_id', $todoxxxx['dependen'],null, ['class' => $errors->first('riesgoescnna_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('riesgoescnna_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('riesgoescnna_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('conflicto_id', 'Presunto conflicto con la ley', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('conflicto_id', $todoxxxx['dependen'],null, ['class' => $errors->first('conflicto_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('conflicto_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('conflicto_id') }}
          </div>
       @endif
  </div>
</div>
<hr>
<h5>Generación de Ingresos</h5>
<hr>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('vincula_id', 'Trabajo Formal', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('vincula_id', $todoxxxx['dependen'],null, ['class' => $errors->first('vincula_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('vincula_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('vincula_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('upi_id', 'Trabajo Formal', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('upi_id', $todoxxxx['dependen'],null, ['class' => $errors->first('upi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('upi_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('upi_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('upi_id', 'Trabajo Informal', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('upi_id', $todoxxxx['dependen'],null, ['class' => $errors->first('upi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('upi_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('upi_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('upi_id', 'Otras Actividades', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('upi_id', $todoxxxx['dependen'],null, ['class' => $errors->first('upi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('upi_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('upi_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-4">
    {{ Form::label('upi_id', '¿Tipo de relación laboral?', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('upi_id', $todoxxxx['dependen'],null, ['class' => $errors->first('upi_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('upi_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('upi_id') }}
          </div>
       @endif
  </div>
</div>
<hr>
<div class="row">
  <div class="col-md-4">
    {{ Form::label('emprende_id', 'Emprendimiento', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::select('emprende_id', $todoxxxx['dependen'],null, ['class' => $errors->first('emprende_id') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm']) }}
        @if($errors->has('emprende_id'))
          <div class="invalid-feedback d-block">
            {{ $errors->first('emprende_id') }}
          </div>
       @endif
  </div>
  <div class="col-md-6" id="emprende">
    {{ Form::label('observemp', 'Observaciones:', ['class' => 'control-label col-form-label-sm']) }}
    {{ Form::textarea('observemp', null, ['class' => $errors->first('observemp') ? 'form-control form-control-sm is-invalid' : 'form-control form-control-sm', 
    'id' => 'observemp', 'maxlength' => '4000', 'autofocus', 'onkeyup' => 'javascript:this.value=this.value.toUpperCase();','cols'=>'30','rows'=>'4',
     'style' => 'text-transform:uppercase;']) }}
    <span id="empre"></span>
        @if($errors->has('observemp'))
    <div class="invalid-feedback d-block">
            {{ $errors->first('observemp') }}
        </div>
    @endif
    </div>
</div>

<hr>
<div class="form-group row">
  @include('layouts.registrofecha')
</div>