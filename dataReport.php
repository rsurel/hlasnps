﻿<?php
	include("config.php");
	include("getDataReport.php");
	
	$baglanti = mysql_connect($host, $username, $password);
	if ( !$baglanti ) {
		exit( "Bağlantı sağlanamadı." );
	}
	mysql_select_db( "$dbname" );
	
	
	$data = new GetDataPlugin(); //CLIENT bilgilerini öğrenme
	
	/********** CLIENT MAC ADRESİ ÖĞRENME **********/
	$komut= 'getmac';
	exec($komut,$deger);
	$client_mac = '';
	
	$deger_sliced = array_slice($deger, 3);
	
	foreach($deger_sliced as $yaz) {
		$client_mac = $client_mac . '<br/>' . $yaz;
	}
	
	//echo $client_mac;
	/***********************************************/
	
	
	$client_ip = $data->ip();
	$client_os = $data->os();
	$client_browser = $data->browser();
	$client_height = $data->height();
	$client_width = $data->width();
	$client_javaenabled = $data->javaenabled();
	$client_cookieenabled = $data->cookieenabled();
	$client_language = $data->language();
	$client_architecture = $data->architecture();
	$client_device = $data->device();
	$client_geo_country = $data->geo('country');
	$client_geo_region = $data->geo('region');
	$client_geo_continent = $data->geo('continent');
	$client_geo_city = $data->geo('city');
	$client_geo_logitude = $data->geo('logitude');
	$client_geo_latitude = $data->geo('latitude');
	$client_geo_currency = $data->geo('currency');
	$client_provetor = $data->provetor();
	$client_agent = $data->agent();
	$client_referer = $data->referer();
	$client_getdate = $data->getdate();
	
	/*$guncelleme = mysql_query(" INSERT INTO tbl_client_report (client_ip, client_os, client_browser, client_height, client_width, client_javaenabled, client_cookieenabled, client_language, client_architecture, client_device, client_geo_country, client_geo_region, client_geo_continent, client_geo_city, client_geo_logitude, client_geo_latitude, client_geo_currency, client_provetor, client_agent, client_referer, client_getdate) values ('$client_ip', '$client_os', '$client_browser', '$client_height', '$client_width', '$client_javaenabled', '$client_cookieenabled', '$client_language', '$client_architecture', '$client_device', '$client_geo_country', '$client_geo_region', '$client_geo_continent', '$client_geo_city', '$client_geo_logitude', '$client_geo_latitude', '$client_geo_currency', '$client_provetor', '$client_agent', '$client_referer', '$client_getdate') ");*/
	
	/*$guncelleme = mysql_query(" INSERT INTO tbl_client_report (client_ip, client_getdate, client_browser, client_height, client_width, client_javaenabled) values ('$client_ip', '$client_getdate', '$client_browser', '$client_height', '$client_width', '$client_javaenabled') ");*/
	
	$query_report = " INSERT INTO tbl_client_report (client_ip, client_mac, client_os, client_browser, client_language, client_architecture, client_device, client_geo_country, client_geo_region, client_geo_continent, client_geo_city, client_geo_logitude, client_geo_latitude, client_geo_currency, client_provetor, client_agent, client_referer, client_getdate) values ('$client_ip', '$client_mac', '$client_os', '$client_browser', '$client_language', '$client_architecture', '$client_device', '$client_geo_country', '$client_geo_region', '$client_geo_continent', '$client_geo_city', '$client_geo_logitude', '$client_geo_latitude', '$client_geo_currency', '$client_provetor', '$client_agent', '$client_referer', '$client_getdate') ";
	$guncelleme = mysql_query($query_report);
	
	if(0) {							// 1 ise ekranda bilgiler görüntülenir
		echo "<br>IP               : ".$client_ip;
		echo "<br>Operative System : ".$client_os;
		echo "<br>Browser          : ".$client_browser;
		echo "<br>Screen height    : ".$client_height;
		echo "<br>Screen width     : ".$client_width;
		echo "<br>Java enabled     : ".$client_javaenabled;
		echo "<br>Cookie enabled   : ".$client_cookieenabled;
		echo "<br>Language         : ".$client_language;
		echo "<br>Architecture     : ".$client_architecture;
		echo "<br>Device           : ".$client_device;
		echo "<br>Country          : ".$client_geo_country;
		echo "<br>Region           : ".$client_geo_region;
		echo "<br>Continent        : ".$client_geo_continent;
		echo "<br>City             : ".$client_geo_city;
		echo "<br>Logitude         : ".$client_geo_logitude;
		echo "<br>Latitude         : ".$client_geo_latitude;
		echo "<br>Currency         : ".$client_geo_currency;
		echo "<br>Provetor         : ".$client_provetor;
		echo "<br>Agent            : ".$client_agent;
		echo "<br>Referer          : ".$client_referer;
		echo "<br>Date             : ".$client_getdate;
	}
?>