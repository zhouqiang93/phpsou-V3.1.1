<?php /* Smarty version Smarty-3.1.13, created on 2014-07-09 06:42:13
         compiled from "..\templates\admin\site_config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1554653bce44502b6d7-47611269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deab3efcd6476b75c8c0b580d93890092f38dcc9' => 
    array (
      0 => '..\\templates\\admin\\site_config.tpl',
      1 => 1363161038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1554653bce44502b6d7-47611269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'url' => 0,
    'adtitle' => 0,
    'icp' => 0,
    'qq' => 0,
    'Keywords' => 0,
    'description' => 0,
    'copyright' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bce44508f213_32164128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bce44508f213_32164128')) {function content_53bce44508f213_32164128($_smarty_tpl) {?><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<body>
<form id="configform" name="configform" method="post" action="?action=saveconfig">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17" valign="top" background="images/mail_leftbg.gif"><img src="images/left-top-right.gif" width="17" height="29" /></td>
    <td valign="top" background="images/content-bg.gif"><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="left_topbg" id="table2">
      <tr>
        <td height="31"><div class="titlebt">基本设置</div></td>
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
              <td><table width="100%" height="31" border="0" cellpadding="0" cellspacing="0" class="nowtable">
                  <tr>
                    <td class="left_bt2">&nbsp;&nbsp;&nbsp;&nbsp;系统参数设置</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td>
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="20%" height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">网站名称：</td>
                  <td width="3%" bgcolor="#f2f2f2">&nbsp;</td>
                  <td width="32%" height="30" bgcolor="#f2f2f2"><input name="name" type="text" id="title" size="30" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /></td>
                  <td width="45%" height="30" bgcolor="#f2f2f2" class="left_txt">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" align="right" class="left_txt2">网站网址：</td>
                  <td>&nbsp;</td>
                  <td height="30"><input type="text" name="url" size="30" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" /></td>
                  <td height="30" class="left_txt">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">首页title：</td>
                  <td bgcolor="#f2f2f2">&nbsp;</td>
                  <td height="30" bgcolor="#f2f2f2"><input type="text" name="adtitle" size="25" value="<?php echo $_smarty_tpl->tpl_vars['adtitle']->value;?>
" /></td>
                  <td height="30" bgcolor="#f2f2f2" class="left_txt">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" align="right" class="left_txt2">ICP备案号： </td>
                  <td>&nbsp;</td>
                  <td height="30"><input type="text" name="icp" size="30" value="<?php echo $_smarty_tpl->tpl_vars['icp']->value;?>
" /></td>
                  <td height="30" class="left_txt">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" align="right" bgcolor="#f2f2f2" class="left_txt2">联系QQ：</td>
                  <td bgcolor="#f2f2f2">&nbsp;</td>
                  <td height="30" bgcolor="#f2f2f2"><input type="text" name="qq" size="30" value="<?php echo $_smarty_tpl->tpl_vars['qq']->value;?>
" /></td>
                  <td height="30" bgcolor="#f2f2f2" class="left_txt">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" align="right" bgcolor="#F7F8F9" class="left_txt2">Keywords：</td>
                  <td bgcolor="#F7F8F9">&nbsp;</td>
                  <td height="30" bgcolor="#F7F8F9"><textarea name="Keywords" cols="50" rows="5"><?php echo $_smarty_tpl->tpl_vars['Keywords']->value;?>
</textarea></td>
                  <td height="30" bgcolor="#F7F8F9" class="left_txt">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" align="right" bgcolor="#F2F2F2" class="left_txt2">description：</td>
                  <td bgcolor="#F2F2F2">&nbsp;</td>
                  <td height="30" bgcolor="#F2F2F2"><textarea name="description" cols="50" rows="5"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea></td>
                  <td height="30" bgcolor="#F2F2F2">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" align="right" class="left_txt2">网站版权：</td>
                  <td>&nbsp;</td>
                  <td height="30"><textarea name="copyright" cols="50" rows="5"><?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>
</textarea></td>
                  <td height="30">&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" align="right" class="left_txt2">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td height="30"><input type="submit" value="完成以上修改" name="B1" /></td>
                  <td height="30">&nbsp;</td>
                </tr>
              </table></td>
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
</form>
</body>
<?php }} ?>