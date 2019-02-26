<?php /* Smarty version Smarty-3.1.13, created on 2014-07-09 07:27:50
         compiled from "..\templates\admin\spider_url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2580953bceef6309123-73959541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85c135a77a88f4f11d2f9dcf8a77d9e0bdb5f174' => 
    array (
      0 => '..\\templates\\admin\\spider_url.tpl',
      1 => 1363191274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2580953bceef6309123-73959541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bceef63962b3_46775559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bceef63962b3_46775559')) {function content_53bceef63962b3_46775559($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
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
        <td height="31"><div class="titlebt">网站管理</div></td>
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
                  <td width="3%" height="30" class="left_bt2">&nbsp;&nbsp;所以网站管理：</td>
                  <td width="3%" class="left_bt2">&nbsp;</td>
                  <td width="6%" align="right" class="left_bt2"><a href="e_site.php?mydiv" rel="facebox">添加>></a>&nbsp;&nbsp;</td>
                </tr>
              </table>
			  



                <table width="100%" border="0" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF" style="border:1px solid #CCCCCC;">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['site'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['site']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['site']['name'] = 'site';
$_smarty_tpl->tpl_vars['smarty']->value['section']['site']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['site']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['site']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['site']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['site']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['site']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['site']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['site']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['site']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['site']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['site']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['site']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['site']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['site']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['site']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['site']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['site']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['site']['total']);
?>
                  <tr>
                    <td width="6%" height="30" align="center" bgcolor="#f2f2f2" class="left_txt2"><?php echo $_smarty_tpl->tpl_vars['site']->value[$_smarty_tpl->getVariable('smarty')->value['section']['site']['index']]['id'];?>
</td>
                    <td width="60%" bgcolor="#f2f2f2">&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['site']->value[$_smarty_tpl->getVariable('smarty')->value['section']['site']['index']]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['site']->value[$_smarty_tpl->getVariable('smarty')->value['section']['site']['index']]['url'];?>
</a></td>
                    <td width="12%" height="30" align="center" bgcolor="#f2f2f2" class="left_txt">
					抓取网站&nbsp;&nbsp;抓取网址</td>
                    <td width="22%" height="30" align="center" bgcolor="#f2f2f2" class="left_txt"><a href="e_site.php?id=<?php echo $_smarty_tpl->tpl_vars['site']->value[$_smarty_tpl->getVariable('smarty')->value['section']['site']['index']]['url'];?>
&mydiv" rel="facebox">修改</a>&nbsp;<a href="?action=del&id=<?php echo $_smarty_tpl->tpl_vars['site']->value[$_smarty_tpl->getVariable('smarty')->value['section']['site']['index']]['url'];?>
" onClick="if(!confirm('确认删除码?')) return false;">删除</a></td>
                  </tr>
				<?php endfor; endif; ?>
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