<script>
   var table ='';
$(document).ready(function() {
    
    @foreach ($todoxxxx['tablasxx'] as $tablasxx)
    {{ $tablasxx["tablaxxx"] }} =  $('#{{ $tablasxx["tablaxxx"] }}').DataTable({
        "serverSide": true,
        "lengthMenu":				[[ 50, -1], [ 50, "Todos"]],
        "ajax": {
            url:"{{ url($tablasxx['urlxxxxx'])  }}",
            @if(isset($tablasxx['dataxxxx']))
                data:{
                    @foreach($tablasxx['dataxxxx'] as $dataxxxx)
                    {{$dataxxxx['campoxxx']}}:"{{$dataxxxx['dataxxxx']}}",
                    @endforeach
                }
            @endif
        },
        "columns":[
            @foreach($tablasxx['columnsx'] as $columnsx)
                {data:'{{ $columnsx["data"] }}',name:'{{ $columnsx["name"] }}'},
            @endforeach
        ],
        "language": {
            "url": "{{ url('/adminlte/plugins/datatables/Spanish.lang') }}"
        }
    });
  @endforeach
  $(".reload" ).click(function() {
            table.ajax.reload(null, false);
        }); 
        

        var agregar=function(dataxxxx){
            
                    $.ajax({
                        url : "{{route('vodontograma.agregar')}}",
                        data : dataxxxx,
                        type : 'GET',
                        dataType :'json',
                        success: function(json) {
                            console.log(json);
                            toastr.success('Asistente agregado con éxito');
                            {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();
                            },
                        error: function(xhr, status) {
                     
                            alert('Disculpe, error al agregar el asitente');
                        }
                    });
                }

        $('#agregar').on('click',function() {
            if($('#diente').val()==''||$('#tiposup_id').val()==''||$('#super_id').val()==''||$('#diag_id').val()==''){
                toastr.error('Por favor seleccione los datos para ingresar el diagnostico del diente');
            }else{
            agregar({
                diente: $('#diente').val(),
                super_id: $('#super_id').val(),
                diag_id: $('#diag_id').val(),
                tiposup_id: $('#tiposup_id').val(),
                odonto_id:  '{{ $todoxxxx["padrexxx"]->id }}',
                });
            $('#diente').val('');
            $('#super_id').val('');
            $('#tiposup_id').val('');
            $("#diag_id").val(['']);
   
            }   
        });
       
        

        var quitar=function(dataxxxx){
            $.ajax({
                url : "{{route('vodontograma.quitar',$todoxxxx["padrexxx"]->id)}}",
                data : dataxxxx,
                type : 'GET',
                dataType :'json',
                success: function(json) {
                    toastr.success('Asistente eliminado con éxito');
                    {{ $todoxxxx["tablasxx"][0]["tablaxxx"] }}.ajax.reload();

                    },
                error: function(xhr, status) {
                    alert('Disculpe, error al agregar el asitente');
                }
            });
        }

        $('#quitar').on('click',function() {
            
            console.log($('#diente').val());
            console.log($('#super_id').val());
            console.log($('#diag_id').val());
            console.log($('#tiposup_id').val());
            console.log('{{ $todoxxxx["padrexxx"]->id }}');
            quitar({
                diente: $('#diente').val(),
                super_id: $('#super_id').val(),
                diag_id: $('#diag_id').val(),
                tiposup_id: $('#tiposup_id').val(),
                odonto_id:  '{{ $todoxxxx["padrexxx"]->id }}',

                
            });
            $('#diente').val('');
            $('#super_id').val('');
            $('#tiposup_id').val('');
            $('#diag_id').val([]);
        });

} );


</script>


