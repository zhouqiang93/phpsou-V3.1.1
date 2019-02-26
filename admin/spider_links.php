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

$num_0="select * from phpsou_links";
$num_0=mysql_query($num_0);
$num_0=mysql_num_rows($num_0);



$smarty->assign("num_0",$num_0);


$smarty->display('admin/spider_links.tpl');
?>
