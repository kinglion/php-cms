<?php

	function get_mobile(){
		if(isset($_GET['m'])){
			$m = !empty($_GET['m']) ? '1' : '0';
		}else{
			$s = is_mobile();
			$m = $s ? '1' : '0';
		}
		return $m;
	}
?>