<?php

function palindrome_angka($angka) {
  // tulis kode di sini
	while(1)
	{
		$angka = $angka + 1;
		$temp = $angka;   
	    $new = 0;   
	    while (floor($temp)) {   
	        $d = $temp % 10;   
	        $new = $new * 10 + $d;   
	        $temp = $temp/10;   
	    }
	    if ($new == $angka)
	    {   
	        $hasil = $angka;
	        break;
	    }
	}
	return $hasil;
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>