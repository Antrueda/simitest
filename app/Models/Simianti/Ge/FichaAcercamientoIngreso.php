<?php

namespace App\Models\Simianti\Ge;

use Illuminate\Database\Eloquent\Model;

class FichaAcercamientoIngreso extends Model
{
    protected $connection = 'simiantiguo';
    protected $table = 'ficha_acercamiento_ingreso';
    // protected $primaryKey = 'id_nnaj';

    protected $fillable = [
        'id',
        'fecha_apertura',
        'telefonos',
        'estado_civil',
        'numero_hijos',
        'ultimo_grado_aprobado',
        'certificado_escolar',
        'institucion_educativa',
        'edad_inicio_estudios',
        'direccion_residencia',
        'estrato_residencia',
        'id_barrio',
        'tipo_vivienda',
        'tenencia',
        'situacion',
        'id_nnaj',
        'id_facilitador_social',
        'id_trabajador_social_upi',
        'id_responsable_busqueda_activa',
        'fecha_insercion',
        'usuario_insercion',
        'fecha_modificacion',
        'usuario_modificacion',
        'estado_embarazo',
        'numero_semana',
        'vive_familia',
        'con_quien_vive',
        'esp_hab',
        'contributivo',
        'subsidiado',
        'nivel_sisben',
        'entidad',
        'carta_especial',
        'cual',
        'consume_sustancia',
        'frecuencia_consumo',
        'intensidad_consumo',
        'tiene_discapacidad',
        'ind_disc',
        'asiste_estudiar',
        'nom_institucion',
        'tmp_sin_est',
        'jornada_estudio',
        'nivel_academico',
        'permanenecia_calle',
        'duerme_calle',
        'tiempo_calle',
        'actividad_calle',
        'actividad_grupo',
        'nombre_grupo',
        'tipo_habitante',
        'reingreso',
        'tiene_residencia',
        'zona',
        'cc_acudiente',
        'nombre_acudiente',
        'diligenciado',
        'estado',
        'parentesco_acudiente',
        'edad_inicio_consumo',
        'genero_identifica',
        'orientacion_sexual',
        'leerescribir',
        'consume_medicamentos',
        'cual_medicamento',
        'estado_lactancia',
        'semana_lactancia',
        'sabe_leer',
        'sabe_escribir',
        'sabe_operaciones_basicas',
        'no_sisben',
        'certificado_discapacidad',
        'problema_salud',
        'cual_problema_salud',
        'conoce_anticonceptivos',
        'usa_anticonceptivos',
        'usa_voluntarmiamente_anti',
        'eventos_medicos',
        'cuantas_comidas',
        'id_razon_no_comer',
        'actividad_ingresos',
        'que_trabajo',
        'id_tipo_informal',
        'id_tipo_otros',
        'jornada_ingresos',
        'hora_turno_inicio',
        'hora_turno_fin',
        'id_tipo_frecuencia_ing',
        'cantidad_ingreso',
        'id_tipo_relacion_lab',
        'id_razon_ingresos',
        'tiempo_busca_trabajo',
        'id_acceso_recreacion',
        'id_religioso',
        'id_religion',
        'id_estado_pard',
        'id_activo_pard',
        'tiempo_pard',
        'id_motivo_pard',
        'nombre_defensor',
        'telefonos_defensor',
        'lugar_pard',
        'id_estado_srpa',
        'id_activo_srpa',
        'id_motivo_srpa',
        'id_estado_spoa',
        'id_activo_spoa',
        'hace_cuanto_spoa',
        'id_motivo_spoa',
        'id_sancion_spoa',
        'id_privado_libertad',
        'id_vinculado_violencia',
        'id_causa_violencia',
        'id_riesgo_ac_del',
        'talla_pantalon',
        'talla_camisa',
        'talla_zapatos',
        'id_municipio_reinc',
        'id_tipo_contacto',
        'id_tipo_opcion',
        'id_tipo_proteccion',
        'fecha_remision',
        'id_presenta_violencia',
        'id_autoriza_datos',
        'id_quiere_entrar',
        'por_que_entrar',
        'gustaria_hacer',
        'id_autoriza_int',
        'id_autoriza_ext',
        'id_autoriza_terr',
        'id_autoriza_foto',
        'razones_ingreso',
        'tiempo_calle_m',
        'tipo_tiempo_estudio',
        'sisben',
        'tipo_discapacidad',
        'numero_meses',
        'cual_metodo',
        'jornada_inreso_de',
        'jornada_ingreso_a',
        'dias_calle',
        'tipo_tiempo_pard',
        'medida_srpa',
        'tipo_tiempo_spoa',
        'causa_actos_del',
        'certificado_poblacion',
        'tipo_tiempo_calle',
        'entidad_remitio',
        'motivo_remitio',
        'tipo_afiliacion',
        'razon_no_salud',
        'tiempo_spoa',
        'minicipio_despl',
    ];
}