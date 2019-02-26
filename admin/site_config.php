<?php
/**
本程序版权为程序开发者guigou所有，关键位置已经截图存档，如盗用本系统做二次销售，我们将保留追究其法律责任的权力。
程序作者：guigou QQ：568435757
联系邮箱：13888221411@126.com
再次申明：程序属于原始开发，请尊重作者的劳动成果。
*/
error_reporting(0); 
require('../include/conn_list.php');
require('global.php');

$action=$_GET["action"];
switch ($action)
{
	case "saveconfig":
	saveconfig();
	break;
}

$site_config="select * from phpsou_siteconfig";
$site_query=mysql_query($site_config);
while($row=mysql_fetch_array($site_query,MYSQL_ASSOC)) 
{ 
   $name=$row['name'];
   $url=$row['url'];
   $adtitle=$row['adtitle'];
   $icp=$row['icp'];
   $qq=$row['qq'];
   $Keywords=$row['Keywords'];
   $description=$row['description'];
   $copyright=$row['copyright'];
} 
$smarty->assign("name",$name); 
$smarty->assign("url",$url);
$smarty->assign("adtitle",$adtitle);
$smarty->assign("icp",$icp);
$smarty->assign("qq",$qq);
$smarty->assign("Keywords",$Keywords);
$smarty->assign("description",$description);
$smarty->assign("copyright",$copyright);




function saveconfig()
{
	$name=$_POST['name'];
	$url=$_POST['url'];
	$adtitle=$_POST['adtitle'];
	$icp=$_POST['icp'];
	$qq=$_POST['qq'];
	$Keywords=$_POST['Keywords'];
	$description=$_POST['description'];
	$copyright=$_POST['copyright'];
	mysql_query("update phpsou_siteconfig set name='$name',url='$url',adtitle='$adtitle',icp='$icp',qq='$qq',Keywords='$Keywords',description='$description',copyright='$copyright'");
	jsalert("设置成功!","site_config.php");
}

$smarty->display('admin/site_config.tpl');
?>