<?php
	
	include("config.php");
		
	$baglanti = mysql_connect($host, $username, $password);
	if ( !$baglanti ) {
	  exit( "Bağlantı sağlanamadı." );
	}
	mysql_select_db( $dbname );
	
	$search = $_GET["search"];
	$search = stripslashes($search);
	$search = mysql_real_escape_string($search);
	
	$query = " SELECT * FROM tbl_global WHERE tbl_global_name = '$site_version' ";
	
	$sorgu = mysql_query($query);
	
	if(mysql_num_rows($sorgu) > 0) {
		
	  $kayit = mysql_fetch_array($sorgu);
	  $id   = $kayit["tbl_master_id"];
	  $name = $kayit["tbl_master_variant"];
	  $desc = $kayit["tbl_master_chr"];
	  $val  = $kayit["tbl_master_pos_hg38"];
	  
	  echo $val;
	}
	else {
		echo "Err: Version read error!";
	}
?>