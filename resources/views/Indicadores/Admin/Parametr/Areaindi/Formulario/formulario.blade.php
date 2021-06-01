<div class="form-group row">
  <div class="form-group col-md-6">
  {{ Form::label('area_id','Area') }}
  {{ Form::select('area_id',$todoxxxx['areaxxxx'], null,
    ['class'=> $errors->first('area_id') ?
    'form-control is-invalid form-control-sm select2' :
        'form-control form-control-sm select2','autofocus','id'=>'area_id']) }}
  @if($errors->has('area_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('area_id') }}
  </div>
  @endif
  </div>
  <div class="form-group col-md-6">
  {{ Form::label('in_indicador_id','Indicador') }}
  {{ Form::select('in_indicador_id',$todoxxxx['areaxxxx'], null,
    ['class'=> $errors->first('in_indicador_id') ?
    'form-control is-invalid form-control-sm select2' :
        'form-control form-control-sm select2','autofocus','id'=>'in_indicador_id']) }}
  @if($errors->has('in_indicador_id'))
  <div class="invalid-feedback d-block">
      {{ $errors->first('in_indicador_id') }}
  </div>
  @endif
  </div>
</div>
