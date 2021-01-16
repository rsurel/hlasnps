<?php
	include("config.php");
	
	$baglanti = mysql_connect($host, $username, $password);
	if ( !$baglanti ) {
		exit( "Bağlantı sağlanamadı." );
	}
	mysql_select_db( "$dbname" );
	
	$src = "rs4712959";
	//$src = $_GET["src"];
	$src = stripslashes($src);
	$src = mysql_real_escape_string($src);
	
	$query = " SELECT MAX(pos_hg38) AS pos_hg38_max FROM `tbl_genemaster` ";
	$sorgu = mysql_query($query);
	$kayit = mysql_fetch_array($sorgu);
	$pos_hg38_max = $kayit['pos_hg38_max'];
	
	
	$query = " SELECT MIN(pos_hg38) AS pos_hg38_min FROM `tbl_genemaster` ";
	$sorgu = mysql_query($query);
	$kayit = mysql_fetch_array($sorgu);
	$pos_hg38_min = $kayit['pos_hg38_min'];
	
		
	$query = " SELECT * FROM tbl_genemaster WHERE variant = '$src' ";
	$sorgu = mysql_query($query);
	
	if(mysql_num_rows($sorgu) > 0) {
		
		$kayit2 = mysql_fetch_array($sorgu);
		$id 		= $kayit2["master_id"];
		$variant 	= $kayit2["variant"];
		$pos_hg38 	= $kayit2["pos_hg38"];
		$g1_ens 	= $kayit2["g1_ens"];
		$g1_type 	= $kayit2["g1_type"];
		$g1_name 	= $kayit2["g1_name"];
		$g2_ens 	= $kayit2["g2_ens"];
		$g2_type 	= $kayit2["g2_type"];
		$g2_name 	= $kayit2["g2_name"];
		$g3_ens 	= $kayit2["g3_ens"];
		$g3_type 	= $kayit2["g3_type"];
		$g3_name 	= $kayit2["g3_name"];
		
		$g1_nbwd_id   = 0;
		$g1_nbwd_dist = 0;
		$g1_nfwd_id   = 0;
		$g1_nfwd_dist = 0;
		
		if($g1_name == "intergenic") {
			$gene_type = "INTERGENIC";
		}
		else if($g1_name != "intergenic" && $g2_name == "." && $g3_name == ".") {
			$gene_type = "OVERLAP = 1";
		}
		else if($g1_name != "intergenic" && $g2_name != "." && $g3_name == ".") {
			$gene_type = "OVERLAP = 2";
		}
		else if($g1_name != "intergenic" && $g2_name != "." && $g3_name != ".") {
			$gene_type = "OVERLAP = 3";
		}
		else {
			
		}
		
		
        if($g1_name == "intergenic") {
				
					
			$query = " SELECT * FROM tbl_genemaster WHERE pos_hg38 < '$pos_hg38' AND g1_name NOT IN ('intergenic') ORDER BY pos_hg38 DESC LIMIT 1";
			$sorgu3 = mysql_query($query);
				
			if(mysql_num_rows($sorgu3) > 0) {
					
				$kayit3 		= mysql_fetch_array($sorgu3);
				$nbwd_id 		= $kayit3["master_id"];
				$nbwd_pos_hg38 	= $kayit3["pos_hg38"];
				$nbwd_g1_name 	= $kayit3["g1_name"];
				$nbwd_g2_name 	= $kayit3["g2_name"];
				$nbwd_g3_name 	= $kayit3["g3_name"];
					
				$nbwd_g1_dist = $pos_hg38 - $nbwd_pos_hg38;
					
				echo $nbwd_g1_name;
				echo "(" . $nbwd_g1_dist . ")";
			}
			else {
				echo "**out of range**";
			}
				
			echo " <-BTW-> ";
				
			$query = " SELECT * FROM tbl_genemaster WHERE pos_hg38 > '$pos_hg38' AND g1_name NOT IN ('intergenic') ORDER BY pos_hg38 ASC LIMIT 1";
			$sorgu3 = mysql_query($query);
				
			if(mysql_num_rows($sorgu3) > 0) {
					
				$kayit3 		= mysql_fetch_array($sorgu3);
				$nfwd_id 		= $kayit3["master_id"];
				$nfwd_pos_hg38 	= $kayit3["pos_hg38"];
				$nfwd_g1_name 	= $kayit3["g1_name"];
				$nfwd_g2_name 	= $kayit3["g2_name"];
				$nfwd_g3_name 	= $kayit3["g3_name"];
					
				$nfwd_g1_dist = $nfwd_pos_hg38 - $pos_hg38;
				
				echo $nfwd_g1_name;
				echo "(" . $nfwd_g1_dist . ")";
			}
			else {
				echo "**out of range**";
			}
			
		}
		else if($g1_name == ".") {
			
		}
		else {
			echo $g1_name;
		}
	}
?>