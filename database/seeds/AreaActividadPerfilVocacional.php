<?php

use Illuminate\Database\Seeder;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfArea;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfActividade;

class AreaActividadPerfilVocacional extends Seeder
{
    public function run(){
        //AREAS
        PvfArea::create(['nombre' => 'Oficios', 'descripcion' => 'Área de Servicios (Panadería y pastelería, auxiliar de cocina, auxiliar de carnes, mesa y bar, logística de eventos, asistente en iluminación, estética y belleza, peluquería, barbería, servicios generales, auxiliar de operaciones).', 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfArea::create(['nombre' => 'Administrativo', 'descripcion' => 'Área Administrativa (Nomina y prestaciones sociales, asistencia en gestión administrativa, recursos humanos, gestión turismo y hotelera, contabilidad y finanzas, secretaría, asistentes de compras y ventas).', 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 2
        PvfArea::create(['nombre' => 'Social', 'descripcion' => 'Área Social (Recreación comunitaria, ejecución de eventos deportivos, juzgamiento y reglamentación deportiva, auxiliar de enfermería, auxiliar de radiología, camillero, auxiliar en instrumentación quirúrgica, auxiliar de farmacia, atención a primera infancia, asistente de pedagogía escolar).', 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 3
        PvfArea::create(['nombre' => 'Artístico', 'descripcion' => 'Área Artística (Expresión dancística, ejecución de artes circenses, ejecución musical con instrumentos funcionales. Bailarín, coreógrafo).', 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 4
        PvfArea::create(['nombre' => 'Informática y Tecnología', 'descripcion' => 'Área Informática y Tecnológica (Elaboración de audiovisuales, sistemas, pre-prensa digital para medios impresos, diseño e integración multimedia, fotografía, auxiliar de tecnología).', 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 5
        PvfArea::create(['nombre' => 'Mecánica Industrial', 'descripcion' => 'Área Mecánica (Mantenimiento de motores diesel, mantenimiento de motocicletas, mantenimiento de equipos de cómputo, asistente mecánico industrial).', 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 6

        //actividades
        PvfActividade::create(['nombre' => 'Me gustaría aprender de programación de computadores y de tecnología en general.', 'descripcion' => 'na', 'area_id' => 5, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Creo que tengo habilidades en la preparación de bebidas con licor o frutas, cocteles y preparaciones varias que impliquen algún licor.', 'descripcion' => 'na', 'area_id' => 1, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gusta investigar sobre el medio ambiente, ecología y el cambio climático.', 'descripcion' => 'na', 'area_id' => 3, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Yo creo que sería bueno(a) dibujando y aprendiendo a ilustrar con tecnología.', 'descripcion' => 'na', 'area_id' => 5, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me llaman la atención los temas de selección de personal y entrevistar personal para un trabajo.', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gusta y soy bueno(a) para hacer cuentas.', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Resuelvo problemas de cálculo matemático sin dificultad.', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gusta cuidar mi salud y compartir consejos de salud con otras personas. ', 'descripcion' => 'na', 'area_id' => 3, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría aprender música y tocar un instrumento musical.', 'descripcion' => 'na', 'area_id' => 4, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Soy bueno(a) siguiendo órdenes para cumplir objetivos', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Estoy interesado (a) en la reparación de aparatos eléctricos o electrónicos.', 'descripcion' => 'na', 'area_id' => 6, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Quiero aprender a diseñar, dibujar o hacer avisos de publicidad.', 'descripcion' => 'na', 'area_id' => 5, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Soy bueno(a) organizando alguna actividad y cuando comparto, me gusta atender personas y hacerlas sentir bien.', 'descripcion' => 'na', 'area_id' => 1, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Los temas de salud y el cuidado de personas enfermas me llaman la atención.', 'descripcion' => 'na', 'area_id' => 3, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Considero que tengo alma de artista, pintor, actor(íz), tengo habilidades para el arte.', 'descripcion' => 'na', 'area_id' => 4, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gusta cocinar y pienso que estudiando cocina puedo llegar a crear nuevas recetas. ', 'descripcion' => 'na', 'area_id' => 1, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Se me facilita o me gusta hacer reparaciones mecánicas.', 'descripcion' => 'na', 'area_id' => 6, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría estudiar algún tema relacionado con la enfermería o salud.', 'descripcion' => 'na', 'area_id' => 3, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me considero hábil ayudando a otros a resolver sus conflictos.', 'descripcion' => 'na', 'area_id' => 3, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo habilidades para el dibujo, la pintura, el arte y la actuación.', 'descripcion' => 'na', 'area_id' => 4, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo curiosidad por los temas de tecnología y me interesa conocer sobre nuevos inventos.', 'descripcion' => 'na', 'area_id' => 5, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'He tenido experiencia cuidando o ayudando a cuidar alguna persona enferma o en situación de discapacidad.', 'descripcion' => 'na', 'area_id' => 3, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Cuando se presenta un problema, propongo el diálogo.', 'descripcion' => 'na', 'area_id' => 5, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Estoy interesado(a) en arreglar objetos de todo tipo como motores de carro, motos, electrodomésticos, máquinas de coser.', 'descripcion' => 'na', 'area_id' => 6, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Mis amigos acuden a mi cuando tienen problemas con el uso o arreglo de aparatos tecnológicos.', 'descripcion' => 'na', 'area_id' => 5, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Un tema que me interesa son las ventas, aprender a mostrar un producto, hacer cuentas y pensar en un negocio a futuro.', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría realizar actividades o ejercicios con personas en general.', 'descripcion' => 'na', 'area_id' => 3, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo interés por el modelaje, la estética y la belleza.', 'descripcion' => 'na', 'area_id' => 1, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Los temas que se relacionan con venta de cualquier producto me llaman la atención.', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Considero que me gusta el trabajo em equipo, que soy paciente, me concentro en una tarea con facilidad y soy creativo. ', 'descripcion' => 'na', 'area_id' => 5, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría aprender el desarrollo de video juegos o herramientas tecnológicas.', 'descripcion' => 'na', 'area_id' => 5, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Al cocinar tengo en cuenta ser cuidadoso con la organización de utensilios y la preparación de alimentos.', 'descripcion' => 'na', 'area_id' => 1, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría aprender a administrar un negocio.', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 2, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo habilidades para escribir cuentos, novelas, libros y me gusta leer.', 'descripcion' => 'na', 'area_id' => 4, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me interesa entender cómo funciona una máquina cuando está trabajando.', 'descripcion' => 'na', 'area_id' => 6, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustan los temas relacionados con la organización de documentos de oficina.', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo habilidades para la comunicación y siento que soy muy sociable.', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo habilidades para la comunicación, para pensar en posibles soluciones y para resolver conflictos.', 'descripcion' => 'na', 'area_id' => 3, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría saber cómo crear una campaña de publicidad.', 'descripcion' => 'na', 'area_id' => 4, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría conocer sobre la industria de los alimentos.', 'descripcion' => 'na', 'area_id' => 6, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría fabricar productos alimenticios de consumo masivo.', 'descripcion' => 'na', 'area_id' => 1, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría aprender sobre cómo ser secretario(a) en una empresa.', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gusta el diseño y la decoración de espacios, viviendas o cualquier espacio.', 'descripcion' => 'na', 'area_id' => 4, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría aprender sobre la ecología, el medio ambiente y el ecoturismo y tener una empresa de turismo.', 'descripcion' => 'na', 'area_id' =>2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me llaman mucho la atención los temas de medicina tradicional y sus beneficios en la salud.', 'descripcion' => 'na', 'area_id' => 3, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Es interesante ver y aprender cómo se arregla una máquina.', 'descripcion' => 'na', 'area_id' => 6, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo habilidades para ayudar a atender personas que padecen alguna enfermedad.', 'descripcion' => 'na', 'area_id' => 3, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría conocer o hacer mantenimiento a dispositivos tecnológicos como celulares, computadores y tablets.', 'descripcion' => 'na', 'area_id' => 5, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo facilidad para leer manuales de fabricación de máquinas y dispositivos tecnológicos.', 'descripcion' => 'na', 'area_id' => 6, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Encuentro importante reparar y rescatar el valor de un cuadro, una pintura, un jarrón, entre otros.', 'descripcion' => 'na', 'area_id' => 4, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Quiero aprender a hacer mantenimiento de aparatos electrónicos y computadoras.', 'descripcion' => 'na', 'area_id' => 5, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo habilidades de comunicación con las y los niños y me gustaría saber cómo enseñarles cualquier tema.', 'descripcion' => 'na', 'area_id' => 3, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Para actividades de tipo administrativo considero que es importante entender sobre contabilidad, organización de archivos, saber tomar notas en una reunión. ', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría ser auxiliar en salud dental.', 'descripcion' => 'na', 'area_id' => 1, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Para mí son muy importantes los temas de recreación comunitaria, ayuda social, la organización de espacios de práctica deportiva, etc.', 'descripcion' => 'na', 'area_id' => 3, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo buenas ideas para crear nuevos productos.', 'descripcion' => 'na', 'area_id' => 6, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gusta recomendar dietas y recetas de cocina.', 'descripcion' => 'na', 'area_id' => 1, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría trabajar en una empresa como técnico de producción.', 'descripcion' => 'na', 'area_id' => 6, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Organizo muy bien mis espacios de trabajo, me gusta planear mis actividades y cumplir con ellas. ', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo habilidades en la reparación y mantenimiento de automotores.', 'descripcion' => 'na', 'area_id' => 6, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'El trabajo con elementos como el hierro, el cobre, el aluminio son de mi agrado.', 'descripcion' => 'na', 'area_id' => 6, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo experiencia en la organización de eventos sociales como cumpleaños, matrimonios y fiestas.', 'descripcion' => 'na', 'area_id' => 1, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo habilidad enseñar a otras personas sobre un tema en específico, explico y me entienden bien.', 'descripcion' => 'na', 'area_id' => 3, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Cuando recibo dinero lo primero que hago es ordenar por prioridad mis pagos.', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gusta la fotografía.', 'descripcion' => 'na', 'area_id' => 4, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gusta y soy hábil ayudando a otras personas a organizar sus actividades, tener en cuenta compromisos y tareas.', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría ser parte de un grupo de teatro.', 'descripcion' => 'na', 'area_id' => 4, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo habilidades y me gustaría aprender a hacer videos.', 'descripcion' => 'na', 'area_id' => 5, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me intereso en temas como atención al cliente.', 'descripcion' => 'na', 'area_id' => 1, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me interesa la cultura, el arte, la creatividad, la expresión artística.', 'descripcion' => 'na', 'area_id' => 4, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Siempre estoy pensando en ideas de negocios o nuevas posibilidades de trabajo. ', 'descripcion' => 'na', 'area_id' => 2, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me intereso por aprender sobre el mantenimiento y arreglo de aparatos eléctricos y electrónicos.', 'descripcion' => 'na', 'area_id' => 5, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gusta practicar y enseñar a cualquier persona diferentes deportes.', 'descripcion' => 'na', 'area_id' => 3, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me interesan los temas de mejorar la imagen facial y corporal aplicando diferentes técnicas de belleza.', 'descripcion' => 'na', 'area_id' => 1, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me llaman la atención los temas de arreglo de jardines y parques.', 'descripcion' => 'na', 'area_id' => 4, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Soy creativo y me gustaría aprender a desarrollar nuevas recetas de cocina.', 'descripcion' => 'na', 'area_id' => 1, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Tengo habilidades para hablar en público e improvisar.', 'descripcion' => 'na', 'area_id' => 4, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gusta pensar, crear y hacer planes nuevos y distintos con mis amigos.', 'descripcion' => 'na', 'area_id' => 4, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gusta organizar adecuadamente los diferentes materiales que se requieren para una actividad.', 'descripcion' => 'na', 'area_id' => 1, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
        PvfActividade::create(['nombre' => 'Me gustaría aprender de mecánica automotriz y administrar un taller de mecánica.', 'descripcion' => 'na', 'area_id' => 6, 'estusuario_id' => 46, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]); // 1
    }
}
