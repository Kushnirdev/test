<?php
//omg
//error_reporting (null);
/*$pms = ini_get('post_max_size');
$key = $pms{strlen($pms)-1};
echo true;	
	if ($key=='G'):
		echo $pms*1000000000;
	elseif ($key=='M'):
		echo $pms*1000000;
	elseif ($key=='K'):
		echo $pms*1000;
	else: echo $pms*1;
	endif;
	echo $key;
	*/
	/*
	function myCount($item, $mode=0){
		if (is_null($item))
			return 0;
		if (!is_array($item))
			return 1;
		$cnt=0;
		foreach ($item as $n){
			if ($mode==1 and is_array($n))
				$cnt+=myCount ($n, 1);
			$cnt++;
		}
		return $cnt;
	}
	$ts=array('a',10,true);
	$a=null;
	$b=123;
	echo myCount($b);
	*/
	
	date_default_timezone_set('Europe/Kiev');
	$dtime= mktime(9,30,00,1,18,2038);
	echo "$dtime";
$now=getdate();
$mybd= mktime(9,30,00,1,21,2019);
echo'<pre>';
print_r ($now);	
echo'</pre>';
echo date("d-m-y h:i:s")."<br>";
$cnt = $mybd-$now{0};
echo "<h1>till my BD $cnt seconds!</h1><br>";
/*function test($t){
	global $a;
	$check = $t - $a;
	echo $check."<br>";
}
$a=10;
$vob = test(20);
*/
?>
some changes for git lessons<br>

fill some chenges in master branch