<?php

function palindrome_angka($angka) {
	$hasil = 0;
	if($angka >= 0 && $angka < 9) $hasil = $angka+1;
	else if($angka > 9){
		do{
			$reverse  = strrev($angka);
			if($angka == $reverse){
				$hasil = $angka;
				break;
			}
			$angka++;
		}while($angka != $reverse);
	}
	echo $hasil . "<br>";
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>