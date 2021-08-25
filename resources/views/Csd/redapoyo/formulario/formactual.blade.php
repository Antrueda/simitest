  <div class="form-row align-items-end">

    <div class="form-group col-md-4">
      {{ Form::label('prm_tipo_id', 'Tipo de Red', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::select('prm_tipo_id', $todoxxxx["tiporedx"], null, ['class' => 'form-control form-control-sm select2']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('nombre', 'Nombre Persona/Institución', ['class' => 'control-label col-form-label-sm']) }}
     {{ Form::text('nombre', null, ['class' => 'form-control form-control-sm','onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('servicios', 'Servicios o Beneficios Recibidos', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('servicios', null, ['class' => 'form-control form-control-sm','onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) }}
    </div>
  </div>
  <div class="form-row align-items-end">
    <div class="form-group col-sm-4">
      {{ Form::label('telefono', 'Teléfono', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::number('telefono', null, ['class' => 'form-control form-control-sm',"onkeypress" => "return soloNumeros(event);"]) }}
    </div>
    <div class="form-group col-sm-4">
      {{ Form::label('direccion', 'Dirección', ['class' => 'control-label col-form-label-sm']) }}
      {{ Form::text('direccion', null, ['class' => 'form-control form-control-sm','onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) }}
    </div>
  </div>
  @include($todoxxxx['rutacarp'].'Acomponentes.Acrud.index')
