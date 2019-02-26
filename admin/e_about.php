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
$about="select * from phpsou_about where about_id='$id'";
$about=mysql_query($about);
while($row=mysql_fetch_array($about,MYSQL_ASSOC)) 
{
	$title=$row['title'];
	$content=$row['content'];
	$is_show=$row['is_show'];
	$url=$row['url'];
	$sortid=$row['sortid'];
}
?>
<form id="configform" name="configform" method="post" action="?action=saveconfig&id=<?php echo $id;?>">
<div><div style="float:left; width:100px;">单页标题：</div><div><input type="text" name="title" size="30" value="<?php echo $title;?>" /></div></div>
<div><div style="float:left; width:100px;">URL：</div><div><input type="text" name="url" size="30" value="<?php echo $url;?>" /></div></div>
<div><div style="float:left; width:100px;">排序：</div><div><input type="text" name="sortid" size="30" value="<?php echo $sortid;?>" /></div></div>
<div><div style="float:left; width:100px;">是否显示：</div><div><input name="is_show" type="checkbox" value="1" <?php if($is_show){echo "checked=\"checked\"";}?>/></div></div>
<div><div style="float:left; width:100px;">单页内容：</div><div><textarea name="content" class="xheditor" cols="50" rows="10"><?php echo $content;?></textarea></div></div>
<div><div style="float:left; width:100px;"></div><div><input type="submit" value="确定提交" name="B1" /></div></div>
</form>
