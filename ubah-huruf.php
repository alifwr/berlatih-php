<?php
function ubah_huruf($string){
//kode di sini
	$len = strlen($string);
	for($i=0;$i<$len;$i++)
	{
    	$char = $string[$i];
		$string[$i] = ++$char;
	}
	return $string;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>