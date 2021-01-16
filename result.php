<?php
	//$src = "rs1046089";
	//$src = $_GET["src"];
	//$src = stripslashes($src);
	//$src = mysql_real_escape_string($src);	
?>

<div id="src-container-<?php echo $src; ?>" >
  <div class="collapsible">
  	<div class="src-header"><ul><li><?php echo $src; ?></li></ul></div>
      <div class="src-contents">
        <?php include("scan_master.php"); ?>
        <?php include("scan_gwas.php"); ?>
        <?php include("scan_phewas.php"); ?>
        <?php include("scan_meqtls.php"); ?>
      </div>
  </div>
</div>