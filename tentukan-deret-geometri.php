<?php
function tentukan_deret_geometri($arr) {
// kode di sini
	$len = count($arr);
	for($i=0;$i<$len-2;$i++)
	{
		$sel1 = $arr[$i+2]/$arr[$i+1];
		$sel2 = $arr[$i+1]/$arr[$i];
		if($sel1 != $sel2)
		{
			return 0;
		}
	}
	return 1;
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>