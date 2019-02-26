<?php /* Smarty version Smarty-3.1.13, created on 2014-07-09 05:37:58
         compiled from ".\templates\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:925753bcd536ef3ad3-05922620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baf01d37cce33efc8dc58e655cfcf9a06f5b41fd' => 
    array (
      0 => '.\\templates\\search.tpl',
      1 => 1363931898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '925753bcd536ef3ad3-05922620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wd' => 0,
    'name' => 0,
    'keywords' => 0,
    'description' => 0,
    'to' => 0,
    'ud' => 0,
    'jingjia' => 0,
    'tt' => 0,
    'erwei' => 0,
    'lishi' => 0,
    'page' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53bcd537282370_60747497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bcd537282370_60747497')) {function content_53bcd537282370_60747497($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML>
<HEAD>
<META http-equiv=Content-Type content=text/html;charset=utf-8>
<title><?php echo $_smarty_tpl->tpl_vars['wd']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<link rel="SHORTCUT ICON" href="favicon.ico" />
<link type="text/css" rel="stylesheet" href="templates/css/search.css" />
<META content="MSHTML 6.00.2900.5921" name=GENERATOR>
</head>
<body>
<div class="top"></div>
<div class="head">
    <div class="logo"><a href="/"><img src="templates/images/logo.gif" /></a></div>
    <div class="logo_1">
        <FORM id="form" name="f" action="">
            <div class="word"><input name="wd" type="text" value="<?php echo $_smarty_tpl->tpl_vars['wd']->value;?>
" class="wd"><br>共搜索到<?php echo $_smarty_tpl->tpl_vars['to']->value;?>
条数据</div>
            <div class="sou"><input value="搜索一下" type="submit" class="s" id=su> </div>
		</FORM>
    </div>
</div>
<div class="main">
	<div class="main_left">
<!--	<span style="font-size:14px">分类查找：<a href="http://yuanma.phpsou.com/search/?wd=<?php echo $_smarty_tpl->tpl_vars['ud']->value;?>
">源码</a>&nbsp; <a href="http://www.phpsou.com/search/?wd=<?php echo $_smarty_tpl->tpl_vars['ud']->value;?>
">全部</a>&nbsp; <a href="http://ruanjian.phpsou.com/search/?wd=<?php echo $_smarty_tpl->tpl_vars['ud']->value;?>
">软件</a>&nbsp; <a href="http://game.phpsou.com/search/?wd=<?php echo $_smarty_tpl->tpl_vars['ud']->value;?>
">游戏</a>&nbsp; <a href="http://anzhuo.phpsou.com/search/?wd=<?php echo $_smarty_tpl->tpl_vars['ud']->value;?>
">安卓</a>&nbsp; <a href="http://iphone.phpsou.com/search/?wd=<?php echo $_smarty_tpl->tpl_vars['ud']->value;?>
">苹果</a>&nbsp; <a href="http://qudong.phpsou.com/search/?wd=<?php echo $_smarty_tpl->tpl_vars['ud']->value;?>
">驱动</a>&nbsp; <a href="http://sucai.phpsou.com/search/?wd=<?php echo $_smarty_tpl->tpl_vars['ud']->value;?>
">素材</a></span> 
	<br>&nbsp;<br>-->
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['name'] = 'jingjia';
$_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jingjia']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['jingjia']['total']);
?>
    	<div class="content">
           <?php if ($_smarty_tpl->tpl_vars['jingjia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jingjia']['index']]['img']){?>
		   <div class="main_img"><img src="<?php echo $_smarty_tpl->tpl_vars['jingjia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jingjia']['index']]['img'];?>
" /></div>
		   <?php }else{ ?>
           <?php }?>
            <div class="main_content">
                <ul>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['jingjia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jingjia']['index']]['url'];?>
" target="_blank"><h1><?php echo $_smarty_tpl->tpl_vars['jingjia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jingjia']['index']]['title'];?>
</h1></a></li>
                    <li><?php echo $_smarty_tpl->tpl_vars['jingjia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jingjia']['index']]['txt'];?>
</li>
                    <li class="ur">电话：0871-8888888 地址：测试地址测试地址</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['jingjia']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jingjia']['index']]['url'];?>
 <a href="../tg" target="_blank">推广</a></li>
                </ul>
            </div>
        </div>
    <?php endfor; endif; ?>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tt'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tt']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['name'] = 'tt';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tt']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['total']);
?>
        <div class="content">
        	<?php if ($_smarty_tpl->tpl_vars['tt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['img']){?>
			<!--<div class="main_img"><a href="/d_<?php echo $_smarty_tpl->tpl_vars['tt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['id'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['tt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['img'];?>
" /></a></div>-->
			<?php }else{ ?>
            <?php }?>
            <div class="main_content">
                <ul>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['tt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['url'];?>
" target="_blank"><h1><?php echo $_smarty_tpl->tpl_vars['tt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['title'];?>
</h1></a></li>
                    <li class="txt"><?php echo $_smarty_tpl->tpl_vars['tt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['description'];?>
</li>
                    <li class="ur">来源：<a href="<?php echo $_smarty_tpl->tpl_vars['tt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['tt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['url'];?>
</a>&nbsp;<a 
                    href="<?php echo $_smarty_tpl->tpl_vars['tt']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['url'];?>
" target="_blank">网页快照</a></li>
                </ul>
            </div>
        </div>
    <?php endfor; endif; ?>
    </div>
    <div class="main_right">
<!--120医搜网 你身边的健康专家<br>
网址：www.120sou.net<br><br>-->
<strong>手机二维码：</strong>
<br><br>
<?php echo $_smarty_tpl->tpl_vars['erwei']->value;?>
<br><br>

<strong>历史记录：</strong><br>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lishi'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['name'] = 'lishi';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lishi']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lishi']['total']);
?>
<a href="?wd=<?php echo $_smarty_tpl->tpl_vars['lishi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lishi']['index']]['l'];?>
"><?php echo $_smarty_tpl->tpl_vars['lishi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lishi']['index']]['lishi'];?>
</a><br>
<?php endfor; endif; ?>
    </div>
</div>
<DIV id=page>
  <DIV class=pg>
	<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

    </DIV>
    </DIV>
<div class="xiangguan">
<div class="xiangguan_left">相关搜索：</div>
<div class="xiangguan_right">
<table width="600" border="0" cellpadding="0" cellspacing="0">
  <tr>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['key'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['key']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['name'] = 'key';
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['key']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['key']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['key']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['key']['total']);
?>
	<td height="22" valign="top" width="120">&nbsp;<a href="?wd=<?php echo $_smarty_tpl->tpl_vars['key']->value[$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['keywordd'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['key']->value[$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['keyword'];?>
</span></a><?php echo $_smarty_tpl->tpl_vars['key']->value[$_smarty_tpl->getVariable('smarty')->value['section']['key']['index']]['br'];?>
</td>
	<?php endfor; endif; ?>
  </tr>
</table>


</div>
</div>
<div class="foot_1">
        <FORM id="form" name="f" action="" >
            <div class="word"><input name="wd" type="text" value="<?php echo $_smarty_tpl->tpl_vars['wd']->value;?>
" class="wd"></div>
            <div class="sou"><input value="搜索一下" type="submit" class="s" id=su> </div>
		</FORM>
</div>
<div class="foot">
	© 2012 PHPSou 此内容系PHPSou根据您的指令自动搜索的结果，不代表PHPSou赞成被搜索网站的内容或立场<script src="http://s6.cnzz.com/stat.php?id=4691653&web_id=4691653&online=1" language="JavaScript"></script> 
</div>
</body>
</html>
					<?php }} ?>