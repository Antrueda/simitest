<div class="row">
  <div class="col-12">
    <div class="card card-outline card-secondary">
      <div class="card-header">
        <h3 class="card-title">Beneficiarios</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive ">
        <table class="table table-hover text-nowrap table-bordered asistencias">
          <thead>
            <tr>
              <th>No.</th>
              <th>Documento</th>
              <th>Nombre</th>
              @foreach ($todoxxxx['cabesema'] as $item)
                @if (isset($item["dia"]))
                  <th style="text-align: center;">{{$item["dia"]}} <br> {{$item["fecha"]}}</th>
                @else
                  <th style="text-align: center;">{{$item}}</th>
                @endif
              @endforeach
              <td></td>
            </tr>
          </thead>
          <tbody>
            @forelse ($todoxxxx['listasis'] as $key => $listaasistencia)
              <?php $i =0; ?>
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$listaasistencia->s_documento}}</td>
                <td><strong>{{$listaasistencia->s_primer_nombre}} {{$listaasistencia->s_segundo_nombre}} {{$listaasistencia->s_primer_apellido}} {{$listaasistencia->s_segundo_apellido}}</strong></td>
                @foreach ($todoxxxx['cabesema'] as $item)
                  @if (isset($item["dia"]))
                    <td>
                   
                      @if (Carbon\Carbon::parse($item["fecha"]) <= Carbon\Carbon::parse($todoxxxx['hoy']))
                        <input type="checkbox" class="cambio-estado" data-id="{{$listaasistencia->asistencias[$i]->asissema_matri_id}}" data-fecha="{{$listaasistencia->asistencias[$i]->fecha}}" {{($listaasistencia->asistencias[$i]->valor_asis)?"checked":""}} style="width: 18px; height: 18px;" >
                      @else
                        <input disabled type="checkbox" {{($listaasistencia->asistencias[$i]->valor_asis)?"checked":""}} style="width: 18px; height: 18px;" >
                      @endif
                    </td>
                    <?php $i += 1; ?>
                  @else
                    <td></td>
                  @endif
                @endforeach
                <td>
                  <button class="btn btn-sm btn-danger eliminar-asigna-asistencia" type="button" data-asis="{{$listaasistencia->asistenciamatricula}}">ELIMINAR</button>
                </td>
              </tr>
            @empty
                <tr>
                    <td colspan="10">
                      <center>No ah registrado beneficiarios</center>
                    </td>
                </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      {{ $todoxxxx['listasis']->links() }}
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

@include($todoxxxx['rutacarp'].''.'.Semanal.Formulario.asistencias.infoasistencia')