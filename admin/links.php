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

$start=($_GET["p"]-1)*20;
if($start<0){$start='0';}

$action=$_GET["action"];
switch ($action)
{
	case "saveconfig":
	saveconfig();
	break;
	
	case "del":
	     $id=$_GET["id"];
		 mysql_query("delete from phpsou_links where url='".$id."'");
	break;
}

$site="select * from phpsou_links";
$site_query=mysql_query($site." limit $start,20");
$num=mysql_num_rows(mysql_query($site));
while($row=mysql_fetch_array($site_query,MYSQL_ASSOC)) 
{ 
   $arr[]=array("id"=>$row['id'],"url"=>$row['url'],"title"=>$row['title']); 
} 
$smarty->assign("site",$arr); 


function saveconfig()
{
	$id=$_GET['id'];
	$site=$_POST['site'];
	$url=$_POST['url'];
	if($site<>'1'){$site=0;}

	if($id<>'')
	{
	mysql_query("update phpsou_links set url='$url',site='$site' where url='$id'");
	jsalert("修改成功","url.php");}
	else
	{mysql_query("insert into phpsou_links(url,site) value ('$url','$site')");jsalert("添加成功","url.php");}

}



require_once("../include/inc_page.php");
$yeshu = ceil($num/20);
$page = new Page($yeshu,"?wd=".$wd_en."&p=");
$smarty->assign("page","<a href='?p=1'>第一页</a>&nbsp;".$page->show()."&nbsp;<a href='?p=$yeshu'>最后一页</a>"); 

$smarty->display('admin/links.tpl');
?>