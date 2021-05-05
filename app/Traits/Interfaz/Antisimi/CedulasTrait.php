<?php

namespace App\Traits\Interfaz\Antisimi;

use App\Models\fichaIngreso\NnajUpi;
use App\Models\Simianti\Ge\GeNnajDocumento;
use Illuminate\Support\Facades\Auth;

/**
 * actuliza un nnaj en el nuevo desarrollo con la información que se encuentra en el antiguo simi
 */
trait CedulasBienTrait
{

    public $cedubien = '4644654,
    26612675,
    29729974,
    31541100,
    31976426,
    32378972,
    1000002291,
    1000002765,
    1000003150,
    1000004379,
    1000061963,
    1000115305,
    1000120317,
    1000121678,
    1000124736,
    1000127111,
    1000137272,
    1000213345,
    1000217225,
    1000225916,
    1000240084,
    1000257329,
    1000319663,
    1000334511,
    1000339408,
    1000455649,
    1000470322,
    1000474609,
    1000514139,
    1000573373,
    1000576414,
    1000579329,
    1000602752,
    1000620869,
    1000713777,
    1000720867,
    1000726161,
    1000778261,
    1000784048,
    1000786565,
    1000787048,
    1000791849,
    1000805534,
    1000806398,
    1000806722,
    1000862779,
    1000986209,
    1000988337,
    1001049268,
    1001049465,
    1001054756,
    1001060603,
    1001061045,
    1001083637,
    1001115874,
    1001170949,
    1001173764,
    1001174664,
    1001197355,
    1001201283,
    1001271904,
    1001276119,
    1001278287,
    1001315431,
    1001340869,
    1001346680,
    1002460995,
    1002744344,
    1003306452,
    1003520049,
    1003648325,
    1003710186,
    1004473216,
    1005084922,
    1005205920,
    1005605346,
    1005725987,
    1005726624,
    1005927639,
    1006026311,
    1006122418,
    1006594481,
    1006769380,
    1006993027,
    1007099736,
    1007106355,
    1007242891,
    1007296051,
    1007372967,
    1007473425,
    1007497112,
    1007513356,
    1007514628,
    1007538412,
    1007614607,
    1007718692,
    1007727475,
    1007773535,
    1007952202,
    1010007840,
    1010056972,
    1010115807,
    1010142341,
    1010146820,
    1010160064,
    1010174877,
    1010183843,
    1010184655,
    1010189738,
    1010207018,
    1010220266,
    1010223005,
    1010224239,
    1010224277,
    1010226168,
    1010226625,
    1010243283,
    1010246508,
    1010841509,
    1011202116,
    1012329323,
    1012398709,
    1012398915,
    1012417118,
    1012423020,
    1012423535,
    1012429490,
    1012431914,
    1012433275,
    1012442485,
    1012444049,
    1012458892,
    1012464471,
    1012464900,
    1012464959,
    1012468629,
    1012916603,
    1013117993,
    1013269110,
    1013594610,
    1013595682,
    1013602552,
    1013641146,
    1013647124,
    1013647290,
    1013648368,
    1013658414,
    1013689581,
    1014243805,
    1014257122,
    1014479782,
    1015463198,
    1015470632,
    1016003182,
    1016095436,
    1018408165,
    1019002170,
    1019119237,
    1019127253,
    1019762294,
    1020750387,
    1020754401,
    1020828809,
    1021316304,
    1021392332,
    1021666948,
    1021667895,
    1021680326,
    1022371239,
    1022390600,
    1022393420,
    1022394231,
    1022395927,
    1022396898,
    1022402555,
    1022433179,
    1022925858,
    1022937598,
    1022947180,
    1022948387,
    1022974154,
    1022979898,
    1022985423,
    1022990696,
    1022991072,
    1022992318,
    1022992980,
    1023005445,
    1023016071,
    1023034048,
    1023034724,
    1023037292,
    1023038168,
    1023242481,
    1023366448,
    1023389948,
    1023866137,
    1023885006,
    1023921799,
    1023923534,
    1023929163,
    1023939602,
    1023947623,
    1023955185,
    1023955612,
    1023957204,
    1023960746,
    1023971986,
    1023972501,
    1023975028,
    1023977781,
    1024476556,
    1024480672,
    1024557877,
    1024563959,
    1024566327,
    1024569414,
    1024570168,
    1024574110,
    1024577921,
    1024578024,
    1024581726,
    1024583024,
    1024586717,
    1024591222,
    1024597521,
    1024602396,
    1025140013,
    1025140812,
    1026255706,
    1026276088,
    1026279953,
    1026295239,
    1026295523,
    1026301359,
    1026304172,
    1026304611,
    1026573726,
    1026580019,
    1027523600,
    1028782484,
    1028784648,
    1028785975,
    1028821401,
    1028843055,
    1028864723,
    1028892399,
    1029280968,
    1029283922,
    1029284586,
    1029285268,
    1029288009,
    1030521941,
    1030558660,
    1030609578,
    1030634943,
    1030643126,
    1030651089,
    1030656001,
    1030657797,
    1030694722,
    1031120234,
    1031129322,
    1031137015,
    1031138139,
    1031146329,
    1031148876,
    1031154408,
    1031156087,
    1031166570,
    1031179920,
    1031640944,
    1032429826,
    1032677830,
    1033676217,
    1033676654,
    1033685689,
    1033691393,
    1033698603,
    1033717340,
    1033739704,
    1033743521,
    1033764169,
    1033772791,
    1033780940,
    1033782501,
    1033783887,
    1033788858,
    1033789462,
    1033790024,
    1033791659,
    1033792358,
    1033799702,
    1033807237,
    1033808776,
    1033816489,
    1034288230,
    1034298572,
    1034657270,
    1036645788,
    1045715582,
    1050726501,
    1055750520,
    1056506610,
    1064187348,
    1066085699,
    1070584671,
    1070782456,
    1072006084,
    1072492566,
    1073668986,
    1073669065,
    1073670977,
    1073673608,
    1073696608,
    1073713472,
    1078747511,
    1079187520,
    1080262351,
    1088336980,
    1096482098,
    1096482935,
    1096807296,
    1098796339,
    1106776854,
    1111784611,
    1115421294,
    1115914427,
    1118120541,
    1118121902,
    1121219320,
    1121706129,
    1121707845,
    1121885555,
    1136684518,
    1136886564,
    1136911233,
    1141340707,
    1151200265,
    1192756080,
    1192814633,
    1193521981,
    1193522409,
    1206214750,
    1206218267,
    1218213218,
    1218213914,
    1233498468,
    1233507121,
    1233888432,
    1233888638,
    1233899264,
    1233907998,
    30214,
    25401102,
    1013672815,
    1026294667,
    1033819570,
    1075088192,
    1000226936,
    1000732035,
    1000454529,
    1001343423,
    1007297741,
    1010222495,
    1012459889,
    1019088436,
    1014295294,
    1016053962,
    1017165774,
    1021392332,
    1022371132,
    1022433620,
    1023013069,
    1024597252,
    1026276088,
    1026585636,
    1028782484,
    1066085699,
    1086047267,
    1073669065,
    1086724711,
    1088315046,
    1122416885,
    1118544939,
    1233512804,
    1000002730,
    1000003150,
    1001057297,
    1000134274,
    1012356069,
    1022989848,
    1033678294,
    1077975571';

private $cedulmal='4644654,
26612675,
29729974,
31541100,
31976426,
32378972,
1000002291,
1000002765,
1000003150,
1000004379,
1000061963,
1000115305,
1000120317,
1000121678,
1000124736,
1000127111,
1000137272,
1000213345,
1000217225,
1000225916,
1000240084,
1000257329,
1000319663,
1000334511,
1000339408,
1000455649,
1000470322,
1000474609,
1000514139,
1000573373,
1000576414,
1000579329,
1000602752,
1000620869,
1000713777,
1000720867,
1000726161,
1000778261,
1000784048,
1000786565,
1000787048,
1000791849,
1000805534,
1000806398,
1000806722,
1000862779,
1000986209,
1000988337,
1001049268,
1001049465,
1001054756,
1001060603,
1001061045,
1001083637,
1001115874,
1001170949,
1001173764,
1001174664,
1001197355,
1001201283,
1001271904,
1001276119,
1001278287,
1001315431,
1001340869,
1001346680,
1002460995,
1002744344,
1003306452,
1003520049,
1003648325,
1003710186,
1004473216,
1005084922,
1005205920,
1005605346,
1005725987,
1005726624,
1005927639,
1006026311,
1006122418,
1006594481,
1006769380,
1006993027,
1007099736,
1007106355,
1007242891,
1007296051,
1007372967,
1007473425,
1007497112,
1007513356,
1007514628,
1007538412,
1007614607,
1007718692,
1007727475,
1007773535,
1007952202,
1010007840,
1010056972,
1010115807,
1010142341,
1010146820,
1010160064,
1010174877,
1010183843,
1010184655,
1010189738,
1010207018,
1010220266,
1010223005,
1010224239,
1010224277,
1010226168,
1010226625,
1010243283,
1010246508,
1010841509,
1011202116,
1012329323,
1012398709,
1012398915,
1012417118,
1012423020,
1012423535,
1012429490,
1012431914,
1012433275,
1012442485,
1012444049,
1012458892,
1012464471,
1012464900,
1012464959,
1012468629,
1012916603,
1013117993,
1013269110,
1013594610,
1013595682,
1013602552,
1013641146,
1013647124,
1013647290,
1013648368,
1013658414,
1013689581,
1014243805,
1014257122,
1014479782,
1015463198,
1015470632,
1016003182,
1016095436,
1018408165,
1019002170,
1019119237,
1019127253,
1019762294,
1020750387,
1020754401,
1020828809,
1021316304,
1021392332,
1021666948,
1021667895,
1021680326,
1022371239,
1022390600,
1022393420,
1022394231,
1022395927,
1022396898,
1022402555,
1022433179,
1022925858,
1022937598,
1022947180,
1022948387,
1022974154,
1022979898,
1022985423,
1022990696,
1022991072,
1022992318,
1022992980,
1023005445,
1023016071,
1023034048,
1023034724,
1023037292,
1023038168,
1023242481,
1023366448,
1023389948,
1023866137,
1023885006,
1023921799,
1023923534,
1023929163,
1023939602,
1023947623,
1023955185,
1023955612,
1023957204,
1023960746,
1023971986,
1023972501,
1023975028,
1023977781,
1024476556,
1024480672,
1024557877,
1024563959,
1024566327,
1024569414,
1024570168,
1024574110,
1024577921,
1024578024,
1024581726,
1024583024,
1024586717,
1024591222,
1024597521,
1024602396,
1025140013,
1025140812,
1026255706,
1026276088,
1026279953,
1026295239,
1026295523,
1026301359,
1026304172,
1026304611,
1026573726,
1026580019,
1027523600,
1028782484,
1028784648,
1028785975,
1028821401,
1028843055,
1028864723,
1028892399,
1029280968,
1029283922,
1029284586,
1029285268,
1029288009,
1030521941,
1030558660,
1030609578,
1030634943,
1030643126,
1030651089,
1030656001,
1030657797,
1030694722,
1031120234,
1031129322,
1031137015,
1031138139,
1031146329,
1031148876,
1031154408,
1031156087,
1031166570,
1031179920,
1031640944,
1032429826,
1032677830,
1033676217,
1033676654,
1033685689,
1033691393,
1033698603,
1033717340,
1033739704,
1033743521,
1033764169,
1033772791,
1033780940,
1033782501,
1033783887,
1033788858,
1033789462,
1033790024,
1033791659,
1033792358,
1033799702,
1033807237,
1033808776,
1033816489,
1034288230,
1034298572,
1034657270,
1036645788,
1045715582,
1050726501,
1055750520,
1056506610,
1064187348,
1066085699,
1070584671,
1070782456,
1072006084,
1072492566,
1073668986,
1073669065,
1073670977,
1073673608,
1073696608,
1073713472,
1078747511,
1079187520,
1080262351,
1088336980,
1096482098,
1096482935,
1096807296,
1098796339,
1106776854,
1111784611,
1115421294,
1115914427,
1118120541,
1118121902,
1121219320,
1121706129,
1121707845,
1121885555,
1136684518,
1136886564,
1136911233,
1141340707,
1151200265,
1192756080,
1192814633,
1193521981,
1193522409,
1206214750,
1206218267,
1218213218,
1218213914,
1233498468,
1233507121,
1233888432,
1233888638,
1233899264,
1233907998,
29334,
25041102,
101372815,
102694667,
103381957,
107588192,
1000226636,
1000932035,
1000957529,
1001343523,
1007297731,
1010224595,
1012549889,
1014088436,
1014295204,
1016055962,
1017165114,
1021392322,
1022371432,
1022483620,
1023010369,
1024597253,
1026276085,
1026585631,
1028782482,
1066058699,
1068046762,
1073669005,
1086721711,
1088315846,
1112416885,
1185442104,
1233512604,
10000002730,
10000003150,
10001057297,
10001342704,
10123566069,
10229898948,
10300678294,
10779755741';

public function get()
{
    # code...
}

}
