<?php
require('include/config.php');
$id=$_GET[id];
$sql="select * from phpsou_about where about_id='$id'";
$cate_query=mysql_query($sql);
while($row=mysql_fetch_array($cate_query,MYSQL_ASSOC)) 
{        
?>





<html><head><meta http-equiv=content-type content="text/html;charset=utf-8">
<title><?php echo $row['title']; ?>--PHPSou垂直搜索</title>
<style>
<!--
body{margin:0px;font-size:12px;font-family:Arial;line-height:180%}
td{font-size:12px;}
img{border:0}
.b{border:1px solid #A1C0DC;margin-bottom:8px;}
.b a{text-decoration:none;}
.b a:hover{text-decoration:underline;}
.b1{padding:4px 0 4px 10px;}
.b2{padding:6px 5px 4px 10px;font-size:14px;line-height:150%}

-->
</style>

<table width=925 border=0 align="center" cellpadding=0 cellspacing=0>
  <td height=3 bgcolor=005CCD></td>
</table>
<br>
<table width=925 border=0 align="center" cellpadding=0 cellspacing=0>
  <tr>
    <td width=175 rowspan=3><a href="/"><img src="templates/images/logo.gif" width="220" border="0"></a></td>
    <td width=735 height=37 align=right valign=bottom style="font-size:14px;font-weight:bold;">&nbsp;</td>
  </tr>
  <tr>
    <td height=1 bgcolor=D0E3F2></td>
  </tr>
  <tr>
    <td height=13></td>
  </tr>
</table>
<br>
<table width=925 align="center" cellpadding=0 cellspacing=1 bgcolor=D0E3F2 style="margin-bottom:8px;">
    <td bgcolor=E6F4FF class=b1><a href="/">PHPSou垂直搜索首页</a>&nbsp;&gt;&nbsp;<?php echo $row['title']; ?></td>
</table>
<table width=925 align="center" cellpadding=0 cellspacing=0 class=b>
  
  <tr>
    <td valign=top class=b2>&nbsp;<?php echo $row['content']; ?>&nbsp;</td>
  </tr>
</table>


</div>

<div align=center class="center blue" style="padding:18px 0px 18px 0px;">Copyright &copy;2012 PHPSou下载搜索引擎&nbsp;&nbsp;<script src="http://s6.cnzz.com/stat.php?id=4691653&web_id=4691653&online=1" language="JavaScript"></script></div>
<?php
}
?>
</body></html>