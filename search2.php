<?php
		
	//$search = "rs185819;rs176461";
	//$search = $_GET["search"];
	$search = stripslashes($search);
	$search = mysql_real_escape_string($search);	
		
	$src_exp = explode('\r\n', $search);
	$src_len = count($src_exp);
	
	for( $ctr_result = 0; $ctr_result < $src_len; $ctr_result++ ) {
		$src = $src_exp[$ctr_result];
		include("result.php");
	}
	
?>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
	$(document).ready(function() {
    	$(".collapsible .result-contents").hide();
		$(".collapsible .result-header").click(function() {
        	$(this).next().toggle();
        });
    });
	
	$(document).ready(function() {
    	$(".collapsible .src-contents").hide();
		$(".collapsible .src-header").click(function() {
        	$(this).next().toggle();
        });
    });
</script>