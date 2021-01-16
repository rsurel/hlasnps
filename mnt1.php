<?php
	include("config.php");
	
	$baglanti = mysql_connect($host, $username, $password);
	if ( !$baglanti ) {
		exit( "Bağlantı sağlanamadı." );
	}
	mysql_select_db( "$dbname" );
	
	$snp = $_GET["snp"];
	$snp = stripslashes($snp);
	$snp = mysql_real_escape_string($snp);
	
	$query = " SELECT MAX(pos_hg38) AS pos_hg38_max FROM `tbl_genemaster` ";
	$sorgu = mysql_query($query);
	$kayit = mysql_fetch_array($sorgu);
	$pos_hg38_max = $kayit['pos_hg38_max'];
	
	
	$query = " SELECT MIN(pos_hg38) AS pos_hg38_min FROM `tbl_genemaster` ";
	$sorgu = mysql_query($query);
	$kayit = mysql_fetch_array($sorgu);
	$pos_hg38_min = $kayit['pos_hg38_min'];
	
		
	$query = " SELECT * FROM tbl_genemaster WHERE variant = '$snp' ";
	$sorgu = mysql_query($query);
	
	$kayit2 = mysql_fetch_array($sorgu);
	$id 		= $kayit2["master_id"];
	$variant 	= $kayit2["variant"];
	$chr 		= $kayit2["chr"];
	$pos_hg38 	= $kayit2["pos_hg38"];
	$alleles 	= $kayit2["alleles"];
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
				
				echo "INTERGENIC: [";
					
				$query = " SELECT * FROM tbl_genemaster WHERE pos_hg38 < '$pos_hg38' AND g1_name NOT IN ('intergenic') ORDER BY pos_hg38 DESC LIMIT 1";
				$sorgu3 = mysql_query($query);
				
				if(mysql_num_rows($sorgu3) > 0) {
					
					$kayit3 		= mysql_fetch_array($sorgu3);
					$id_nbwd 		= $kayit3["master_id"];
					$pos_hg38_nbwd 	= $kayit3["pos_hg38"];
					$g1_nbwd_name 	= $kayit3["g1_name"];
					$g2_nbwd_name 	= $kayit3["g2_name"];
					$g3_nbwd_name 	= $kayit3["g3_name"];
					
					$g1_nbwd_dist = $pos_hg38 - $pos_hg38_nbwd;
					
					echo $g1_nbwd_name;
					echo "(" . $g1_nbwd_dist . ")";
				}
				else {
					echo "**out of range**";
				}
				
				echo " <-BTW-> ";
				
				$query = " SELECT * FROM tbl_genemaster WHERE pos_hg38 > '$pos_hg38' AND g1_name NOT IN ('intergenic') ORDER BY pos_hg38 ASC LIMIT 1";
				$sorgu3 = mysql_query($query);
				
				if(mysql_num_rows($sorgu3) > 0) {
					
					$kayit3 		= mysql_fetch_array($sorgu3);
					$id_nfwd 		= $kayit3["master_id"];
					$pos_hg38_nfwd 	= $kayit3["pos_hg38"];
					$g1_nfwd_name 	= $kayit3["g1_name"];
					$g2_nfwd_name 	= $kayit3["g2_name"];
					$g3_nfwd_name 	= $kayit3["g3_name"];
					
					$g1_nfwd_dist = $pos_hg38_nfwd - $pos_hg38;
					
					echo $g1_nfwd_name;
					echo "(" . $g1_nfwd_dist . ")";
				}
				else {
					echo "**out of range**";
				}
				
				echo "]";
			}
			else if($g1_name == ".") {
				
			}
			else {
				echo $g1_name;
			}
        ?>