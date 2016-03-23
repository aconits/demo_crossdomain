<?php

	$data = json_encode(array('un message', 'un 2eme message'));
	$str = '<script type="text/javascript">
		var data = '.$data.';
		
		
		window.parent.postMessage(data, "*");
	</script>';
	echo $str;
