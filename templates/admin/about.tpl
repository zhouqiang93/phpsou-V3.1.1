<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML>
<HEAD>
<META http-equiv=Content-Type content=text/html;charset=utf-8>
<title>关于我们</title>
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
        <td height="31"><div class="titlebt">关于我们</div></td>
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
                  <td width="6%" height="30" class="left_bt2">&nbsp;&nbsp;关于我们设置：</td>
                  <td width="6%" align="right" class="left_bt2"><a href="e_about.php?mydiv" rel="facebox">添加>></a>&nbsp;&nbsp;</td>
                </tr>
              </table>
			  



                <table width="100%" border="0" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF" style="border:1px solid #CCCCCC;">
				{<section name=about loop=$about>}
                  <tr>
                    <td width="6%" height="30" align="center" bgcolor="#f2f2f2" class="left_txt2">{<$about[about].about_id>}</td>
                    <td width="60%" bgcolor="#f2f2f2">&nbsp;<a href="{<$about[about].url>}" target="_blank">{<$about[about].title>}</a></td>
                    <td width="12%" height="30" align="center" bgcolor="#f2f2f2" class="left_txt">
					{<if $about[about].is_show>}√{<else>}<font color="red">×</font>{</if>}</td>
                    <td width="22%" height="30" align="center" bgcolor="#f2f2f2" class="left_txt"><a href="e_about.php?id={<$about[about].about_id>}&mydiv" rel="facebox">修改</a>&nbsp;<a href="?action=del&id={<$about[about].about_id>}" onClick="if(!confirm('确认删除码?')) return false;">删除</a></td>
                  </tr>
				{</section>}
                </table></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
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
