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
$site="
		select * from phpsou_url_0 where url='$id' union all 
		select * from phpsou_url_1 where url='$id' union all 
		select * from phpsou_url_2 where url='$id' union all 
		select * from phpsou_url_3 where url='$id' union all 
		select * from phpsou_url_4 where url='$id' union all 
		select * from phpsou_url_5 where url='$id'";
$tt=mysql_query($site);
while($row=@mysql_fetch_array($tt,MYSQL_ASSOC)) 
{
	$tt=$row['site'];
}
$url=$id;
if($id==''){$site='';}else{$site=$tt;}

?>
<form id="configform" name="configform" method="post" action="?action=saveconfig&id=<?php echo $id;?>">
<div><div style="float:left; width:100px;">网站链接：</div><div><input type="text" name="url" size="30" value="<?php echo $url;?>" /></div></div>
<div><div style="float:left; width:100px;">是否已抓取：</div><div><input type="text" name="site" size="30" value="<?php echo $site;?>" />未抓取默认为0</div></div>

<div><div style="float:left; width:100px;"></div><div><input type="submit" value="确定提交" name="B1" /></div></div>
</form>
