<META http-equiv=Content-Type content=text/html;charset=utf-8>
<?php 
error_reporting(0); 
@set_time_limit(0);
require_once("../../include/config.php");
$yizhen=mysql_query("select * from phpsou_site where y=0 limit 0,1");
while($y=mysql_fetch_array($yizhen))
{

	$iddd=$y['id']; 
	$url = $y['url']; 
	$opts = array(
	'http'=>array(
	'method'=>"GET",
	'timeout'=>5,
	));
	$context = stream_context_create($opts);
	$contents =@file_get_contents($url, false, $context);
	
	$title = str_substr('<title>', '</title>', $contents);
	$description = str_substr('description', '>', $contents);
	
	$title = safeEncoding($title);
	$description = guolv(safeEncoding($description));
	$time = time();
	echo "标题：".$title."<br>";
	echo "网页说明：".$description."<br>";
	echo "链接：".$url."<br>";
	mysql_query("insert into phpsou_links(url,title,description,time) value ('$url','$title','$description','$time')");
	mysql_query("update phpsou_site set y='1' where id='$iddd'");
	
	
}
echo "<script>window.location.href='title.php';</script>";





function preg_substr($start, $end, $str) // 正则截取函数      
{      
	$temp = preg_split($start, $str);      
	$content = preg_split($end, $temp[1]);      
	return $content[0];      
}   
function str_substr($start, $end, $str) // 字符串截取函数      
{      
	$temp = explode($start, $str, 2);      
	$content = explode($end, $temp[1], 2);      
	return $content[0];      
} 

function safeEncoding($string,$outEncoding = 'UTF-8')
{
$encoding = "UTF-8";
for($i=0;$i<strlen($string);$i++)
{
if(ord($string{$i})<128)
continue;

if((ord($string{$i})&224)==224)
{
//第一个字节判断通过
$char = $string{++$i};
if((ord($char)&128)==128)
{
//第二个字节判断通过
$char = $string{++$i};
if((ord($char)&128)==128)
{
$encoding = "UTF-8";
break;
}
}
}
if((ord($string{$i})&192)==192)
{
//第一个字节判断通过
$char = $string{++$i};
if((ord($char)&128)==128)
{
//第二个字节判断通过
$encoding = "GB2312";
break;
}
}
}

if(strtoupper($encoding) == strtoupper($outEncoding))
return $string;
else 
return iconv($encoding,$outEncoding,$string);
}

function guolv($str)
{
if (empty($str)) return false;
$str = htmlspecialchars($str);
$str = str_replace( 'content', "", $str);
$str = str_replace( '=', "", $str);
$str = str_replace( '/', "", $str);
$str = str_replace( '&quot;', "", $str);

return $str;

}
?>