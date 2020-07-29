<?php
function pasangan_terbesar($angka){
	$arr = (string) $angka;
	$max = (string) $arr[0] . (string)$arr[1];
	for($i = 1 ; $i < strlen($arr)-1 ; $i++){
		if($max < (string) $arr[$i] . (string)$arr[$i+1]){
			$max = (string) $arr[$i] . (string)$arr[$i+1];
		}
	}
	return $max . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>