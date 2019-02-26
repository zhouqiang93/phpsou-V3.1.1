<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML>
<HEAD>
<META http-equiv=Content-Type content=text/html;charset=utf-8>
<title>{<$title>}</title>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<meta name="Keywords" content="{<$keywords>}">
<meta name="description" content="{<$description>}">
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
	{<section name=about loop=$about>}
        	{<if $about[about].url>}
			<li><a href="{<$about[about].url>}" target="_blank">{<$about[about].title>}</a></li>
			<li>|</li>
			{<else>}
			<li><a href="/about.php?id={<$about[about].about_id>}" target="_blank">{<$about[about].title>}</a></li>
			<li>|</li>
            {</if>}
	{</section>}
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
																																										