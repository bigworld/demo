<?php
//生成指定长度的随机字符串
function random_string($length = 15, $incase = true){    
	$pool = 'abcdefghijkmnpqrstuvwxyz';    
	$pool .= '23456789';    
	if ($incase) {        
		$pool .= 'ABCDEFGHIJKMNPQRSTUVWXYZ';    
	}    
	$poollen = strlen($pool);    
	mt_srand((double) microtime() * 1000000);    
	$string = '';    
	for ($i = 0; $i < $length; $i++) {        
		$string .= substr($pool, (mt_rand() % ($poollen)), 1);    
	}    
	return $string;
} 
