<?php
function pasangan_terbesar($angka){
// kode di sini
	$var = strval($angka);
	$len = strlen($var);
	$val1 = 0;
	$val2 = 0;
	for($i=0;$i<$len-1;$i++)
	{
		$val1 = intval(substr($var, $i, 2));
		if($val1>$val2)
		{
			$val2 = $val1;
		}
	}
	return $val2;
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>