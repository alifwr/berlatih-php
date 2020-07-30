<?php
function skor_terbesar($arr){
//kode di sini
  $dim = count($arr);
    $laravel = 0;
    $reactN = 0;
    $reactJ = 0;
    for($i=0;$i<$dim;$i++)
    {
      if($arr[$i]['kelas'] == 'Laravel')
        {
          if($arr[$i]['nilai']>$laravel)
            {
              $laravel = $arr[$i]['nilai'];
                $larName = $arr[$i]['nama'];
                $larKelas = $arr[$i]['kelas'];
            }
        }
        else if($arr[$i]['kelas'] == 'React Native')
        {
          if($arr[$i]['nilai']>$reactN)
            {
              $reactN = $arr[$i]['nilai'];
                $reacNName = $arr[$i]['nama'];
                $reacNKelas = $arr[$i]['kelas'];
            }
        }
        else
        {
          if($arr[$i]['nilai']>$reactJ)
            {
              $reactJ = $arr[$i]['nilai'];
                $reacJName = $arr[$i]['nama'];
                $reacJKelas = $arr[$i]['kelas'];
            }
        }
    }
    $laravel = array("nama"=>$larName, "kelas"=>$larKelas, "nilai"=>$laravel);
    $reactNative = array("nama"=>$reactNName, "kelas"=>$reactNKelas, "nilai"=>$reactN);
    $reactJS = array("nama"=>$reactJName, "kelas"=>$reactJKelas, "nilai"=>$reactJ);
    $hasil = array($laravel, $reactNative, $reactJS);
    
  return $hasil;
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>