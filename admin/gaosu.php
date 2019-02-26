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
if($action=="save")
{
	$dizhi = $_POST['dizhi'];
	$duankou = $_POST['duankou'];
	$y = $_POST['y'];
	mysql_query("update phpsou_sphinx set dizhi='$dizhi',duankou='$duankou',y='$y' where id=1");
}

$ss=mysql_query("select * from phpsou_sphinx where id=1");
while($row=mysql_fetch_array($ss,MYSQL_ASSOC)) 
{ 
   if($row['y']==1){$y="checked";}
} 
$smarty->assign("y",$y); 

$smarty->display('admin/gaosu.tpl');
?>