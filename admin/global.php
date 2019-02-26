<?php
session_start();
if($_COOKIE["yanzheng"]=="")
{
	echo "<script>window.location.href='login.php';</script>";
}
if(!isset($_SESSION['yanzheng']))
{
	echo "<script>window.location.href='./login.php';</script>";
}
require('../include/config.php');

$yanzheng = $_SESSION['yanzheng'];

$query = mysql_query("SELECT * FROM phpsou_admin where quanxian='$yanzheng'");
$row=mysql_fetch_array($query);
if($row<0){echo "<script>window.location.href='login.php';</script>";die();}
$adminname=$row['adminname'];
$comurl=$_SERVER['HTTP_REFERER'];


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
				$_obfuscate_R2_b = str_replace( "¡¡", " ", $_obfuscate_R2_b );
				$_obfuscate_R2_b = ereg_replace( "[\r\n\t ]{1,}", " ", $_obfuscate_R2_b );
		}
		else if ( $_obfuscate_G6MXLV9j == 2 )
		{
				$_obfuscate_R2_b = htmlspecialchars( $_obfuscate_R2_b );
				$_obfuscate_R2_b = str_replace( "¡¡", "", $_obfuscate_R2_b );
				$_obfuscate_R2_b = ereg_replace( "[\r\n\t ]", "", $_obfuscate_R2_b );
		}
		else
		{
				$_obfuscate_R2_b = ereg_replace( "[\r\n\t ]{1,}", " ", $_obfuscate_R2_b );
				$_obfuscate_R2_b = eregi_replace( "script", "£ó£ã£ò£é£ð£ô", $_obfuscate_R2_b );
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
?>