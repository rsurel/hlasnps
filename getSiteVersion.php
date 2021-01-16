<?php
	
	include("config.php");
		
		$baglanti = mysql_connect($host, $username, $password);
		if ( !$baglanti ) {
			exit( "Bağlantı sağlanamadı." );
		}
		mysql_select_db( "$dbname" );
		
		$query = " SELECT * FROM tbl_global WHERE name = 'site_version' ";
		$sorgu = mysql_query($query);
		
		if(mysql_num_rows($sorgu) > 0) {
			
			$kayit = mysql_fetch_array($sorgu);
			$id   = $kayit["id"];
			$name = $kayit["name"];
			$desc = $kayit["dsc"];
			$val  = $kayit["value_var"];
			
			echo $val;
		}
		else {
			echo "Err: Version read error!";
		}
?>