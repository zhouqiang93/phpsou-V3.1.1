<?php
/**
本程序版权为程序开发者guigou所有，关键位置已经截图存档，如盗用本系统做二次销售，我们将保留追究其法律责任的权力。
程序作者：guigou QQ：568435757
联系邮箱：13888221411@126.com
再次申明：程序属于原始开发，请尊重作者的劳动成果。
*/
error_reporting(0); 
require('global.php');
$id=$_GET['id'];
?>
<META http-equiv=Content-Type content=text/html;charset=utf-8>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EEF2FB;
	font-size:12px;
}

-->
</style>
<?php
$admin="select * from phpsou_admin where admin_id='$id'";
$admin=mysql_query($admin);
while($row=mysql_fetch_array($admin,MYSQL_ASSOC)) 
{
	$name=$row['adminname'];
	$password=$row['password'];
}
?>
<form id="configform" name="configform" method="post" action="?action=saveconfig&id=<?php echo $id;?>">
<div><div style="float:left; width:100px;">用户名：</div><div><input type="text" name="name" size="30" value="<?php echo $name;?>" /></div></div>
<div><div style="float:left; width:100px;">密码：</div><div><input type="password" name="password" size="30" value="" /></div></div>
<div>
  <div style="float:left; width:100px;"></div><div><input type="submit" value="确定提交" name="B1" /></div></div>
</form>
