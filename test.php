<?php

function rec($x){
	if($x >0){
		echo "<pre>";
		var_dump($x);
		--$x;
		rec($x);
	}
}

rec(222);