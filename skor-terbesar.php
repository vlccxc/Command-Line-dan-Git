<?php
function skor_terbesar($arr){
  for($i = 0 ; $i < count($arr) ; $i++){
    $kelas[$arr[$i]["kelas"]] = [];
  }
  $key = array_keys($kelas);
  $nilai = 0;
  $index = 0;
  for($i = 0 ; $i < count($kelas) ; $i++){
    for($j = 0 ; $j < count($arr) ;$j++){
      if($arr[$j]["kelas"] == $key[$i]){
        if($nilai < $arr[$j]["nilai"]){
          $nilai = $arr[$j]["nilai"];
          $index = $j;
        }
      }
    }
    $kelas[$key[$i]] = $arr[$index];
  }
  echo "<pre>";
  return $kelas;
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