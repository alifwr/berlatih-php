<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
	$len = count($arr);
	for($i=0;$i<$len-2;$i++)
	{
		$sel1 = $arr[$i+2]-$arr[$i+1];
		$sel2 = $arr[$i+1]-$arr[$i];
		if($sel1 != $sel2)
		{
			return 0;
		}
	}
	return 1;
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>