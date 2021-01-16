<?php
	
	include("config.php");
	
	if(!empty($_GET)) {
		
		$baglanti = mysql_connect($host, $username, $password);
		if ( !$baglanti ) {
			exit( "Bağlantı sağlanamadı." );
		}
		mysql_select_db( "$dbname" );
		
		$search = $_GET["search"];
		$search = stripslashes($search);
		$search = mysql_real_escape_string($search);
		
		$query = " SELECT * FROM tbl_master WHERE tbl_master_variant = '$search' ";
		
		$sorgu = mysql_query($query);
		
		if(mysql_num_rows($sorgu) > 0) {
			
			$kayit = mysql_fetch_array($sorgu);
			$id 		= $kayit["tbl_master_id"];
			$variant 	= $kayit["tbl_master_variant"];
			$chr 		= $kayit["tbl_master_chr"];
			$pos_hg38 	= $kayit["tbl_master_pos_hg38"];
			$alleles 	= $kayit["tbl_master_alleles"];
			$g1_ens 	= $kayit["tbl_master_g1_ens"];
			$g1_type 	= $kayit["tbl_master_g1_type"];
			$g1_name 	= $kayit["tbl_master_g1_name"];
			$g2_ens 	= $kayit["tbl_master_g2_ens"];
			$g2_type 	= $kayit["tbl_master_g2_type"];
			$g2_name 	= $kayit["tbl_master_g2_name"];
			$g3_ens 	= $kayit["tbl_master_g3_ens"];
			$g3_type 	= $kayit["tbl_master_g3_type"];
			$g3_name 	= $kayit["tbl_master_g3_name"];
			
			$variant_sub = substr($variant,0,2);
			if($variant_sub == "rs" || $variant_sub == "RS") {
				$variant_type = "SNP";
				
			}
			else if($variant_sub == "cd" || $variant_sub == "CD") {
				$variant_type = "DELETION";
				
			}
			
			else if($variant_sub == "cm" || $variant_sub == "CM") {
				$variant_type = "DELETION";
				
			}
			else {
				$variant_type = "na";
			}
			
			?>
            
			<table width="100%" class="blueTable">
              <tr>
                <th>
                	<label class="result"><?php echo " ".$variant." " ?></label>
                    <label class="result_dt"><?php echo " ".$variant_type." " ?></label>
                </th>
                <td align="right">#dbid:<?php echo $id ?></td>
              </tr>
            </table>

			<table class="blueTable">
              <tr>
                <th scope="row" align="left">CHR </th>
                <td>&nbsp;</td>
				<td width="80%"><?php echo $chr ?></td>
			  </tr>
			  <tr>
				<th scope="row"  align="left">POSITION HG38</th>
                <td>&nbsp;</td>
				<td><?php echo $pos_hg38 ?></td>
			  </tr>
			  <tr>
				<th scope="row"  align="left">ALLELES </th>
                <td>&nbsp;</td>
				<td><?php include("alleles_img_print.php"); ?></td>
			  </tr>
			</table>
            
            <h2>&nbsp;</h2>
            
            <table class="blueTable">
              <thead>
                  <tr>
                    <th>&nbsp;</th>
                    <th>ENSEMBL</th>
                    <th>TYPE</th>
                    <th>NAME</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <th scope="row">GENE 1</th>
                    <td><?php echo $g1_ens ?></td>
                    <td><?php echo $g1_type ?></td>
                    <td><?php echo $g1_name ?></td>
                  </tr>
                  <tr>
                    <th scope="row">GENE 2</th>
                    <td><?php echo $g2_ens ?></td>
                    <td><?php echo $g2_type ?></td>
                    <td><?php echo $g2_name ?></td>
                  </tr>
                  <tr>
                    <th scope="row">GENE 3</th>
                    <td><?php echo $g3_ens ?></td>
                    <td><?php echo $g3_type ?></td>
                    <td><?php echo $g3_name ?></td>
                  </tr>
              </tbody>
            </table>

            
            <?php
			
		}
		else {
			echo "<h4>No results found for search term <b><i>" . $search . "</i></b></h4>";
		}
	}
	else {
		
		echo "
		<br/>
		<h3>Index2.php başlığı</h3>
		<p>Bu paragraf temiz index sayfası içindir.</p>
		<br/>
		";
		
	}
?>