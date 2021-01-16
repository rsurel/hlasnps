<?php
	include("config.php");
	
	$baglanti = mysql_connect($host, $username, $password);
	if ( !$baglanti ) {
		exit( "Bağlantı sağlanamadı." );
	}
	mysql_select_db( "$dbname" );
		
	$query = " SELECT * FROM tbl_searchCtr ORDER BY tbl_searchCtr_hitCtr DESC LIMIT 10 ";
	$sorgu = mysql_query($query);
	
	if(mysql_num_rows($sorgu) > 0) {
	    ?>
	        <table width="20%" class="blueTable" align="left">
	            <tr>
                    <th scope="col">TOP 10 Searchs</th>
                </tr>
	    <?php
	    while($kayit2 = mysql_fetch_assoc($sorgu)) {
	
    		$searchCtr_id		= $kayit2["tbl_searchCtr_id"];
    		$searchCtr_variant 	= $kayit2["tbl_searchCtr_variant"];
    		$searchCtr_hitCtr 	= $kayit2["tbl_searchCtr_hitCtr"];
    		$searchCtr_prefRate = $kayit2["tbl_searchCtr_prefRate"];
    		
            ?>
            <tr>
                <td><a href="index.php?search=<?php echo $searchCtr_variant; ?>"><?php echo $searchCtr_variant; ?></a></td>
            </tr>
            <?php
	    }
	    
	    ?>
	        </table>
		    <br/>
	    <?php
        
	}
?>