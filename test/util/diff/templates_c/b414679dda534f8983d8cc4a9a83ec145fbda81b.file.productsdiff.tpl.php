<?php /* Smarty version Smarty-3.1.5, created on 2013-10-09 13:39:23
         compiled from "D:\Workplace\tt_fis2-diff\test\util\diff\result\productsdiff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:318395254ec0b65ba26-91002144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b414679dda534f8983d8cc4a9a83ec145fbda81b' => 
    array (
      0 => 'D:\\Workplace\\tt_fis2-diff\\test\\util\\diff\\result\\productsdiff.tpl',
      1 => 1376996168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318395254ec0b65ba26-91002144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productsdiff' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_5254ec0b6a127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5254ec0b6a127')) {function content_5254ec0b6a127($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>diff file list</title>
    <style type="text/css">
<!--
.STYLE1 {
	font-size: 24px;
	font-weight: bold;
}
.STYLE2 {
	color: #000000;
	font-size: 24px;
	font-weight: bold;
}
-->
    </style>
</head>

<body>
<p class="STYLE2">product difflist info：</p>
<TABLE style="BORDER-COLLAPSE: collapse" borderColor=#000000 height=40 cellPadding=1 width=900 align=left border=1>
  <tr>
    <td width="277" bgcolor="#009900">product name</td>
    <td bgcolor="#009900">diff result </td>
  </tr>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsdiff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
  <tr>
    
    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
	<td><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
">click here >></a></td>
  </tr>
<?php } ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p class="STYLE1">&nbsp;</p>
</body>
</html>
<?php }} ?>