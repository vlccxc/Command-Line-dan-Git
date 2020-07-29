<?php
function ubah_huruf($string){
	$ubah;
	for($i = 0 ; $i < strlen($string) ; $i++){
		$ubah = ord($string[$i]);
		$ubah = chr($ubah+1);
		echo $ubah;
	}
	echo "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>