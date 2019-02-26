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
	case "site":
		 mysql_query("TRUNCATE TABLE phpsou_site");
	break;
	case "url":
		 mysql_query("TRUNCATE TABLE phpsou_url");
	break;
	case "links":
		 mysql_query("TRUNCATE TABLE phpsou_links");
	break;
	case "all":
		mysql_query("TRUNCATE TABLE phpsou_site");
		mysql_query("TRUNCATE TABLE phpsou_url");
		mysql_query("TRUNCATE TABLE phpsou_links");
	break;
}


$smarty->display('admin/qingkong.tpl');
?>