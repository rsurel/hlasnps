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
	
	$query = " SELECT * FROM tbl_phewas WHERE tbl_phewas_rsid = '$src' ";
	$sorgu = mysql_query($query);
	
	$num_row = mysql_num_rows($sorgu);
	?>
		<div id="phewas-container-<?php echo $src; ?>">
        <div class="collapsible">
        	<div class="result-header"><ul><li>PheWAS Results (<?php echo $num_row; ?>)</li></ul></div>
	<?php
	if( $num_row > 0 ) {
		?>
        <div class="result-contents">
		<table width="100%" class="blueTable" align="center">
			<tr>
				<th>result</th>
				<th>phewas</th>
				<th>OR</th>
				<th>P</th>
			</tr>
		<?php
		$line_num = 1;
		
		while($oku = mysql_fetch_assoc($sorgu)) {
			
			$phewas_index	= $oku["tbl_phewas_index"];
			$phewas_rsid	= $oku["tbl_phewas_rsid"];
			$phewas_phewas	= $oku["tbl_phewas_phewas"];
			$phewas_or 		= $oku["tbl_phewas_or"];
			$phewas_p		= $oku["tbl_phewas_p"];
			?>
			<tr>
                <td> <?php echo $line_num; ?> </td>
                <td> <?php echo $phewas_phewas; ?> </td>
                <td> <?php echo $phewas_or; ?> </td>
                <td> <?php echo $phewas_p; ?> </td>
			</tr>
			<?php
			$line_num = $line_num + 1;
		}
		
		echo "</table>";
		
	}
	else {
		echo "<strong>No PheWAS association for " . $src . "</strong>";
	}
	
	mysql_close($baglanti);
?>
	</div>
    </div>
</div>
