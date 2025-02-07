<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<script>
    var fieldsSelected = [];
    var relationsSelected = [];

    function tableTemplate(tableData) {
        return /*html*/ `
            <div class="col-4 col-sm-3 border rounded p-2">
                <h5 class="text-center">${tableData.s_tabla}</h5>
                <div class="border rounded px-2" style="max-height: 300px; overflow-y: auto">
                    ${fieldTemplate(tableData.sis_tcampos)}
                </div>
            </div>
        `;
    }

    function fieldTemplate(fieldsData) {
        let template = '';
        $.each(fieldsData, (index, fieldData) => {
            template += /*html*/ `<div id="${fieldData.id}" class="rounded" draggable="true" ondragstart="onDragStart(event)" ondragover="onDragOver(event)" ondrop="onDrop(event)" onmouseup="addToFieldsSelected(event)">${fieldData.s_campo}</div>`;
        });
        return template;
    }

    function onDragStart(event) {
        event.dataTransfer.setData('text/plain', event.target.id);
        event.currentTarget.style.border = '1px solid orange';
    }

    function onDragOver(event) {
        event.preventDefault();
    }

    function onDrop(event) {
        event.currentTarget.style.border = '1px solid orange';
        const id = event.dataTransfer.getData('text');
        const relationIndex = relationsSelected.indexOf(`${id}-${event.target.id}`);
        if (event.target.id !== id && relationIndex === -1) {
            relationsSelected.push(`${id}-${event.target.id}`);
            $('input[name=relationsSelected]').val(JSON.stringify(relationsSelected));
            $('#relationsSelected').append( /*html*/ `
            <div class="bg-primary rounded-pill d-inline-block px-2 pb-1 m-1" id="relation-${id}-${event.target.id}">
                <span class="mr-2 text-danger" onclick="removeFromRelationsSelected(${id}, ${event.target.id})" style='cursor: pointer;'>x</span>${$(`#${id}`).text()} - ${$(`#${event.target.id}`).text()}
            </div>
            `);
        }
        event.dataTransfer.clearData();
    }

    function removeFromRelationsSelected(id, relatedId) {
        const relationIndex = relationsSelected.indexOf(`${id}-${relatedId}`);
        relationsSelected.splice(relationIndex, 1);
        $('input[name=relationsSelected]').val(JSON.stringify(relationsSelected));
        $(`#relation-${id}-${relatedId}`).remove();
        $(`#${id}`).css('border', 'none');
        $(`#${relatedId}`).css('border', 'none');
    }

    function buildTables() {
        // $('#tablesxx').attr('disabled', true);
        $.ajax({
            method: 'POST',
            url: "{{route('excel.getDataFields')}}",
            data: {
                selected: $('#tablesxx').val()
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success(response) {
                $.each(response, (index, table) => {
                    $('#tables').append(tableTemplate(table));
                });
            },
            error(error) {
                // $('#tablesxx').attr('disabled', false);
            }
        });
    }

    function destroyTables() {
        $('#tables').empty();
        $('#tablesxx').attr('disabled', false);
        $('#fieldsSelected').empty();
        fieldsSelected = [];
        relationsSelected = [];
        $('input[name=fieldsSelected]').val('')
        $('input[name=relationsSelected]').val('')
    }

    function addToFieldsSelected(event) {
        const fieldIndex = fieldsSelected.indexOf(parseInt(event.target.id));
        if (fieldIndex >= 0) {
            $(`#${event.target.id}`).css('background-color', 'white')
            fieldsSelected.splice(fieldIndex, 1);
            $('input[name=fieldsSelected]').val(JSON.stringify(fieldsSelected));
            $(`#field-${event.target.id}`).remove();
        } else {
            fieldsSelected.push(parseInt(event.target.id));
            $('input[name=fieldsSelected]').val(JSON.stringify(fieldsSelected));
            $(`#${event.target.id}`).css('background-color', 'lightgray');
            $('#fieldsSelected').append( /*html*/ `
                <div class="bg-primary rounded-pill d-inline-block px-2 pb-1 m-1" id="field-${event.target.id}">
                    <span class="mr-2 text-danger" onclick="removeFromFieldsSelected(${event.target.id})" style='cursor: pointer;'>x</span>${$(`#${event.target.id}`).text()}
                </div>
            `);
        }
    }

    function removeFromFieldsSelected(id) {
        const index = fieldsSelected.indexOf(id);
        fieldsSelected.splice(index, 1);
        $('input[name=fieldsSelected]').val(JSON.stringify(fieldsSelected));
        $(`#field-${id}`).remove();
        $(`#${id}`).css('background-color', 'white');
    }

    $(function() {
        var camposxx = function(dataxxxx) {
            $.ajax({
                url: "{{ route($todoxxxx['routxxxx'].'.tablcamp') }}",
                data: dataxxxx,
                type: 'GET',
                dataType: 'json',
                success: function(json) {
                    $(json.selected).empty();
                    $.each(json.combosxx, function(i, d) { console.log(d.camposxx);
                        // <optgroup label="Frist Queue" id="Frist Queue">
                        $(json.selected).append('<optgroup   label="' + d.optionxx + '">');
                        $.each(d.camposxx, function(j, m) {
                            $(json.selected).append('<option  value="'+d.valuexxx+'_' + m.valuexxx +'">' + m.optionxx + '</option>');
                        });
                    });
                },
                error: function(xhr, status) {
                    alert('Disculpe, existió un problema al seleccionar la estrtategia');
                },
            });
        }
        $('.select2').select2({
            language: "es",
            //theme: 'bootstrap4',
        });
        $('#sis_tabla_id').change(function() {
            camposxx({
                selected: $(this).val()
            });
        })

        $('#dateinit').on('change', () => {
            let dateinit = new Date($('#dateinit').val());
            let dateendx = new Date($('#dateendx').val());
            let diff = (dateendx.getTime() - dateinit.getTime()) / (1000*60*60*24);
            if(dateinit > dateendx) {
                $('#dateinit').val($('#dateendx').val());
            }
        })

        $('#dateendx').on('change', () => {
            let dateinit = new Date($('#dateinit').val());
            let dateendx = new Date($('#dateendx').val());
            let diff = (dateendx.getTime() - dateinit.getTime()) / (1000*60*60*24*30);
            if(dateendx < dateinit) {
                $('#dateendx').val($('#dateinit').val());
            }
            console.log(dateendx.getDate());
            if(diff > 6) {
                dateendx.setMonth(dateinit.getMonth() + 7)
                console.log(diff, dateendx.getDate(), `${dateendx.getFullYear()}-${dateendx.getMonth() < 10 ? '0' + dateendx.getMonth() : dateendx.getMonth()}-${dateendx.getDay() < 10 ? '0' + dateendx.getDay() : dateendx.getDay()}`)
                $('#dateendx').val(`${dateendx.getFullYear()}-${dateendx.getMonth() < 10 ? '0' + dateendx.getMonth() : dateendx.getMonth()}-${dateendx.getDate() < 10 ? '0' + (dateendx.getDate() + 1) : (dateendx.getDate() + 1)}`)
            }
        })
    });
</script>
