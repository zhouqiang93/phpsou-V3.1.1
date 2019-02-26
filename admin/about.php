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
	
	case "del":
	     $id=intval($_GET["id"]);
		 mysql_query("delete from phpsou_about where about_id='".$id."'");
	break;
}

$about="select * from phpsou_about";
$about_query=mysql_query($about);
while($row=mysql_fetch_array($about_query,MYSQL_ASSOC)) 
{ 
   $arr[]=array("about_id"=>$row['about_id'],"title"=>$row['title'],"is_show"=>$row['is_show'],"url"=>$row['url']); 
} 
$smarty->assign("about",$arr); 


function saveconfig()
{
	$id=$_GET['id'];
	$title=$_POST['title'];
	$url=$_POST['url'];
	$sortid=$_POST['sortid'];
	$is_show=$_POST['is_show'];
	$content=$_POST['content'];
	if($id<>'')
	{mysql_query("update phpsou_about set title='$title',content='$content',is_show='$is_show',url='$url',sortid='$sortid' where about_id='$id'");jsalert("修改成功","about.php");}
	else
	{mysql_query("insert into phpsou_about(title,content,is_show,url,sortid) value ('$title','$content','$is_show','$url','$sortid')");jsalert("添加成功","about.php");}

}



$smarty->display('admin/about.tpl');
?>