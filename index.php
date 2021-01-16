<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>HLAsnps</title>
</head>

<body>

<div class="container">
  <div class="header">
    <a href="index.php"><img src="img/hlasnps_logo.jpg" width="25%"/></a> 
    <!-- end .header -->
  </div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="index.php"><img src="img/homepage-icon.png" width="20"  align="left" hspace="5" />Home Page</a></li>
      <li><a href="#"><img src="img/info-icon.png" width="20"  align="left" hspace="5" />About</a></li>
      <li><a href="#"><img src="img/statistic-icon.png" width="20"  align="left" hspace="5" />Statistics</a></li>
      <li><a href="http://www.sopsnp.org"><img src="img/sopsnp_logo.jpg" width="20"  align="left" hspace="5" />sopSNP App</a></li>
    </ul>
    
    <form id="form1" name="form1" method="GET" action="index.php">
      <div align="left">
          <label><strong>Search HLAsnps:  </strong>
          <br/>
          <p>You can search multiple SNPs with new lines between SNPs or seperated with semicommas!</p>
            <textarea name="search" id="search" cols="21" rows="10" style="resize:vertical;"  placeholder="rs2395185&#x0a;rs1615&#x0a;rs633715&#x0a;&#x0a;or&#x0a;&#x0a;rs2395185;rs1615;rs633715"></textarea>
          </label>
          <br/>
          <input type="submit" value="Search" class="btn" />
      </div>
    </form>
    
    <div class="sidebar1" style="height:100%; width:100%">
    	<br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    </div>

    <!-- end .sidebar1 --></div>
  <div class="content">
    <h1>HLAsnps (DB Version <?php include("getSiteVersion.php"); ?>)</h1>
    <p>Functional assessment of HLA region SNPs </p>
    
    <?php include("search.php"); ?>
    
    <!-- end .content --></div>
    
  <div class="footer">
    <p>This web page has been published for experimental purposes and is still in development. You can report any detected errors to the developer.</p>
    <table width="95%" border="0" align="center">
      <tr>
        <td align="left" width="20%">VERSION: <?php include("getSiteVersion.php"); ?></td>
        <td align="center">Copyright&nbsp;&copy;&nbsp;&nbsp;2018&nbsp;&nbsp;EPROM Electronic Project & Microwave Inc. All Rights Reserved.</td>
        <td align="right" width="20%"><img src="img/eprom.jpg" href="http:/www.epromvector.com" width="50%"/></td>
      </tr>
    </table>

  <!-- end .footer --></div>
  <!-- end .container --></div>

</body>
<?php include("dataReport.php"); ?>
</html>
