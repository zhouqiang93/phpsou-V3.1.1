<?php
/**
本程序版权为程序开发者guigou所有，关键位置已经截图存档，如盗用本系统做二次销售，我们将保留追究其法律责任的权力。
程序作者：guigou QQ：568435757
联系邮箱：13888221411@126.com
再次申明：程序属于原始开发，请尊重作者的劳动成果。
*/
$file = "./include/lock.txt";
if(!file_exists($file))
{
	header("Location: ./install");
}

require('include/conn.php');
$siteconfig="select * from phpsou_siteconfig";
$site_query=mysql_query($siteconfig);
while($site=mysql_fetch_array($site_query,MYSQL_ASSOC)) 
{
	$title=$site['adtitle'];
	$name=$site['name'];  
	$keywords=$site['Keywords'];
	$description=$site['description'];
}
$smarty->assign("title",$title); 
$smarty->assign("name",$name); 
$smarty->assign("keywords",$keywords); 
$smarty->assign("description",$description); 



$sql="select * from phpsou_about where is_show order by sortid asc";
$cate_query=mysql_query($sql);
while($cate=mysql_fetch_array($cate_query,MYSQL_ASSOC)) 
{ 
   @$about[]=array("title"=>$cate[title],"about_id"=>$cate[about_id],"url"=>$cate[url]); 
} 
$smarty->assign("about",$about); 

$smarty->display('index.tpl');
?>
