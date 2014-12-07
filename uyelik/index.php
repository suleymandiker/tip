<?php

	header("Content-type: text/html; charset=utf8");

	// ?do=erbilen&isim=tayfun&site=prototurk
	// erbilen/tayfun/prototurk
	
	$par = array_filter(explode("/", @$_GET["par"]));
	if ( @function_exists($par[0]) )
	{
		call_user_func($par[0], $par);
	}
	else
	{
		echo "anasayfa";
	}
	
	/*
	 * Erbilen Fonksiyonu
	 */
	function erbilen($par)
	{
		print_r($par);
	}
	
	/*
	 * Üye Fonksiyonu
	 */
	function uye($par)
	{
		$uye_adi = $par[1];
		if ($uye_adi == "tayfunerbilen")
		{
			echo "burası üyenin profili";
		}
		else
		{
			echo "yanlış kullanıcı adı girdiniz!";
		}
	}