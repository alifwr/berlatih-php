<?php

function papan_catur($angka) {
// tulis kode di sini
	for($i=0;$i<$angka;$i++)
	{
		if($i%2)
		{
			for($j=1;$j<$angka;$j++)
			{
				echo "&nbsp#";
			}
		}
		else
		{
			for($j=0;$j<$angka;$j++)
			{
				echo "#&nbsp";
			}
		}
		echo "<br>";
	}
	echo "<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/