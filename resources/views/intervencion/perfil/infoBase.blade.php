<div class="card card-success card-outline">
  <div class="card-body box-profile">
    <div class="text-center">
      <img class="profile-user-img img-fluid img-circle" src="{{ asset('adminlte/dist/img/avatar2.png') }} "
        alt="User profile picture">
    </div>
    <h3 class="profile-username text-center">
      {{ $todoxxxx['datobasi']->s_primer_nombre }}
      {{ $todoxxxx['datobasi']->s_segundo_nombre }}
      {{ $todoxxxx['datobasi']->s_primer_apellido }}
      {{ $todoxxxx['datobasi']->s_segundo_apellido }}
      </h3>
      <h3 class="profile-username text-center">
        {{ $todoxxxx['datobasi']->nnaj_sexo->s_nombre_identitario }}
      </h3>
    <p class="text-muted text-center">{{ $todoxxxx['datobasi']->prmTipoPobla->nombre }}</p>
    <p class="text-muted text-center">{{ $todoxxxx['datobasi']->nnaj_docu->tipoDocumento->nombre }} : {{ $todoxxxx['datobasi']->nnaj_docu->s_documento }}</p>
    <ul class="list-group list-group-unbordered mb-3">
      <li class="list-group-item">
        <b>Teléfono</b>
        <a class="float-right">TELEFONO NNAJ</a>
      </li>
      <li class="list-group-item">
        <b>E-mail</b>
        <a class="float-right">CORREO NNAJ</a>
      </li>
      <li class="list-group-item">
        <b>Vinculación</b>
        <a class="float-right">VINCULACIÓN NNAJ</a>
      </li>
      <li class="list-group-item">
        <b>Tarjeta Profesional</b>
        <a class="float-right">OTRO DATO</a>
      </li>
    </ul>
  </div>
</div>
