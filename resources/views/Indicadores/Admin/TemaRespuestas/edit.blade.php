@extends('layouts.index')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h1>
                ÁREA: {{ $area->nombre }}
            </h1>
        </div>
        <div class="card-header p-2">
            @include('indicadores.admin.inligrutemacombo.menu')
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="card">
                    <div class="card-header">
                        <h1>
                            PREGUNTA: {{$pregunta->nombre}}
                        </h1>
                        <div class="row px-2 py-1">
                            @if (session()->has('message'))
                            <div class="alert alert-success col-12" role="alert">
                                {{ session('message') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="card-header p-2">
                        @include('indicadores.admin.temarespuestas.tabs')
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="pregunta">
                                <div class="card card-outline card-secondary">
                                    <div class="card text-left">
                                        <div class="card-header">
                                            <h1 style="text-align: center"><strong>EDITAR PREGUNTA</strong> </h1>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <form method="POST" id="formulario" action="{{ route('temarespuesta.editar', ['objetoxx'=>$lineagru->id]) }}" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="form-group row">
                                                    <div class="form-group col-md-12">
                                                        <label for="in_base_fuente_id"
                                                            class="control-label col-form-label-sm">GRUPO LÍNEA
                                                            BASE:</label>
                                                        <select class="form-control form-control-sm" id="in_ligru_temacombo_id"
                                                            name="in_ligru_temacombo_id">
                                                            <option value="{{$pregunta->id}}">
                                                                {{$pregunta->nombre}}
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="parametro_id"
                                                            class="control-label col-form-label-sm">PREGUNTA:</label>
                                                        <select class="form-control form-control-sm" id="parametro_id"
                                                            name="parametro_id">
                                                            @foreach ($parametros as $respuestas)
                                                            <option value="{{$respuestas->parametro->id}}" @if($respuestas->parametro->id ==$lineagru->parametro_id)
                                                            selected
                                                            @endif
                                                            {{ old('parametro_id') == $respuestas->parametro->id ? "selected" :""}}>{{$respuestas->parametro->nombre}}</option>                                                           @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group card-footer text-muted text-center">
                                                    <a href="{{ route('temarespuesta', ['padrexxx'=>$pregunta->id]) }}"
                                                        class="btn btn-sm btn-primary">VOLVER A RESPUESTAS</a>
                                                    <input class="btn btn-sm btn-primary" type="submit" value="GUARDAR">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection