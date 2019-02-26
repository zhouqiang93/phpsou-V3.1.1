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
		 mysql_query("delete from phpsou_admin where admin_id='".$id."'");
	break;
}

$admin="select * from phpsou_admin";
$admin_query=mysql_query($admin);
while($row=mysql_fetch_array($admin_query,MYSQL_ASSOC)) 
{ 
   $arr[]=array("admin_id"=>$row['admin_id'],"adminname"=>$row['adminname'],"lastlogintime"=>$row['lastlogintime'],"lastloginip"=>$row['lastloginip']);  
} 
$smarty->assign("admin",$arr); 


function saveconfig()
{
	$id=$_GET['id'];
	$name=$_POST['name'];
	$password=md5($_POST['password']);
	$quanxian=md5($_POST['name'].$_POST['password']);
	
	if($id<>'')
	{mysql_query("update phpsou_admin set adminname='$name',password='$password',quanxian='$quanxian' where admin_id='$id'");jsalert("修改成功","admin.php");}
	else
	{
	$result=mysql_query("SELECT * FROM phpsou_admin where adminname='$name'");
	$num=mysql_num_rows($result);
	if($num>0){jsalert("有相同的用户名","admin.php");}
	else
	{mysql_query("insert into phpsou_admin(adminname,password,quanxian) value ('$name','$password','$quanxian')");jsalert("添加成功","admin.php");}}

}



$smarty->display('admin/admin.tpl');
?>