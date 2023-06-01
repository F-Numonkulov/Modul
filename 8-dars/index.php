<?php

	//strlen(), strtolower(), strtoupper(), ucfirst()
	//strlen() - matndagi baytlar sonnini qaytaradi,
	//strtolower() - barcha harflarni kichik qiladi,
	//strtoupper() - barcha harflarni katta qiladi,
	//ucfirst() - 1-so'zdagi 1-harfni katta qiladi,

		/*$str_1 = "Assalomu Alaykum";
		$str_1 =  ucfirst($str_1);*/
	// echo $str_1;

	//substr(), strpos(), strrpos()
	//substr() - Matndan berilgan positsiyadan boshlab, kerakli miqdorda belgini olish.
	//strpos() - matnda qidirilayotgan qiymatni turgan positsiyasini aniqlaydi
	//strrpos() - matnda qidirilayotgan qiymatni turgan positsiyasini aniqlaydi, eng oxiri topilganini,

	$str_2 = "Salom php dasturchi! php ajoyib dasturlash tili";




	$find = "php";


	$ches = strpos($str_2, $find);

	$hl = substr($str_2, $ches);

	echo($ches ? "Ushbu so'z topildi $find <br>" : $hl = '');

	echo $hl."<br>";

	echo $ches;

	echo $str_2;





/*	$str_2 = strpos($str_2, $find); //alom*/
 ?>