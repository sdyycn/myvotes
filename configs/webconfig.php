<?php
//获取网站基信息
function getWebseo($db){
	$result=$db->query("select * from ejob_siteconfig");
	$website = array();
	$website=$db->fetch_result($result);
	return  $website;
	}
$web = array();
$web = getWebseo($db);
$webtitle = $web[0]["sitename"]; 
$webkeywords = $web[0]["sitekeywords"]; 
$webdesp =$web[0]["sitedescribe"]; 
$copyright = "软件有限公司";
$author = "软件有限公司";
?>
