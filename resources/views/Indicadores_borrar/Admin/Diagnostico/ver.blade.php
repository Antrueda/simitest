@extends('layouts.index')
@section('content')
<div class="card text-left">
  @include('reutilizar.titulocav')
  <div class="card-body">
    <h5 class="card-title"></h5>
    {!! Form::model($todoxxxx['modeloxx']) !!}
    @include('layouts.components.botones.botones')    
      @include($todoxxxx["rutacarp"].'formulario.formulario')
      @if($todoxxxx["accionxx"] == 'Ver')
        @can('indicador-borrar')
          {!! Form::open(['route' => [$todoxxxx['routxxxx'].'.borrar', $todoxxxx["modeloxx"]->id], 'method' => 'DELETE']) !!}
          
            @if($todoxxxx["modeloxx"]->sis_esta_id == 1)
              <button class="btn btn-danger">Inactivar</button>
            @else
              <button class="btn btn-success">Activar</button>
            @endif
          {!! Form::close() !!}
        @endcan
      @endif
      @include('layouts.components.botones.botones')    
    {!! Form::close() !!}
  </div>
</div>
@endsection