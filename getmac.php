<?php
	
	$komut= 'getmac';
	exec($komut,$deger);
	$client_mac = '';
	
	$deger_sliced = array_slice($deger, 3);
	
	foreach($deger_sliced as $yaz) {
		$client_mac = $client_mac . '<br/>' . $yaz;
	}
	
	echo $client_mac;
?>