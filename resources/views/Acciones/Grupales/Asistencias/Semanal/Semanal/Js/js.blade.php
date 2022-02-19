<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
    $(() => {
        let dependen = '{{old("sis_depen_id")}}';
        let servicio = '{{old("sis_servicio_id")}}';
        let grupoxxx = '{{old("prm_grupo_id")}}';
        let gradoxxx = '{{old("eda_grados_id")}}';
        let tipoacti = '{{ old("tipoacti_id") }}';
        let activida = $('#prm_actividad_id');
        let actividade = '{{ old("actividade_id") }}';
        let tipocurso = '{{ old("prm_tipo_curso") }}';
        let curso = '{{ old("prm_curso") }}';
        
        let f_sis_depen = (selected) => {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#sis_depen_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.servicio") }}',
                campoxxx: 'sis_servicio_id',
                mensajex: 'Exite un error al cargar los los servicios de la upi'
            }
            f_comboGeneral(dataxxxx);
        }

        let f_respoupi = (selected) => {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#sis_depen_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.responsa") }}',
                campoxxx: 'user_res_id',
                mensajex: 'Exite un error al cargar el responsable de la upi'
            }
            
            f_comboGeneral(dataxxxx);
        }

        let f_contrati = function(selected) {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: $('#sis_depen_id').val(),
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.contrati") }}',
                campoxxx: 'user_fun_id',
                mensajex: 'Exite un error al cargar el funcionario contratista'
            }
            f_comboGeneral(dataxxxx);
        }

        let f_grado = (selected, upixxxxx, padrexxx) => {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: padrexxx,
                    cabecera: true,
                    upixxxxx: upixxxxx,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.grado") }}',
                campoxxx: 'eda_grados_id',
                mensajex: 'Exite un error al cargar los grados'
            }
            f_comboGeneral(dataxxxx);
        }

        let f_grupo = (selected, upixxxxx, padrexxx) => {
            let dataxxxx = {
                dataxxxx: {
                    padrexxx: padrexxx,
                    upixxxxx: upixxxxx,
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.grupo") }}',
                campoxxx: 'prm_grupo_id',
                mensajex: 'Exite un error al cargar los grupos'
            }
            f_comboGeneral(dataxxxx);
        }

        let f_actividad = (selected, upixxxxx, tipoacti) => {
            let dataxxxx = {
                dataxxxx: {
                    tipoacti: tipoacti,
                    upixxxxx: upixxxxx,
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.actividad") }}',
                campoxxx: 'actividade_id',
                mensajex: 'Exite un error al cargar las actividades'
            }
            f_comboGeneral(dataxxxx);
        }

        let f_curso = (selected, tipoCurs) => {
            let dataxxxx = {
                dataxxxx: {
                    tipoCurs: tipoCurs,
                    cabecera: true,
                    selected: [selected]
                },
                urlxxxxx: '{{ route("asissema.curso") }}',
                campoxxx: 'prm_curso',
                mensajex: 'Exite un error al cargar las actividades'
            }
            f_comboGeneral(dataxxxx);
        }

        function ocultarFields() {
            $('#prm_programa_id_field, #prm_convenio_id_field, #actividade_id_field, #tipoacti_id_field,#grado_id_field, #grupo_id_field,#tipo_curso_box, #curso_box')
                    .addClass('d-none');
            $('#prm_programa_id, #prm_convenio_id, #actividade_id, #tipoacti_id, #prm_grupo_id, #eda_grados_id, #prm_tipo_curso, #prm_curso').attr('disabled', true);
        }

        function f_nom_actividad() {
        
            if (activida.find(':selected').text() === 'Seleccione') {
                ocultarFields();
            }
            //  else {
            //     $('#grupo_id_field').removeClass('d-none');
            //     $('#prm_grupo_id').attr('disabled', false);
            // }
            switch (activida.val()) {
                case '2710':
                    ocultarFields();
                    
                    $('#grado_id_field').removeClass('d-none');
                    $('#eda_grados_id').attr('disabled', false);
                    $('#grupo_id_field').removeClass('d-none');
                    $('#prm_grupo_id').attr('disabled', false);

                    break;
                case '2707':
                    ocultarFields();
                    
                    $('#tipoacti_id_field').removeClass('d-none');
                    $('#tipoacti_id').attr('disabled', false);
                    $('#actividade_id_field').removeClass('d-none');
                    $('#actividade_id').attr('disabled', false);
                    $('#grupo_id_field').removeClass('d-none');
                    $('#prm_grupo_id').attr('disabled', false);
                    break;
                    
                case '2708':
                    ocultarFields();
                    $('#prm_convenio_id_field').removeClass('d-none');
                    $('#prm_convenio_id').attr('disabled', false);
                    $('#grupo_id_field').removeClass('d-none');
                    $('#prm_grupo_id').attr('disabled', false);
               
                    break;
                case '2709':
                    ocultarFields();
                    $('#tipo_curso_box').removeClass('d-none');
                    $('#prm_tipo_curso').attr('disabled', false);
                    $('#curso_box').removeClass('d-none');
                    $('#prm_curso').attr('disabled', false);
                    $('#grupo_id_field').removeClass('d-none');
                    $('#prm_grupo_id').attr('disabled', false);
                    break;
            }
        }

        if (dependen !== '') {
            f_sis_depen(servicio);
            f_respoupi('{{old("user_res_id")}}');
            f_contrati('{{old("user_fun_id")}}')

            if (servicio !== '') {
                if (gradoxxx !== '') {
                    f_grado(gradoxxx, dependen, servicio);
                } else {
                    f_grado(0, dependen, servicio);
                }
                if (grupoxxx !== '') {
                    f_grupo(grupoxxx, dependen, servicio);
                } else {
                    f_grupo(0, dependen, servicio);
                }
            }
            
            if (tipoacti !== '') {
                if (actividade !== '') {
                    f_actividad(actividade, dependen, tipoacti);
                } else {
                    f_actividad(0, dependen, tipoacti);
                }
            }

            if (tipocurso !== '') {
                if (curso !== '') {
                    f_curso(curso,tipocurso);
                } else {
                    f_curso(0,tipocurso);
                }
            }
            
        }

        $('#sis_depen_id').change(() => {
            f_sis_depen(0);
            f_respoupi(0);
            f_contrati(0)
        });

        $('#sis_servicio_id').change(() => {
            let dependen = $('#sis_depen_id').find(":selected").val();
            let servicio = $('#sis_servicio_id').find(":selected").val();
            f_grado(0, dependen, servicio);
            f_grupo(0, dependen, servicio);
        })

        // tipo de actividad
        let inputTipoacti = $('#tipoacti_id');

        inputTipoacti.change(() => {
            let dependen = $('#sis_depen_id').find(":selected").val();
            let tipoacti = inputTipoacti.find(':selected').val();
            if (tipoacti != "") {
                $('#actividade_id').attr('disabled', false);
                f_actividad(0,dependen,tipoacti);
            }else{
                $('#actividade_id').attr('disabled', true);
            }      
        })

        // $('#prm_programa_id_field, #prm_convenio_id_field, #actividade_id_field, #tipoacti_id_field, #grupo_id_field').addClass('d-none');
        // $('#prm_programa_id, #prm_convenio_id, #actividade_id, #tipoacti_id, #prm_grupo_id').attr('disabled', true);

        // cuando cargue o cambien nombre del programa o actividada
        f_nom_actividad();
        $('#prm_actividad_id').change(() => {
            f_nom_actividad();
        });

        //cambio de tipo curso para cargar cursos
        $('#prm_tipo_curso').change(() => {
            let tipo = $('#prm_tipo_curso').val();
            f_curso(0,tipo);
        });

        $('.select2').select2({
            language: "es"
        });

        setTimeout(() => {
            $('.select2-container').css('width', '100%');
        }, 1000);

        
    });
</script>