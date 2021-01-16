<?php
	include("config.php");
	
	$baglanti = mysql_connect($host, $username, $password);
	if ( !$baglanti ) {
		exit( "Bağlantı sağlanamadı." );
	}
	mysql_select_db("$dbname");
	
	//$src = "rs1046089";
	//$src = $_GET["src"];
	$src = stripslashes($src);
	$src = mysql_real_escape_string($src);
	
	$query = " SELECT * FROM tbl_gwas WHERE tbl_gwas_rsid = '$src' ";
	$sorgu = mysql_query($query);
	
	$num_row = mysql_num_rows($sorgu);
	?>
		<div id="gwas-container-<?php echo $src; ?>" width="90%">
        <div class="collapsible">
        	<div class="result-header"><ul><li>GWAS Results (<?php echo $num_row; ?>)</li></ul></div>
        
	<?php
	if( $num_row > 0 ) {
		?>
        <div class="result-contents">
		<table width="100%" class="blueTable" align="center">
			<tr>
				<th>Result#</th>
				<th>GWASdb</th>
				<th>GRASP</th>
			</tr>
		<?php
		$line_num = 1;
		
		while($oku = mysql_fetch_assoc($sorgu)) {
			
			$gwas_index		= $oku["tbl_gwas_index"];
			$gwas_rsid		= $oku["tbl_gwas_rsid"];
			$gwas_gwasdb	= $oku["tbl_gwas_gwasdb"];
			$gwas_grasp 	= $oku["tbl_gwas_grasp"];
			?>
			<tr>
                <td> <?php echo $line_num; ?> </td>
                <td> <?php echo $gwas_gwasdb; ?> </td>
				<td> <ul>
			<?php
			
			$grasp_exp = explode('|', $gwas_grasp);
			
			for($ctr = 0; $ctr < count($grasp_exp); $ctr++ ) {
				echo "<li>" . $grasp_exp[$ctr] . "</li>";
			}
            echo "</ul></td>";
			
			$line_num = $line_num + 1;
		}
		
		echo "</tr></table>";
		
	}
	else {
		echo "<strong>No GWAS association for " . $src . "</strong>";
	}
	
	mysql_close($baglanti);
?>
	</div>
    </div>
</div>