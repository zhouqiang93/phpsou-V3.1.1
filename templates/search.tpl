<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML>
<HEAD>
<META http-equiv=Content-Type content=text/html;charset=utf-8>
<title>{<$wd>}_{<$name>}</title>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta name="Keywords" content="{<$keywords>}">
<meta name="description" content="{<$description>}">
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
            <div class="word"><input name="wd" type="text" value="{<$wd>}" class="wd"><br>共搜索到{<$to>}条数据</div>
            <div class="sou"><input value="搜索一下" type="submit" class="s" id=su> </div>
		</FORM>
    </div>
</div>
<div class="main">
	<div class="main_left">
<!--	<span style="font-size:14px">分类查找：<a href="http://yuanma.phpsou.com/search/?wd={<$ud>}">源码</a>&nbsp; <a href="http://www.phpsou.com/search/?wd={<$ud>}">全部</a>&nbsp; <a href="http://ruanjian.phpsou.com/search/?wd={<$ud>}">软件</a>&nbsp; <a href="http://game.phpsou.com/search/?wd={<$ud>}">游戏</a>&nbsp; <a href="http://anzhuo.phpsou.com/search/?wd={<$ud>}">安卓</a>&nbsp; <a href="http://iphone.phpsou.com/search/?wd={<$ud>}">苹果</a>&nbsp; <a href="http://qudong.phpsou.com/search/?wd={<$ud>}">驱动</a>&nbsp; <a href="http://sucai.phpsou.com/search/?wd={<$ud>}">素材</a></span> 
	<br>&nbsp;<br>-->
    {<section name=jingjia loop=$jingjia>}
    	<div class="content">
           {<if $jingjia[jingjia].img>}
		   <div class="main_img"><img src="{<$jingjia[jingjia].img>}" /></div>
		   {<else>}
           {</if>}
            <div class="main_content">
                <ul>
                    <li><a href="{<$jingjia[jingjia].url>}" target="_blank"><h1>{<$jingjia[jingjia].title>}</h1></a></li>
                    <li>{<$jingjia[jingjia].txt>}</li>
                    <li class="ur">电话：0871-8888888 地址：测试地址测试地址</li>
                    <li>{<$jingjia[jingjia].url>} <a href="../tg" target="_blank">推广</a></li>
                </ul>
            </div>
        </div>
    {</section>}
    {<section name=tt loop=$tt>}
        <div class="content">
        	{<if $tt[tt].img>}
			<!--<div class="main_img"><a href="/d_{<$tt[tt].id>}" target="_blank"><img src="{<$tt[tt].img>}" /></a></div>-->
			{<else>}
            {</if>}
            <div class="main_content">
                <ul>
                    <li><a href="{<$tt[tt].url>}" target="_blank"><h1>{<$tt[tt].title>}</h1></a></li>
                    <li class="txt">{<$tt[tt].description>}</li>
                    <li class="ur">来源：<a href="{<$tt[tt].url>}" target="_blank">{<$tt[tt].url>}</a>&nbsp;<a 
                    href="{<$tt[tt].url>}" target="_blank">网页快照</a></li>
                </ul>
            </div>
        </div>
    {</section>}
    </div>
    <div class="main_right">
<!--120医搜网 你身边的健康专家<br>
网址：www.120sou.net<br><br>-->
<strong>手机二维码：</strong>
<br><br>
{<$erwei>}<br><br>

<strong>历史记录：</strong><br>
{<section name=lishi loop=$lishi>}
<a href="?wd={<$lishi[lishi].l>}">{<$lishi[lishi].lishi>}</a><br>
{</section>}
    </div>
</div>
<DIV id=page>
  <DIV class=pg>
	{<$page>}
    </DIV>
    </DIV>
<div class="xiangguan">
<div class="xiangguan_left">相关搜索：</div>
<div class="xiangguan_right">
<table width="600" border="0" cellpadding="0" cellspacing="0">
  <tr>
	{<section name=key loop=$key>}
	<td height="22" valign="top" width="120">&nbsp;<a href="?wd={<$key[key].keywordd>}"><span>{<$key[key].keyword>}</span></a>{<$key[key].br>}</td>
	{</section>}
  </tr>
</table>


</div>
</div>
<div class="foot_1">
        <FORM id="form" name="f" action="" >
            <div class="word"><input name="wd" type="text" value="{<$wd>}" class="wd"></div>
            <div class="sou"><input value="搜索一下" type="submit" class="s" id=su> </div>
		</FORM>
</div>
<div class="foot">
	© 2012 PHPSou 此内容系PHPSou根据您的指令自动搜索的结果，不代表PHPSou赞成被搜索网站的内容或立场<script src="http://s6.cnzz.com/stat.php?id=4691653&web_id=4691653&online=1" language="JavaScript"></script> 
</div>
</body>
</html>
					