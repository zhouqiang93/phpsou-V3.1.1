<?php /* Smarty version Smarty-3.1.13, created on 2019-02-22 22:34:55
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267253bccebfa1f804-97805071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1550846088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267253bccebfa1f804-97805071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bccebfd285b8_80387447',
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'about' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bccebfd285b8_80387447')) {function content_53bccebfd285b8_80387447($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML>
<HEAD>
<META http-equiv=Content-Type content=text/html;charset=utf-8>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<link rel="SHORTCUT ICON" href="favicon.ico" />
<link type="text/css" rel="stylesheet" href="templates/css/style.css" />
<META content="MSHTML 6.00.2900.5921" name=GENERATOR>
<SCRIPT type=text/javascript>
function Hospital(){
   window.open("http://www.028sms.com");
}
</SCRIPT>
</head>
<body>
<div class="head">
<!--	<div class="head_1"></div>
    <div class="head_2"><a href="http://www.phpsou.com">中文</a> <a href="http://us.phpsou.com">English</a>&nbsp;</div>-->
</div>
<div class="logo"><a href="/"><img src="templates/images/logo.gif" border="0" /></a></div>
<div class="main">
	<div class="main_li">
		<ul>
        <li></li>
		</ul>
	</div>
</div>
<div style="clear:both;" class="search">
<FORM id="form" name="f" action="search.php">
<div class="input">
	<li><input id="key" name="wd" type="text" class="wd"></li>
	<li><input type="submit" class="s" id=su value="搜索一下"><input type="button" class="s" id=su value="蜀点通" onClick="Hospital()"></li>
</div>
</FORM>
</div>
<div class="ad">
	<span>热！</span><a href="http://www.028sms.com" target="_blank">Phpdata企业数据管理系统</a> &nbsp;<a href="http://www.028sms.com" target="_blank">PHPSou更新维护</a><br>
<!--<br>旗下网站： <a href="http://www.jobsou.net/" target="_blank" style="color:#FF0000" title="Jobsou职位搜索">Jobsou职位搜索</a>&nbsp;<a href="http://www.120sou.net/" target="_blank" style="color:#FF0000" title="120医搜网">120医搜网</a>&nbsp;<a href="http://www.phpsou.com/about.php?id=45" target="_blank" style="color:#FF0000" title="企搜网">企搜网</a>--></div>
<div class="foot">
	<div class="foot_1"><A 
  onclick="if(document.all){this.style.behavior='url(#default#homepage)';this.setHomePage('http://'+document.location.host);}else{setHomePage('http://'+document.location.host)}" 
  href="javascript://">设PHPSou为首页</A>
  技术支持QQ：10027135
    </div>
	<div class="foot_2">
		<ul>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['about'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['about']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['about']['name'] = 'about';
$_smarty_tpl->tpl_vars['smarty']->value['section']['about']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['about']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['about']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['about']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['about']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['about']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['about']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['about']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['about']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['about']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['about']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['about']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['about']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['about']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['about']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['about']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['about']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['about']['total']);
?>
        	<?php if ($_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['about']['index']]['url']){?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['about']['index']]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['about']['index']]['title'];?>
</a></li>
			<li>|</li>
			<?php }else{ ?>
			<li><a href="/about.php?id=<?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['about']['index']]['about_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['about']['index']]['title'];?>
</a></li>
			<li>|</li>
            <?php }?>
	<?php endfor; endif; ?>
	<li>
	<script src="http://s6.cnzz.com/stat.php?id=4691653&web_id=4691653&online=1" language="JavaScript"></script>
	</li>
		</ul>
	</div>
  <div class="foot_3">©2009-2019 <a href="http://www.028sms.com">028sms.com</a> 蜀ICP备15015509号</div>
</div>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&img=1&uid=712032" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
<!-- Baidu Button END -->
</body>
</html>
																																										<?php }} ?>