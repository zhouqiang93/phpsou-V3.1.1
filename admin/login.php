<?php
/**
本程序版权为程序开发者guigou所有，关键位置已经截图存档，如盗用本系统做二次销售，我们将保留追究其法律责任的权力。
程序作者：guigou QQ：568435757
联系邮箱：13888221411@126.com
再次申明：程序属于原始开发，请尊重作者的劳动成果。
*/
session_start();
error_reporting(0); 
require('../include/conn_list.php');
$action=$_GET["action"];
switch($action)
{
    case "checklogin":
	checklogin();
    break;
	
	case "logou":
	logou();
	break;
}
function checklogin()
{
//	require "../phpsou/db.php";
	$adminname=htmlspecialchars($_POST["adminname"]);
	$password=md5(htmlspecialchars($_POST["password"]));
//	echo $adminname;
//	echo $password;
	$imagecode=trim(HtmlReplace($_POST["entered_imagecode"]));//如需删除验证码，请删除本行及下面5行
	if($_SESSION['imgcode']!=$imagecode)
	{
		jsalert("验证码错误!","login.php");
		echo "<script>window.location.href='login.php';</script>";
	}
	$result=mysql_query("SELECT * FROM phpsou_admin where adminname='$adminname' and password='$password'");

	$num=mysql_num_rows($result);
//	echo $num;
		if ($num>0)
		{
			date_default_timezone_set("PRC");
			$time=date("Y-m-d H:i:s", time());
			$ip=ip();
			while($row=mysql_fetch_array($result))
			{
			$adminname = $row['adminname'];
			$password = $row['password'];
			mysql_query("update phpsou_admin set lastloginip=loginip,loginip='$ip',lastlogintime=logintime,logintime='$time' where adminname='$adminname'");
			setcookie("yanzheng",md5($adminname.$password));
			$_SESSION['yanzheng'] = md5($adminname.$password);
			

			}
			echo "<script>window.location.href='index.php';</script>";
		}
		else
		{
			jsalert("用户名或密码错误!","login.php");
			echo "<script>window.location.href='login.php';</script>";
		}
}
function logou()
{
	 setcookie("yanzheng","",time()-3600);
	 //header("location:login.php");
	 echo "<script>window.location.href='login.php';</script>";
}






$smarty->display('admin/login.tpl');
?>
<?php
function htmlreplace( $_obfuscate_R2_b, $_obfuscate_G6MXLV9j = 0 )
{
		$_obfuscate_R2_b = stripslashes( $_obfuscate_R2_b );
		if ( $_obfuscate_G6MXLV9j == 0 )
		{
				$_obfuscate_R2_b = htmlspecialchars( $_obfuscate_R2_b );
		}
		else if ( $_obfuscate_G6MXLV9j == 1 )
		{
				$_obfuscate_R2_b = htmlspecialchars( $_obfuscate_R2_b );
				$_obfuscate_R2_b = str_replace( "　", " ", $_obfuscate_R2_b );
				$_obfuscate_R2_b = ereg_replace( "[\r\n\t ]{1,}", " ", $_obfuscate_R2_b );
		}
		else if ( $_obfuscate_G6MXLV9j == 2 )
		{
				$_obfuscate_R2_b = htmlspecialchars( $_obfuscate_R2_b );
				$_obfuscate_R2_b = str_replace( "　", "", $_obfuscate_R2_b );
				$_obfuscate_R2_b = ereg_replace( "[\r\n\t ]", "", $_obfuscate_R2_b );
		}
		else
		{
				$_obfuscate_R2_b = ereg_replace( "[\r\n\t ]{1,}", " ", $_obfuscate_R2_b );
				$_obfuscate_R2_b = eregi_replace( "script", "ｓｃｒｉｐｔ", $_obfuscate_R2_b );
				$_obfuscate_R2_b = eregi_replace( "<[/]{0,1}(link|meta|ifr|fra)[^>]*>", "", $_obfuscate_R2_b );
		}
		return addslashes( $_obfuscate_R2_b );
}
function jsalert( $_obfuscate_A1jN, $_obfuscate_Il8i = "" )
{
		if ( $_obfuscate_Il8i )
		{
				echo "<script language=\"javascript\">alert('".$_obfuscate_A1jN."');location.href('{$_obfuscate_Il8i}');</script>";
		}
		else
		{
				echo "<script language=\"javascript\">alert('".$_obfuscate_A1jN."');location.href('".$_SERVER['HTTP_REFERER']."');</script>";
		}
}
function ip()
{
		if ( getenv( "HTTP_CLIENT_IP" ) && strcasecmp( getenv( "HTTP_CLIENT_IP" ), "unknown" ) )
		{
				$_obfuscate_As = getenv( "HTTP_CLIENT_IP" );
		}
		else if ( getenv( "HTTP_X_FORWARDED_FOR" ) && strcasecmp( getenv( "HTTP_X_FORWARDED_FOR" ), "unknown" ) )
		{
				$_obfuscate_As = getenv( "HTTP_X_FORWARDED_FOR" );
		}
		else if ( getenv( "REMOTE_ADDR" ) && strcasecmp( getenv( "REMOTE_ADDR" ), "unknown" ) )
		{
				$_obfuscate_As = getenv( "REMOTE_ADDR" );
		}
		else if ( isset( $_SERVER['REMOTE_ADDR'] ) && $_SERVER['REMOTE_ADDR'] && strcasecmp( $_SERVER['REMOTE_ADDR'], "unknown" ) )
		{
				$_obfuscate_As = $_SERVER['REMOTE_ADDR'];
		}
		if ( preg_match( "/[\\d\\.]{7,15}/", $_obfuscate_As, $_obfuscate_8UmnTppRcA ) )
		{
				return $_obfuscate_8UmnTppRcA[0];
		}
		return "unknown";
}
?>
