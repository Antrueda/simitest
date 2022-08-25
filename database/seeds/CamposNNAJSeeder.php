<?php

use App\Models\Sistema\SisTcampo;
use Illuminate\Database\Seeder;

class CamposNNAJSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //NNAJ_DESES
        SisTcampo::create(['s_campo' => 'CREATED_AT', 's_descripcion' => 'CREATED_AT', 'sis_tabla_id' => 149, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1873
        SisTcampo::create(['s_campo' => 'DELETED_AT', 's_descripcion' => 'DELETED_AT', 'sis_tabla_id' => 149, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1874
        SisTcampo::create(['s_campo' => 'NNAJ_UPI_ID', 's_descripcion' => 'NNAJ_UPI_ID', 'sis_tabla_id' => 149, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1875
        SisTcampo::create(['s_campo' => 'PRM_PRINCIPA_ID', 's_descripcion' => 'PRM_PRINCIPA_ID', 'sis_tabla_id' => 149, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1876', 's_idtarela' => 'param1876.id', 's_campsele' => 'param1876.nombre as nombre1876', 'sis_esta_id' => 1]); //1876
        SisTcampo::create(['s_campo' => 'sis_esta_id', 's_descripcion' => 'sis_esta_id', 'sis_tabla_id' => 149, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1877
        SisTcampo::create(['s_campo' => 'SIS_SERVICIO_ID', 's_descripcion' => 'SIS_SERVICIO_ID', 'sis_tabla_id' => 149, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1878
        SisTcampo::create(['s_campo' => 'UPDATED_AT', 's_descripcion' => 'UPDATED_AT', 'sis_tabla_id' => 149, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1879
        SisTcampo::create(['s_campo' => 'user_crea_id', 's_descripcion' => 'user_crea_id', 'sis_tabla_id' => 149, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1880
        SisTcampo::create(['s_campo' => 'user_edita_id', 's_descripcion' => 'user_edita_id', 'sis_tabla_id' => 149, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1881
        //NNAJ_DOCUS
        SisTcampo::create(['s_campo' => 'CREATED_AT', 's_descripcion' => 'CREATED_AT', 'sis_tabla_id' => 150, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1882
        SisTcampo::create(['s_campo' => 'DELETED_AT', 's_descripcion' => 'DELETED_AT', 'sis_tabla_id' => 150, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1883
        SisTcampo::create(['s_campo' => 'FI_DATOS_BASICO_ID', 's_descripcion' => 'FI_DATOS_BASICO_ID', 'sis_tabla_id' => 150, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1884
        SisTcampo::create(['s_campo' => 'PRM_AYUDA_ID', 's_descripcion' => 'PRM_AYUDA_ID', 'sis_tabla_id' => 150, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1885', 's_idtarela' => 'param1885.id', 's_campsele' => 'param1885.nombre as nombre1885', 'sis_esta_id' => 1]); //1885
        SisTcampo::create(['s_campo' => 'PRM_DOC_FISICO_ID', 's_descripcion' => 'PRM_DOC_FISICO_ID', 'sis_tabla_id' => 150, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1886', 's_idtarela' => 'param1886.id', 's_campsele' => 'param1886.nombre as nombre1886', 'sis_esta_id' => 1]); //1886
        SisTcampo::create(['s_campo' => 'PRM_TIPODOCU_ID', 's_descripcion' => 'PRM_TIPODOCU_ID', 'sis_tabla_id' => 150, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1887', 's_idtarela' => 'param1887.id', 's_campsele' => 'param1887.nombre as nombre1887', 'sis_esta_id' => 1]); //1887
        SisTcampo::create(['s_campo' => 'SIS_DOCFUEN_ID', 's_descripcion' => 'SIS_DOCFUEN_ID', 'sis_tabla_id' => 150, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1888
        SisTcampo::create(['s_campo' => 'sis_esta_id', 's_descripcion' => 'sis_esta_id', 'sis_tabla_id' => 150, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1889
        SisTcampo::create(['s_campo' => 'SIS_MUNICIPIO_ID', 's_descripcion' => 'SIS_MUNICIPIO_ID', 'sis_tabla_id' => 150, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1890
        SisTcampo::create(['s_campo' => 'S_DOCUMENTO', 's_descripcion' => 'S_DOCUMENTO', 'sis_tabla_id' => 150, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1891
        SisTcampo::create(['s_campo' => 'UPDATED_AT', 's_descripcion' => 'UPDATED_AT', 'sis_tabla_id' => 150, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1892
        SisTcampo::create(['s_campo' => 'user_crea_id', 's_descripcion' => 'user_crea_id', 'sis_tabla_id' => 150, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1893
        SisTcampo::create(['s_campo' => 'user_edita_id', 's_descripcion' => 'user_edita_id', 'sis_tabla_id' => 150, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1894
        //NNAJ_FI_CSDS
        SisTcampo::create(['s_campo' => 'CREATED_AT', 's_descripcion' => 'CREATED_AT', 'sis_tabla_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1895
        SisTcampo::create(['s_campo' => 'DELETED_AT', 's_descripcion' => 'DELETED_AT', 'sis_tabla_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1896
        SisTcampo::create(['s_campo' => 'FI_DATOS_BASICO_ID', 's_descripcion' => 'FI_DATOS_BASICO_ID', 'sis_tabla_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1897
        SisTcampo::create(['s_campo' => 'PRM_ESTADO_CIVIL_ID', 's_descripcion' => 'PRM_ESTADO_CIVIL_ID', 'sis_tabla_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1898', 's_idtarela' => 'param1898.id', 's_campsele' => 'param1898.nombre as nombre1898', 'sis_esta_id' => 1]); //1898
        SisTcampo::create(['s_campo' => 'PRM_ETNIA_ID', 's_descripcion' => 'PRM_ETNIA_ID', 'sis_tabla_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1899', 's_idtarela' => 'param1899.id', 's_campsele' => 'param1899.nombre as nombre1899', 'sis_esta_id' => 1]); //1899
        SisTcampo::create(['s_campo' => 'PRM_FACTOR_RH_ID', 's_descripcion' => 'PRM_FACTOR_RH_ID', 'sis_tabla_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1900', 's_idtarela' => 'param1900.id', 's_campsele' => 'param1900.nombre as nombre1900', 'sis_esta_id' => 1]); //1900
        SisTcampo::create(['s_campo' => 'PRM_GSANGUINO_ID', 's_descripcion' => 'PRM_GSANGUINO_ID', 'sis_tabla_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1901', 's_idtarela' => 'param1901.id', 's_campsele' => 'param1901.nombre as nombre1901', 'sis_esta_id' => 1]); //1901
        SisTcampo::create(['s_campo' => 'PRM_POBLACION_ETNIA_ID', 's_descripcion' => 'PRM_POBLACION_ETNIA_ID', 'sis_tabla_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1902', 's_idtarela' => 'param1902.id', 's_campsele' => 'param1902.nombre as nombre1902', 'sis_esta_id' => 1]); //1902
        SisTcampo::create(['s_campo' => 'SIS_DOCFUEN_ID', 's_descripcion' => 'SIS_DOCFUEN_ID', 'sis_tabla_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1903
        SisTcampo::create(['s_campo' => 'sis_esta_id', 's_descripcion' => 'sis_esta_id', 'sis_tabla_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1904
        SisTcampo::create(['s_campo' => 'S_APODO', 's_descripcion' => 'S_APODO', 'sis_tabla_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1905
        SisTcampo::create(['s_campo' => 'UPDATED_AT', 's_descripcion' => 'UPDATED_AT', 'sis_tabla_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1906
        SisTcampo::create(['s_campo' => 'user_crea_id', 's_descripcion' => 'user_crea_id', 'sis_tabla_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1907
        SisTcampo::create(['s_campo' => 'user_edita_id', 's_descripcion' => 'user_edita_id', 'sis_tabla_id' => 151, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1908
        //NNAJ_FOCALIS
        SisTcampo::create(['s_campo' => 'CREATED_AT', 's_descripcion' => 'CREATED_AT', 'sis_tabla_id' => 152, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1909
        SisTcampo::create(['s_campo' => 'DELETED_AT', 's_descripcion' => 'DELETED_AT', 'sis_tabla_id' => 152, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1910
        SisTcampo::create(['s_campo' => 'FI_DATOS_BASICO_ID', 's_descripcion' => 'FI_DATOS_BASICO_ID', 'sis_tabla_id' => 152, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1911
        SisTcampo::create(['s_campo' => 'SIS_DOCFUEN_ID', 's_descripcion' => 'SIS_DOCFUEN_ID', 'sis_tabla_id' => 152, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1912
        SisTcampo::create(['s_campo' => 'sis_esta_id', 's_descripcion' => 'sis_esta_id', 'sis_tabla_id' => 152, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1913
        SisTcampo::create(['s_campo' => 'SIS_UPZBARRI_ID', 's_descripcion' => 'SIS_UPZBARRI_ID', 'sis_tabla_id' => 152, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1914
        SisTcampo::create(['s_campo' => 'S_LUGAR_FOCALIZACION', 's_descripcion' => 'S_LUGAR_FOCALIZACION', 'sis_tabla_id' => 152, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1915
        SisTcampo::create(['s_campo' => 'S_NOMBRE_FOCALIZACION', 's_descripcion' => 'S_NOMBRE_FOCALIZACION', 'sis_tabla_id' => 152, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1916
        SisTcampo::create(['s_campo' => 'UPDATED_AT', 's_descripcion' => 'UPDATED_AT', 'sis_tabla_id' => 152, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1917
        SisTcampo::create(['s_campo' => 'user_crea_id', 's_descripcion' => 'user_crea_id', 'sis_tabla_id' => 152, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1918
        SisTcampo::create(['s_campo' => 'user_edita_id', 's_descripcion' => 'user_edita_id', 'sis_tabla_id' => 152, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1919
        //NNAJ_NACIMIS
        SisTcampo::create(['s_campo' => 'CREATED_AT', 's_descripcion' => 'CREATED_AT', 'sis_tabla_id' => 153, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1920
        SisTcampo::create(['s_campo' => 'DELETED_AT', 's_descripcion' => 'DELETED_AT', 'sis_tabla_id' => 153, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1921
        SisTcampo::create(['s_campo' => 'D_NACIMIENTO', 's_descripcion' => 'D_NACIMIENTO', 'sis_tabla_id' => 153, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1922
        SisTcampo::create(['s_campo' => 'FI_DATOS_BASICO_ID', 's_descripcion' => 'FI_DATOS_BASICO_ID', 'sis_tabla_id' => 153, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1923
        SisTcampo::create(['s_campo' => 'SIS_DOCFUEN_ID', 's_descripcion' => 'SIS_DOCFUEN_ID', 'sis_tabla_id' => 153, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1924
        SisTcampo::create(['s_campo' => 'sis_esta_id', 's_descripcion' => 'sis_esta_id', 'sis_tabla_id' => 153, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1925
        SisTcampo::create(['s_campo' => 'SIS_MUNICIPIO_ID', 's_descripcion' => 'SIS_MUNICIPIO_ID', 'sis_tabla_id' => 153, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1926
        SisTcampo::create(['s_campo' => 'UPDATED_AT', 's_descripcion' => 'UPDATED_AT', 'sis_tabla_id' => 153, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1927
        SisTcampo::create(['s_campo' => 'user_crea_id', 's_descripcion' => 'user_crea_id', 'sis_tabla_id' => 153, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1928
        SisTcampo::create(['s_campo' => 'user_edita_id', 's_descripcion' => 'user_edita_id', 'sis_tabla_id' => 153, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1929
        //NNAJ_SEXOS
        SisTcampo::create(['s_campo' => 'CREATED_AT', 's_descripcion' => 'CREATED_AT', 'sis_tabla_id' => 154, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1930
        SisTcampo::create(['s_campo' => 'DELETED_AT', 's_descripcion' => 'DELETED_AT', 'sis_tabla_id' => 154, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1931
        SisTcampo::create(['s_campo' => 'FI_DATOS_BASICO_ID', 's_descripcion' => 'FI_DATOS_BASICO_ID', 'sis_tabla_id' => 154, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1932
        SisTcampo::create(['s_campo' => 'PRM_IDENTIDAD_GENERO_ID', 's_descripcion' => 'PRM_IDENTIDAD_GENERO_ID', 'sis_tabla_id' => 154, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1933', 's_idtarela' => 'param1933.id', 's_campsele' => 'param1933.nombre as nombre1933', 'sis_esta_id' => 1]); //1933
        SisTcampo::create(['s_campo' => 'PRM_ORIENTACION_SEXUAL_ID', 's_descripcion' => 'PRM_ORIENTACION_SEXUAL_ID', 'sis_tabla_id' => 154, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1934', 's_idtarela' => 'param1934.id', 's_campsele' => 'param1934.nombre as nombre1934', 'sis_esta_id' => 1]); //1934
        SisTcampo::create(['s_campo' => 'PRM_SEXO_ID', 's_descripcion' => 'PRM_SEXO_ID', 'sis_tabla_id' => 154, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1935', 's_idtarela' => 'param1935.id', 's_campsele' => 'param1935.nombre as nombre1935', 'sis_esta_id' => 1]); //1935
        SisTcampo::create(['s_campo' => 'SIS_DOCFUEN_ID', 's_descripcion' => 'SIS_DOCFUEN_ID', 'sis_tabla_id' => 154, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1936
        SisTcampo::create(['s_campo' => 'sis_esta_id', 's_descripcion' => 'sis_esta_id', 'sis_tabla_id' => 154, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1937
        SisTcampo::create(['s_campo' => 'S_NOMBRE_IDENTITARIO', 's_descripcion' => 'S_NOMBRE_IDENTITARIO', 'sis_tabla_id' => 154, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1938
        SisTcampo::create(['s_campo' => 'UPDATED_AT', 's_descripcion' => 'UPDATED_AT', 'sis_tabla_id' => 154, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1939
        SisTcampo::create(['s_campo' => 'user_crea_id', 's_descripcion' => 'user_crea_id', 'sis_tabla_id' => 154, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1940
        SisTcampo::create(['s_campo' => 'user_edita_id', 's_descripcion' => 'user_edita_id', 'sis_tabla_id' => 154, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1941
        //NNAJ_SIT_MILS
        SisTcampo::create(['s_campo' => 'CREATED_AT', 's_descripcion' => 'CREATED_AT', 'sis_tabla_id' => 155, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1942
        SisTcampo::create(['s_campo' => 'DELETED_AT', 's_descripcion' => 'DELETED_AT', 'sis_tabla_id' => 155, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1943
        SisTcampo::create(['s_campo' => 'FI_DATOS_BASICO_ID', 's_descripcion' => 'FI_DATOS_BASICO_ID', 'sis_tabla_id' => 155, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1944
        SisTcampo::create(['s_campo' => 'PRM_CLASE_LIBRETA_ID', 's_descripcion' => 'PRM_CLASE_LIBRETA_ID', 'sis_tabla_id' => 155, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1945', 's_idtarela' => 'param1945.id', 's_campsele' => 'param1945.nombre as nombre1945', 'sis_esta_id' => 1]); //1945
        SisTcampo::create(['s_campo' => 'PRM_SITUACION_MILITAR_ID', 's_descripcion' => 'PRM_SITUACION_MILITAR_ID', 'sis_tabla_id' => 155, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1946', 's_idtarela' => 'param1946.id', 's_campsele' => 'param1946.nombre as nombre1946', 'sis_esta_id' => 1]); //1946
        SisTcampo::create(['s_campo' => 'SIS_DOCFUEN_ID', 's_descripcion' => 'SIS_DOCFUEN_ID', 'sis_tabla_id' => 155, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1947
        SisTcampo::create(['s_campo' => 'sis_esta_id', 's_descripcion' => 'sis_esta_id', 'sis_tabla_id' => 155, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1948
        SisTcampo::create(['s_campo' => 'UPDATED_AT', 's_descripcion' => 'UPDATED_AT', 'sis_tabla_id' => 155, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1949
        SisTcampo::create(['s_campo' => 'user_crea_id', 's_descripcion' => 'user_crea_id', 'sis_tabla_id' => 155, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1950
        SisTcampo::create(['s_campo' => 'user_edita_id', 's_descripcion' => 'user_edita_id', 'sis_tabla_id' => 155, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1951
        //NNAJ_UPIS
        SisTcampo::create(['s_campo' => 'CREATED_AT', 's_descripcion' => 'CREATED_AT', 'sis_tabla_id' => 156, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1952
        SisTcampo::create(['s_campo' => 'DELETED_AT', 's_descripcion' => 'DELETED_AT', 'sis_tabla_id' => 156, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1953
        SisTcampo::create(['s_campo' => 'PRM_PRINCIPA_ID', 's_descripcion' => 'PRM_PRINCIPA_ID', 'sis_tabla_id' => 156, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => 'parametros as param1954', 's_idtarela' => 'param1954.id', 's_campsele' => 'param1954.nombre as nombre1954', 'sis_esta_id' => 1]); //1954
        SisTcampo::create(['s_campo' => 'SIS_DEPEN_ID', 's_descripcion' => 'SIS_DEPEN_ID', 'sis_tabla_id' => 156, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1955
        SisTcampo::create(['s_campo' => 'sis_esta_id', 's_descripcion' => 'sis_esta_id', 'sis_tabla_id' => 156, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1956
        SisTcampo::create(['s_campo' => 'SIS_NNAJ_ID', 's_descripcion' => 'SIS_NNAJ_ID', 'sis_tabla_id' => 156, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1957
        SisTcampo::create(['s_campo' => 'UPDATED_AT', 's_descripcion' => 'UPDATED_AT', 'sis_tabla_id' => 156, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1958
        SisTcampo::create(['s_campo' => 'user_crea_id', 's_descripcion' => 'user_crea_id', 'sis_tabla_id' => 156, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1959
        SisTcampo::create(['s_campo' => 'user_edita_id', 's_descripcion' => 'user_edita_id', 'sis_tabla_id' => 156, 'user_crea_id' => 1, 'user_edita_id' => 1, 's_tablrela' => '', 's_idtarela' => '', 's_campsele' => '', 'sis_esta_id' => 1]); //1960

    }
}