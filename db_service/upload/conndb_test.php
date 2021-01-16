<?php
    include("config.php");
    
    echo "Test db connection: ";
    
    $baglanti = mysql_connect($host, $username, $password);
	
	if ( !$baglanti ) {
		echo "Bağlantı sağlanamadı.";
	}
	else {
	    echo "Bağlantı OK.";
	}
	
	mysql_select_db( "$dbname" );
	
	$sorgu = mysql_query(" SELECT * FROM tbl_linklist ORDER BY prefrate DESC ");
	
	if(mysql_num_rows($sorgu) > 0)  {
	    
	    echo "-sql OK";
	    
	}
?>
