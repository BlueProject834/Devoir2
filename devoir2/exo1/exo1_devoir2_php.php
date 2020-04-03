<?php 


function CouperChaine($str,$car){
	$tab=explode($car, $str);
	return $tab;
}

$str="JAVA C++ PHP BD SRI";
$car=" ";
print_r(CouperChaine($str,$car));


?>