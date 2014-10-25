<?php

	$x=array(1,2,3,4,5,6);
	$y=array(4,5,6,7,8,9);


	function square($i,$j){
			return $i*$j;
	}

	function shita($a,$n){
			return $n*array_sum(array_map("square",$a,$a))-pow(array_sum($a),2);
	}

	function down($a,$b,$n){
			return sqrt(shita($a,$n))*sqrt(shita($b,$n));
	}

	function up($a,$b,$n){
			return $n*array_sum(array_map("square",$a,$b))-array_sum($a)*array_sum($b);
	}

	function r($a,$b,$n){
			return up($a,$b,$n)/down($a,$b,$n);
	}

	echo r($x,$y,count($x))."\n";
	?>
