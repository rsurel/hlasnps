<?php
	
	if(!empty($_GET)) {
		
		$search = $_GET["search"];
		include("search2.php");
		
	}
	else {
		
		?>
		<br/>
		<h3>Index2.php başlığı</h3>
		<p> Yukarıdaki bağlar.</p>
        
		<?php
		
		include("get_top10_search.php");
	}
?>
