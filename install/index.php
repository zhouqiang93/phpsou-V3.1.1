<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpsou系统安装向导</title>
<style type="text/css">
body{font-size:12px;
}
td{height:30px;}
</style>
</head>

<body>
<form action="?action=anzhuang" method="post">
<table width="500" border="1" align="center" cellpadding="0" cellspacing="1" style="margin-top:100px;">
  <tr>
    <td colspan="2"><div align="center"></div>
      <div align="center" style="color:#FF0000">安装之前，请确保include目录可写，安装之前，请备份好数据，避免造成数据丢失</div></td>
    </tr>
  <tr>
    <td width="112"><div align="center">数据库地址：</div></td>
    <td width="379">&nbsp;<input name="dbhost" type="text" value="localhost" /></td>
    </tr>
  <tr>
    <td><div align="center">数据库名称：</div></td>
    <td>&nbsp;<input name="dbname" type="text" /></td>
    </tr>
  <tr>
    <td><div align="center">数据库账号：</div></td>
    <td>&nbsp;<input name="dbuser" type="text" /></td>
    </tr>
  <tr>
    <td><div align="center">数据库密码：</div></td>
    <td>&nbsp;<input name="dbpw" type="text" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;<input type="submit" value="安装" /></td>
  </tr>
</table>

</form>

<?php
$file = "../include/lock.txt";
@$action = $_GET['action'];
if(!file_exists($file))
{
	if($action=="anzhuang")
	{
		$dbhost = $_POST['dbhost'];
		$dbname = $_POST['dbname'];
		$dbuser = $_POST['dbuser'];
		$dbpw = $_POST['dbpw'];
		
		$content.="<?php".chr(13).chr(10);
		$content.="mysql_connect('$dbhost','$dbuser','$dbpw');".chr(13).chr(10); 
		$content.="mysql_select_db('$dbname');".chr(13).chr(10); 
		$content.="mysql_query('SET NAMES utf8');".chr(13).chr(10);
		$content.="?>";
		 $fp=@fopen("../include/config.php","w") or die("写方式打开文件失败，请检查程序目录是否为可写");//配置conn.php文件
		 @fputs($fp,$content) or die("文件写入失败,请检查程序目录是否为可写"); 
		 @fclose($fp);
		//end
		$fp=@fopen("../include/lock.txt","w");
		$file_name="./phpsou.sql"; //要导入的SQL文件名
		set_time_limit(0); //设置超时时间为0，表示一直执行。当php在safe mode模式下无效，此时可能会导致导入超时，此时需要分段导入
		$fp = @fopen($file_name, "r") or die("不能打开SQL文件 $file_name");//打开文件
		$conn=mysql_connect($dbhost, $dbuser, $dbpw) or die("不能连接数据库 $dbhost");//连接数据库
		mysql_query("set names utf8",$conn);
		
		if ($conn)
		{
			mysql_query("CREATE DATABASE $dbname",$conn);//判断是否存在数据库
		}
		mysql_select_db($dbname);//打开数据库 
		mysql_query("SET NAMES 'utf8'");
		//echo "<div class=\"tips\">";
		//echo "正在执行导入操作<BR>";
		while($SQL=GetNextSQL()){
		if (mysql_query($SQL)){
		//echo "执行SQL：".mysql_error()."";
		//echo "SQL语句为：".$SQL."<BR>";
		}
		}
		//echo "导入完成"; 
		//echo "</div>";
		header("Location: ../");
		fclose($fp) or die("Can't close file $file_name");//关闭文件
		mysql_close(); 

		
		
		
		
	}

}
else
{
	header("Location: ../");
}

function GetNextSQL() {
global $fp;
$sql="";
while ($line = @fgets($fp, 40960)) {
$line = trim($line);
//以下三句在高版本php中不需要
$line = str_replace("\\\\","\\",$line);
$line = str_replace("\'","'",$line);
$line = str_replace("\\r\\n",chr(13).chr(10),$line);
// $line = stripcslashes($line);
if (strlen($line)>1) {
if ($line[0]=="-" && $line[1]=="-") {
continue;
}
}
$sql.=$line.chr(13).chr(10);
if (strlen($line)>0){
if ($line[strlen($line)-1]==";"){
break;
}}
}
return $sql;
}
?>
</body>
</html>
