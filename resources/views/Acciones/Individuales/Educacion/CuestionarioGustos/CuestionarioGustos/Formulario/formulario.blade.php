<style>
    input[type="checkbox"] {
  width: 22px;
  height: 22px;
}

input[type="checkbox"]:checked {
    box-shadow: 0 0 2px #0069d9, 0 0 10px #0069d9, 0 0 15px #0069d9;
}

input[type="checkbox"]:hover {
    box-shadow: 0 0 2px #A9A9A9, 0 0 10px #A9A9A9, 0 0 15px #A9A9A9;
}
.perfilvocacional .lista{
    height: 93vh;
    overflow-y: scroll;
    overflow-x: hidden;
}
<<<<<<< HEAD

table, th, td {
  border: 2px solid black;
}
</style>


{{-- informacion previa de matricula academia y talleres --}}
    @include($todoxxxx['rutacarp'].''.'CuestionarioGustos.Formulario.infomatriculasnnaj')


<div class="row">

<div class="form-group col-md-6 {{$errors->first('sis_depen_id') ? 'has-error' : ''}}">
        {!! Form::label('sis_depen_id', 'LUGAR DE INTERVENCIÓN, SEDE O DEPENDENCIA:', ['class' => 'control-label']) !!}
        {!! Form::select('sis_depen_id', $todoxxxx['sis_depens'], null, ['class' => 'form-control form-control-sm select2', 'required']) !!}
        @if($errors->has('sis_depen_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('sis_depen_id') }}
        </div>
        @endif
    </div>

=======
</style>
<div class="card p-1 perfilvocacional">

    <div class="form-row col-md-12">
>>>>>>> 24a30a64c09b5c0b51de812c2baa1b622d9f926b
        <div class="form-group col-md-6">
            {!! Form::label('fecha', 'Fecha de diligenciamiento:', ['class' => 'control-label']) !!}
            <div class="datepicker date input-group p-0 shadow-sm">
                {!! Form::text('fecha', null, ['class' => 'form-control form-control-sm ','placeholder'=>'Seleccionar fecha']) !!}
                <div class="input-group-append"><span class="input-group-text px-4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                  </svg></span></div>
            </div>
            @if($errors->has('fecha'))
            <div class="invalid-feedback d-block">
                {{ $errors->first('fecha') }}
            </div>
            @endif
        </div>
<<<<<<< HEAD

        
        
        @isset($todoxxxx['modeloxx'])
        <div class="form-group col-md-6">
            {!! Form::label('created_at', 'Fecha y hora de registro:', ['class' => 'control-label']) !!}
            <div id="fechdili" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->created_at }}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('updated_at', 'Fecha y hora de actualización:', ['class' => 'control-label']) !!}
            <div id="fechdili" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->updated_at }}
            </div>
        </div>
        
        <div class="form-group col-md-6">
            {!! Form::label('user_crea_id', 'Usuario que registró:', ['class' => 'control-label']) !!}
            <div id="user_crea_id" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->creador->name }}
            </div>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('user_edita_id', 'Usuario que actualizó:', ['class' => 'control-label']) !!}
            <div id="user_edita_id" class="form-control form-control-sm">
                {{ $todoxxxx['modeloxx']->editor->name }}
            </div>
        </div>
    @endisset
    </div>


    </div>
    </div>

    <div class="card-header">
        <strong>CUESTIONARIO DE GUSTOS, INTERESES Y HABILIDADES OCUPACIONALES TERAPIA OCUPACIONAL </strong>
    </div>

    <div class="card p-1 cuestionario">


=======
    </div>
    
>>>>>>> 24a30a64c09b5c0b51de812c2baa1b622d9f926b
   
    @foreach ($todoxxxx['habilidades'] as $key => $habilidad)
        <center><p>{{$habilidad->nombre}}</p></center>
        <table class="table">
            <thead>
            <tr>
<<<<<<< HEAD
            <th style="text-align: center">Letra</th>
            <th style="text-align: center">Habilidad</th>
            <th style="text-align: center">Seleccione</th>

=======
                <th>Letra</th>
                <th>Habilidad</th>
                <th>Selector</th>
>>>>>>> 24a30a64c09b5c0b51de812c2baa1b622d9f926b
            </tr>
            </thead>
            <tbody>
                @foreach ($habilidad->habilidades as $key => $item)
                    <tr>
                        <th>
                            {{$item->letra->nombre}}
                        </th>
                        <th>
                            {{$item->nombre}}
                        </th>
                        <th>
                        <center>        
                            <input class="form-check-input check_habilidades" type="checkbox" name="habilidades[]" value="{{$habilidad->id.'_'.$item->id}}" id="item{{$key+1}}"
                                {{ in_array($item->id,isset($todoxxxx['modeloxx']->habilidades)? $todoxxxx['modeloxx']->habilidades:[]) ?'checked' : '' }}
                            />
                        </center>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach

<<<<<<< HEAD
    <div class="col-md-12">
        {!! Form::label('user_fun_id', 'Funcionario/Contratista que realiza el seguimiento:', ['class' => 'control-label']) !!}
        {!! Form::select('user_fun_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm','required']) !!}
        @if($errors->has('user_fun_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_fun_id') }}
        </div>
        @endif
    </div> 
    </div>



    <div class="card-header">
        <strong>RESULTADOS CUESTIONARIO IDENTIFICACIÓN DE HABILIDADES, COMPETENCIAS E INTERESES OCUPACIONALES</strong>
    </div>

<table style="width:100%">
  <tr>

  <th style="text-align: center">Letra</th>
  <th style="text-align: center">Curso</th>
  <th style="text-align: center">Total</th>
  </tr>     
=======

        <table class="table">
            <thead>
            <tr>
                <th>Letra</th>
                <th>Curso</th>
                <th>Total</th>
            </tr>
            </thead>
>>>>>>> 24a30a64c09b5c0b51de812c2baa1b622d9f926b
            <tbody>
                @foreach ($todoxxxx['conthabi'] as $key => $item)
                    <tr>
                        <th>
                            {{$key}}
                        </th>
                        <th>
                            {{$item[1]}}
                        </th>
                        <th>
                            {{$item[0]}}
                        </th>
                    </tr>
                @endforeach
            </tbody>
<<<<<<< HEAD
        </table>   

       

    </div>

=======
        </table>


<div class="col-md-12">
        {!! Form::label('user_fun_id', 'Funcionario/Contratista que realiza el seguimiento:', ['class' => 'control-label']) !!}
        {!! Form::select('user_fun_id', $todoxxxx['funccont'], null, ['class' => 'form-control form-control-sm','required']) !!}
        @if($errors->has('user_fun_id'))
        <div class="invalid-feedback d-block">
            {{ $errors->first('user_fun_id') }}
        </div>
        @endif
    </div>
>>>>>>> 24a30a64c09b5c0b51de812c2baa1b622d9f926b
</div>
