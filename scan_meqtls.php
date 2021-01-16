<?php
	include("config.php");
	
	$baglanti = mysql_connect($host, $username, $password);
	if ( !$baglanti ) {
		exit( "Bağlantı sağlanamadı." );
	}
	mysql_select_db("$dbname");
	
	//$src = "rs10058074";
	//$src = $_GET["src"];
	$src = stripslashes($src);
	$src = mysql_real_escape_string($src);
	
	$query = " SELECT * FROM tbl_meqtls WHERE tbl_meqtls_rsid = '$src' ";
	$sorgu = mysql_query($query);
	
	$num_row = mysql_num_rows($sorgu);
	?>
<div id="meqtls-container-<?php echo $src; ?>">
        <div class="collapsible">
        	<div class="result-header"><ul><li>meQTL Results (<?php echo $num_row; ?>)</li></ul></div>
	<?php
	if( $num_row > 0 ) {
		?>
		<div class="result-contents">
		<?php
		$line_num = 1;
		while($oku = mysql_fetch_assoc($sorgu)) {
			
			$meqtls_index		= $oku["tbl_meqtls_index"];
			$meqtls_rsid	 	= $oku["tbl_meqtls_rsid"];
			$meqtls_cpg_bios	= $oku["tbl_meqtls_cpg_bios"];
			$meqtls_cpgchr 		= $oku["tbl_meqtls_cpgchr"];
			$meqtls_pos_hg19	= $oku["tbl_meqtls_pos_hg19"];
			$meqtls_eqtmgene 	= $oku["tbl_meqtls_eqtmgene"];
			$meqtls_cistrans 	= $oku["tbl_meqtls_cistrans"];
			$meqtls_zscore 		= $oku["tbl_meqtls_zscore"];
			$meqtls_pvalue 		= $oku["tbl_meqtls_pvalue"];
			$meqtls_fdr	 		= $oku["tbl_meqtls_fdr"];
			?>
			 <div style="background-color:#FCF" align="center" width="80%">
                meQTL Result <strong><?php echo $line_num; ?></strong> for <?php echo $meqtls_rsid; ?>
                <br/>
                <strong>Target (CpG, chr, pos (hg19), eQTM)</strong>
            	<table class="blueTable" width="50%" align="center">
                	<tr>
                    	<th width="15%">CpG :</th>
                        <td><?php echo $meqtls_cpg_bios; ?></td>
                    </tr>
                </table>
                <br/>
                <table class="blueTable" width="75%" align="center">
                	<tr>
                    	<th>chr</th>
                        <th>pos (hg19)</th>
                        <th>eQTM</th>
                    </tr>
                    <tr>
                    	<td><?php echo $meqtls_cpgchr; ?></td>
                        <td><?php echo $meqtls_pos_hg19; ?></td>
                        <td><?php echo $meqtls_eqtmgene; ?></td>
                    </tr>
                </table>
                <br/>
                <strong>Statistics (Z Score, P Value, FDR)</strong>
                <br/>
                <table class="blueTable" width="75%" align="center">
                	<tr>
                    	<th>Z Score</th>
                        <th>P Value</th>
                        <th>FDR</th>
                    </tr>
                    <tr>
                    	<td><?php echo $meqtls_zscore; ?></td>
                        <td><?php echo $meqtls_pvalue; ?></td>
                        <td><?php echo $meqtls_fdr; ?></td>
                    </tr>
                </table>
                <br/>
            <br/>
            </div>
            <br/>
			<?php
			$line_num = $line_num + 1;
		}
		
		echo "</table>";
		
	}
	else {
		echo "<strong>No meQTL correlation for " . $src . "</strong>";
	}
	
	mysql_close($baglanti);
?>
	</div>
    </div>
</div>
