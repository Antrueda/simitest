<script>
    $(document).ready(function(){
        $('.select2').select2({
            language: "es"
        });
    });
    $(function(){
         var f_ajax=function(dataxxxx,pselecte){
            $.ajax({
                url : dataxxxx.url,
                data : dataxxxx.data,
                type : dataxxxx.type,
                dataType : dataxxxx.datatype,
                success : function(json) {
                    if(json[0].valuexxx==1){
                        $("#"+dataxxxx.campoxxx).empty();
                    }
                      $.each(json,function(i,data){
                            var selected='';
                            if(eval(data.valuexxx)==eval(pselecte)){
                                selected='selected'
                            }
                            $('#'+dataxxxx.campoxxx).append('<option '+selected+' value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });


                },
                error : function(xhr, status) {
                    alert('Disculpe, existió un problema');
                },
            });
        }
        var datadepa=function(campoxxx,valuexxx,selected){

            var departam='sis_upz_id';
            var municipi='sis_upzbarri_id';
            var routexxx="{{ route('ajaxx.upz') }}";

            $("#"+departam+",#"+municipi).empty();
            $("#"+departam+",#"+municipi).append('<option value="">Seleccione</option>')
            dataxxxx={
                url:routexxx,
                data:{
                    _token: $("input[name='_token']").val(),
                    'sispaisx':valuexxx
                },
                type:'POST',
                datatype:'json',
                campoxxx:departam
            }
            if(valuexxx!='' ){
                f_ajax(dataxxxx,selected);
            }
        }
        var datamuni=function(campoxxx,valuexxx,selected){

              var   municipi='sis_upzbarri_id';
              var   routexxx="{{ route('ajaxx.barrio') }}"

            $("#"+municipi).empty();
            $("#"+municipi).append('<option value="">Seleccione</>')
            dataxxxx={
                url:routexxx,
                data:{
                    _token: $("input[name='_token']").val(),
                    'departam':valuexxx
                },
                type:'POST',
                datatype:'json',
                campoxxx:municipi
            }
            if(valuexxx!='' ){
                f_ajax(dataxxxx,selected);
            }
        }

        @if(old('sis_localidad_id')!==null)
            datadepa('sis_localidad_id',{{ old('sis_localidad_id') }},{{ old('sis_upz_id') }});

            @if(old('sis_upz_id')!==null)
                datamuni('sis_upz_id',{{ old('sis_upz_id') }},{{ old('sis_upzbarri_id') }});
            @endif
        @endif

        $(".sispaisx").change(function(){
            datadepa($(this).prop('id'),$(this).val(),'');
        });
        $(".departam").change(function(){
            datamuni($(this).prop('id'),$(this).val(),'')
        });

    // INICIO esconde campos según la zona de residencia
    var f_tipozona = function(valuexxx){
        $("#i_prm_tipo_via_id, #i_prm_alfabeto_via_id, #i_prm_tiene_bis_id, #i_prm_bis_alfabeto_id, #i_prm_cuadrante_vp_id, #i_prm_alfabetico_vg_id, #i_prm_cuadrante_vg_id").empty();
            $("#i_prm_tipo_via_id, #i_prm_alfabeto_via_id, #i_prm_tiene_bis_id, #i_prm_bis_alfabeto_id, #i_prm_cuadrante_vp_id, #i_prm_alfabetico_vg_id, #i_prm_cuadrante_vg_id").append('<option value="">Seleccione</>')
            if(valuexxx != ''){
                $.ajax({
                    url : "{{ route('ajaxx.escondesitipodir') }}",
                    data : {
                            _token: $("input[name='_token']").val(),
                            'padrexxx':valuexxx
                        },
                    type : 'POST',
                    dataType : 'json',
                    success : function(json) {
                        $('#s_nombre_via').prop('readonly',json[0].nomviapr);
                        $('#i_via_generadora').prop('readonly',json[0].numerovg);
                        $('#i_placa_vg').prop('readonly',json[0].placavgx);
                        if(json[0].tipoviax[0].valuexxx==1){
                            $("#i_prm_tipo_via_id, #i_prm_alfabeto_via_id, #i_prm_tiene_bis_id, #i_prm_bis_alfabeto_id, #i_prm_cuadrante_vp_id, #i_prm_alfabetico_vg_id, #i_prm_cuadrante_vg_id").empty();
                        }
                        $.each(json[0].tipoviax,function(i,data){
                            $('#i_prm_tipo_via_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].alfviapr,function(i,data){
                            $('#i_prm_alfabeto_via_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].tienebis,function(i,data){
                                $('#i_prm_tiene_bis_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].letrabis,function(i,data){
                                $('#i_prm_bis_alfabeto_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].cuadravp,function(i,data){
                                $('#i_prm_cuadrante_vp_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].alfabevg,function(i,data){
                                $('#i_prm_alfabetico_vg_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                        $.each(json[0].cuadravg,function(i,data){
                                $('#i_prm_cuadrante_vg_id').append('<option  value="'+data.valuexxx+'">'+data.optionxx+'</option>')
                        });
                    },
                    error : function(xhr, status) {
                        alert('Disculpe, existió un problema');
                    },
                });
            }
    }

    @if(old('i_prm_zona_direccion_id')!=null)
            f_tipozona({{ old('i_prm_zona_direccion_id') }});
        @endif

        $("#i_prm_zona_direccion_id").change(function(){
            f_tipozona($(this).val());
        });

// FIN esconde campos según la zona de residencia

 });

function soloNumeros(e){
  var keynum = window.event ? window.event.keyCode : e.which;
  if ((keynum == 8) || (keynum == 46))
  return true;
  return /\d/.test(String.fromCharCode(keynum));
}
</script>