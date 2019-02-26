<?php /*%%SmartyHeaderCode:25484513f2d34d0f466-82958466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '992615bf80b19168122e8ddd8f4690abc451ef94' => 
    array (
      0 => '..\\templates\\index.tpl',
      1 => 1363095281,
      2 => 'file',
    ),
    '6a8c63694f8c85582903626fb09d2270745dae78' => 
    array (
      0 => '..\\include\\configs\\test.conf',
      1 => 1358271978,
      2 => 'file',
    ),
    'b55ed6b4f266b986c43149d162d3e779b8d73ecc' => 
    array (
      0 => '..\\templates\\header.tpl',
      1 => 1358271978,
      2 => 'file',
    ),
    'e25439d82702c0d11695d98a0275876a92d3e010' => 
    array (
      0 => '..\\templates\\footer.tpl',
      1 => 1358271978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25484513f2d34d0f466-82958466',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513f2ef43c5529_99091917',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513f2ef43c5529_99091917')) {function content_513f2ef43c5529_99091917($_smarty_tpl) {?><HTML>
<HEAD>
<TITLE>{$title} - {$Name}</TITLE>
</HEAD>
<BODY bgcolor="#ffffff">


<PRE>

{* bold and title are read from the config file *}
{if #bold#}<b>{/if}
{* capitalize the first letters of each word of the title *}
Title: {#title#|capitalize}
{if #bold#}</b>{/if}

The current date and time is {$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}

The value of global assigned variable $SCRIPT_NAME is {$SCRIPT_NAME}

Example of accessing server environment variable SERVER_NAME: {$smarty.server.SERVER_NAME}

The value of {ldelim}$Name{rdelim} is <b>{$Name}</b>

variable modifier example of {ldelim}$Name|upper{rdelim}

<b>{$Name|upper}</b>


An example of a section loop:

{section name=outer 
loop=$FirstName}
{if $smarty.section.outer.index is odd by 2}
	{$smarty.section.outer.rownum} . {$FirstName[outer]} {$LastName[outer]}
{else}
	{$smarty.section.outer.rownum} * {$FirstName[outer]} {$LastName[outer]}
{/if}
{sectionelse}
	none
{/section}

An example of section looped key values:

{section name=sec1 loop=$contacts}
	phone: {$contacts[sec1].phone}<br>
	fax: {$contacts[sec1].fax}<br>
	cell: {$contacts[sec1].cell}<br>
{/section}
<p>

testing strip tags
{strip}
<table border=0>
	<tr>
		<td>
			<A HREF="{$SCRIPT_NAME}">
			<font color="red">This is a  test     </font>
			</A>
		</td>
	</tr>
</table>
{/strip}

</PRE>

This is an example of the html_select_date function:

<form>
{html_select_date start_year=1998 end_year=2010}
</form>

This is an example of the html_select_time function:

<form>
{html_select_time use_24_hours=false}
</form>

This is an example of the html_options function:

<form>
<select name=states>
{html_options values=$option_values selected=$option_selected output=$option_output}
</select>
</form>

</BODY>
</HTML>

<?php }} ?>