<?php
/**
本程序版权为程序开发者guigou所有，关键位置已经截图存档，如盗用本系统做二次销售，我们将保留追究其法律责任的权力。
程序作者：guigou QQ：568435757
联系邮箱：13888221411@126.com
再次申明：程序属于原始开发，请尊重作者的劳动成果。
*/
error_reporting(0); 
require('include/conn.php');
$wd=$_GET['wd'];
if($wd==""){header("Location: /");}
$wd_en=urlencode($wd);
$smarty->assign("wd",$wd); 

$siteconfig="select * from phpsou_siteconfig";
$site_query=mysql_query($siteconfig);
while($site=mysql_fetch_array($site_query,MYSQL_ASSOC)) 
{
	$name=$site['name'];  
	$keywords=$site['Keywords'];
	$description=$site['description'];
}
$smarty->assign("name",$name); 
$smarty->assign("keywords",$keywords); 
$smarty->assign("description",$description); 

/*获取页码*/
$start=($_GET["p"]-1)*10;
if($start<0){$start=0;}
//判断是否整合sphinx
$ss=mysql_query("select * from phpsou_sphinx where id=1");
while($row=mysql_fetch_array($ss,MYSQL_ASSOC)) 
{ 
   $y = $row['y'];
   $dizhi = $row['dizhi'];
   $duankou = $row['duankou'];
}

if($y==1)
{
	/*整合sphinx开始*/
	require ( "sphinxapi.php" );
	$cl = new SphinxClient ();
	$cl->SetServer ( $dizhi, $duankou);
	$cl->SetConnectTimeout ( 3 );
	$cl->SetArrayResult ( true );
	$cl->SetMatchMode ( "SPH_MATCH_ANY");
	$cl->SetLimits($start,10);
	$res = $cl->Query ( $wd, "*" );
	//printf("信息总数：%d 
	//", $res['total_found']);
	
	if($res['total'])
	{
	$ids = $res['matches'];
	array_walk($ids,create_function('&$item','$item = $item["id"];'));
	$idstr = implode(',',$ids);
	}
	/*整合sphinx结束*/
	$phpsou_links="select * from phpsou_links where id in($idstr)";
}
else
{
	$phpsou_links="select * from phpsou_links where title like '%$wd%' limit $start,10";
}
$links_query=mysql_query($phpsou_links);
while($link=mysql_fetch_array($links_query,MYSQL_ASSOC)) 
{ 
	$tt[]=array("title"=>csubstr($link["title"],0,80),"url"=>$link["url"],"description"=>$link["description"]);
}
$smarty->assign("tt",$tt); 

/*翻页开始*/

if($y==1)
{$total=$res['total_found'];}
else
{$total=mysql_num_rows(mysql_query("select * from phpsou_links where title like '%$wd%'"));}
$pagesize=10;
$totalpage=ceil($total/$pagesize);

$smarty->assign("to",$total); 

require_once("include/inc_page.php");
if($totalpage>50)
{$totalpage=50;}
$page = new Page($totalpage,"?wd=".$wd_en."&p=");
$smarty->assign("page",$page->show()); 
/*翻页结束*/

/*手机二维码*/
$urlToEncode="http://www.phpsou.com/";
generateQRfromGoogle($urlToEncode);
function generateQRfromGoogle($chl,$widhtHeight ='130',$EC_level='L',$margin='0')
{
global $erwei;
$url = urlencode($url);
$erwei = '<img src="http://chart.apis.google.com/chart?chs='.$widhtHeight.'x'.$widhtHeight.'&cht=qr&chld='.$EC_level.'|'.$margin.'&chl='.$chl.'" alt="QR code" widhtHeight="'.$size.'" widhtHeight="'.$size.'"/>';

}
$smarty->assign("erwei",$erwei);

//历史记录
//echo $_COOKIE['lishi'];
if (!empty($_COOKIE['lishi']))
{
  $history = explode(',', $_COOKIE['lishi']);

  array_unshift($history, $wd);
  $history = array_unique($history);

  while (count($history) > 10)
  {
    array_pop($history);
  }

  setcookie('lishi', implode(',', $history), time() + 3600 * 24 * 30);
}
else
{
  setcookie('lishi',$wd,time() + 3600 * 24 * 30);
}
$lishi = explode(',', $_COOKIE['lishi']);
foreach($lishi as $ll){

	$arr_lishi[]=array("lishi"=>$ll,"l"=>urlencode($ll)); 
}
$smarty->assign("lishi",$arr_lishi);  

/*搜索关键词*/
$tt=mysql_query("SELECT * FROM phpsou_keyword where keyword='$wd'");
$num=mysql_num_rows($tt);
if($num<1)
{mysql_query("insert into phpsou_keyword(keyword,hit) values ('$wd','1')");}
else
{mysql_query("update phpsou_keyword set hit=hit+1 where keyword='$wd'");} 
$keyy=mysql_query("select * from phpsou_keyword where keyword like '%$wd%' and keyword<>'' order by hit desc limit 0,10");
$j=0;
while($cate=mysql_fetch_array($keyy,MYSQL_ASSOC)) 
{$j++;
//   $arr_key[]=array("keyword"=>$cate[keyword],"keywordd"=>urlencode($cate[keyword]),"hit"=>$cate[hit]); 
   
   $arr_key[]=array("keyword"=>csubstr($cate["keyword"],0,18),"keywordd"=>urlencode($cate["keyword"]),"br"=>$br);
if($j%5==0)
	{
	   $br="</tr>
  <tr>";
	   //echo "<br>";
	}
	else
	{
		$br="";
	}
} 
$smarty->assign("key",$arr_key);


$smarty->display('search.tpl');
function GetRedKeyWord($fstr)
{
	//$ks = explode(' ',$this->Keywords);
	$ks=$this->wd_array;
	$kwsql = '';
	foreach($ks as $k)
	{
		$k = trim($k);
		if($k=='')
		{
			continue;
		}
		if(ord($k[0])>0x80 && strlen($k)<0)
		{
			continue;
		}
		$fstr = str_replace($k,"<strong>$k</strong>",$fstr);
	}
	return $fstr;
}
function csubstr($string, $beginIndex, $length){//utf-8下中文截取
    if(strlen($string) < $length){
        return substr($string, $beginIndex);
    }
 
    $char = ord($string[$beginIndex + $length - 1]);
    if($char >= 224 && $char <= 239){
        $str = substr($string, $beginIndex, $length - 1);
        return $str;
    }
 
    $char = ord($string[$beginIndex + $length - 2]);
    if($char >= 224 && $char <= 239){
        $str = substr($string, $beginIndex, $length - 2);
        return $str;
    }
 
    return substr($string, $beginIndex, $length);
}
function xiegang($str)
{
	if (empty($str)) return false;
	$str = htmlspecialchars($str);
	$str = str_replace( '/', "", $str);
	return $str;
}
?>

<?php

	

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
