<?php
	include("config.php");
	
	$baglanti = mysql_connect($host, $username, $password);
	if ( !$baglanti ) {
		exit( "Bağlantı sağlanamadı." );
	}
	mysql_select_db( "$dbname" );
	
	//$src = "rs4711095";
	//$src = $_GET["src"];
	$src = stripslashes($src);
	$src = mysql_real_escape_string($src);	
		
	$query = " SELECT * FROM tbl_master WHERE tbl_master_variant = '$src' ";
	$sorgu = mysql_query($query);
	
	if(mysql_num_rows($sorgu) > 0) {
	
		$kayit2 			= mysql_fetch_array($sorgu);
		$master_id			= $kayit2["tbl_master_id"];
		$master_variant 	= $kayit2["tbl_master_variant"];
		$master_chr 		= $kayit2["tbl_master_chr"];
		$master_pos_hg38 	= $kayit2["tbl_master_pos_hg38"];
		$alleles 			= $kayit2["tbl_master_alleles"];
		
		//$src = $master_variant;
        ?>
        <div style="background:#009; color:#FFF">Master DB Results:</div>
        <table class="blueTable" align="center">
        	<tr>
            	<th width="15%" align="right">CHR :</th>
                <td><?php echo $master_chr; ?></td>
            </tr>
            <tr>
            	<th width="15%" align="right">pos (hg38):</th>
                <td><?php echo $master_pos_hg38; ?></td>
            </tr>
            <tr>
            	<th width="15%" align="right">ALLELES :</th>
                <td><?php include("alleles_img_print.php"); ?></td>
            </tr>
            <tr>
            	<th width="15%" align="right">GENE :</th>
                <td><?php include("scan_gene.php"); ?></td>
            </tr>
        </table>
        <?php
        
        //----- searchCtr table update:  ------------
        
        $query = " UPDATE tbl_searchCtr SET tbl_searchCtr_hitCtr = (tbl_searchCtr_hitCtr + 1) WHERE tbl_searchCtr_id = '$master_id' ";
	    $sorgu = mysql_query($query);
	}
?>