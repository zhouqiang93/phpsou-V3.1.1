<?php /* Smarty version Smarty-3.1.13, created on 2014-07-09 06:44:52
         compiled from "..\templates\admin\spider_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:909353bce4e49a9e31-90622289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bd357ddfbde83f97adbf6987978c5b3dd9cdb85' => 
    array (
      0 => '..\\templates\\admin\\spider_links.tpl',
      1 => 1404875560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '909353bce4e49a9e31-90622289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num_0' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bce4e4a500b7_29130859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bce4e4a500b7_29130859')) {function content_53bce4e4a500b7_29130859($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML>
<HEAD>
<META http-equiv=Content-Type content=text/html;charset=utf-8>
<title>网站管理</title>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta name="Keywords" content="">
<meta name="description" content="">
<META content="MSHTML 6.00.2900.5921" name=GENERATOR>
<script src="style/jquery-1.2.2.pack.js" type="text/javascript"></script>
<script src="style/facebox.js" type="text/javascript"></script>
<link href="style/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox() 
    })
</script>
<link href="images/skin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #EEF2FB;
}

-->
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">抓取网站</div></td>
      </tr>
    </table></td>
    <td width="16" valign="top" background="images/mail_rightbg.gif"><img src="images/nav-right-bg.gif" width="16" height="29" /></td>
  </tr>
  <tr>
    <td valign="middle" background="images/mail_leftbg.gif">&nbsp;</td>
    <td valign="top" bgcolor="#F7F8F9"><table width="100%" height="138" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="13" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0" class="nowtable">
                <tr>
                  <td width="3%" height="30" class="left_bt2">&nbsp;&nbsp;网站数据统计：</td>
                  <td width="3%" class="left_bt2">&nbsp;</td>
                  <td width="6%" align="right" class="left_bt2"></td>
                </tr>
              </table>
			  



                <table width="100%" border="0" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF" style="border:1px solid #CCCCCC;">
                  <tr>
                    <td width="11%" height="30" align="center" bgcolor="#f2f2f2" class="left_txt2">当前抓取存储规则</td>
                    <td width="57%" align="center" bgcolor="#f2f2f2" class="left_txt2">更新<input type="text">
                      表 存储到
                        <input name="text" type="text">
                      表<input type="submit" value="更新"></td>
                    <td width="57%" align="center" bgcolor="#f2f2f2" class="left_txt2"><a href="spider/index_1.php?mydiv" rel="facebox" style="color:#FF0000">开启网络爬虫</a></td>
                  </tr>
                </table>
                <br>
                <table width="100%" border="0" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF" style="border:1px solid #CCCCCC;">
                  <tr>
                    <td width="11%" height="30" align="center" bgcolor="#f2f2f2" class="left_txt2">phpsou_links </td>
                    <td width="57%" align="center" bgcolor="#f2f2f2" class="left_txt2"><?php echo $_smarty_tpl->tpl_vars['num_0']->value;?>
条数据</td>
                    <td width="57%" align="center" bgcolor="#f2f2f2" class="left_txt2">&nbsp;</td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</td>
            </tr>
          </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>
                <td width="50%" height="30" align="right">&nbsp;</td>
                <td width="6%" height="30" align="right">&nbsp;</td>
                <td width="44%" height="30">&nbsp;</td>
              </tr>
              <tr>
                <td height="30" colspan="3">&nbsp;</td>
              </tr>
          </table></td>
      </tr>
    </table></td>
    <td background="images/mail_rightbg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" background="images/mail_leftbg.gif"><img src="images/buttom_left2.gif" width="17" height="17" /></td>
    <td background="images/buttom_bgs.gif"><img src="images/buttom_bgs.gif" width="17" height="17"></td>
    <td valign="bottom" background="images/mail_rightbg.gif"><img src="images/buttom_right2.gif" width="16" height="17" /></td>
  </tr>
</table>
</body>
<?php }} ?>