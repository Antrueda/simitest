<script>
  $(document).ready(function(){
    $('#victimas,#riesgos').change(function() {
        f_comboSimple({
            dataxxxx: {
                padrexxx: $(this).val() == '' ? 0 : $(this).val(),
                selectxx: $(this).prop('id'),
            },
            urlxxxxx: "{{ route('ajaxx.nomasxxxx') }}",
            msnxxxxx:"Disculpe, existió un problema al armar el combo"
        });
    });
    $('#victimas').select2({
      language: "es"
    });
    $('#riesgos').select2({
      dropdownParent: $('#riesgos_div'),
      language: "es"
    });
    
    var victima = function(valuexxxx){
      if(valuexxxx==853){
        $('#riesgos_div').show()
        $('#victima_div').hide()
      }else{
        $('#riesgos_div').hide()
        $('#victima_div').show()
      }
    } 

    var riesgo = function(valuexxxx){
      if(valuexxxx==853&&$('#victimas').val()==853){
        $('#victima_div').show()
      }else{
        $('#victima_div').hide()
      }
    } 
    <?php 
      $victimas = count(old('victimas'))==0 ? 0 : old('victimas')[0]  ;
      $riesgos = count(old('riesgos'))==0 ? 0 : old('riesgos')[0]  ;
    ?>
    
    var victimas = "{{$victimas}}";
    if (victimas != '') {
            victima(victimas)
            if(victimas==853){
              var riesgos = "{{$riesgos}}";
              console.log(riesgos);
              riesgo(riesgos)
            }
          }

    $('#victimas').change(function(){
      victima($(this).val())
     })
    $('#riesgos').change(function(){
      riesgo($(this).val())
    })


  });

 
</script>
