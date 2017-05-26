<?php 
	
$data = $_GET["url"];
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Method:GET");	
$url = $data;
$html = file_get_contents($url);
echo $html;
	
?>