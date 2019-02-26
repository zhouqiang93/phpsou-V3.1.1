<META http-equiv=Content-Type content=text/html;charset=utf-8>
<?php 
error_reporting(0); 
@set_time_limit(0);
require_once("../../include/config.php");
$yizhen=mysql_query("select * from phpsou_site where site='0' limit 0,1");
while($y=mysql_fetch_array($yizhen))
{

		$iddd=$y['id']; 
		$url = $y['url'];  
		$uu = explode('/', $url);
		$host = "http://".$uu[2];
		$opts = array(
		'http'=>array(
		'method'=>"GET",
		'timeout'=>5,
		));
		$context = stream_context_create($opts);
		$contents =@file_get_contents($url, false, $context);

		$str = match_links($contents);
		$str = @array_unique($str['link']);

		foreach((array)$str as $url)
		{
			if(substr($url,0,7)!='http://' and substr($url,0,1)!='/')
			{
				$url="/".$url;
			}
			if(substr($url,0,7)!='http://')
			{
				$url=$host.$url;
			}
				$ll = explode('/', $url);
				$id = "http://".$ll[2];
				if($id<>'http://.' and $id<>'http://')
				{
					$new_url[] = $id;
						
				}else{}
		}
		$url = @array_unique($new_url);
		foreach((array)$url as $tt)
		{
			$tt = safeEncoding($tt);
			echo $tt."<br>";
			$result=mysql_query("select * from phpsou_site where url='$tt'");
			$num=mysql_num_rows($result);
			if($num>0){}else{mysql_query("insert into phpsou_site(url) values ('$tt')");}
		}
		mysql_query("update phpsou_site set site='1' where id='$iddd'");
}
echo "<script>window.location.href='site.php';</script>";
function match_links($document) { 
	preg_match_all("'<\s*a\s.*?href\s*=\s*([\"\'])?(?(1)(.*?)\\1|([^\s\>]+))[^>]*>?(.*?)</a>'isx",$document,$links); 
	while(list($key,$val) = each($links[2])) { 
	if(!empty($val)) 
	$match['link'][] = $val; 
	} 
		return $match; 
	}
	
function check_is_chinese($s){ //жַ
     return preg_match('/[\x80-\xff]./', $s); 
}

function safeEncoding($string,$outEncoding = 'utf-8')
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
?>