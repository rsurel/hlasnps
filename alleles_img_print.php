<?php
	$strlen = strlen($alleles);
	$Sstr_allel = true;
	
	for( $i = 0; $i <= $strlen; $i++ ) {
		$char = substr($alleles, $i, 1);
		if($char != "A" && $char != "C" && $char != "G" && $char != "T"){
			if($char != "/" && $char != "-" && $char != "." && $char != ""){
				$Sstr_allel = false;
				break;
			}
		}
	}
	
	if($Sstr_allel == true) {
		for( $i = 0; $i <= $strlen; $i++ ) {
			$char = substr($alleles, $i, 1);
			
			if($char == "A") {
				?> <img src="img/a.png" width="15px" /> <?php
			}
			else if($char == "C") {
				?> <img src="img/c.png" width="15px" /> <?php
			}
			else if($char == "G") {
				?> <img src="img/g.png" width="15px" /> <?php
			}
			else if($char == "T") {
				?> <img src="img/t.png" width="15px" /> <?php
			}
			else {
				echo "<b>" . $char . "</b>";
			}
		}
	}
	else {
		echo $alleles;
	}
?>