<?php /* Smarty version Smarty-3.1.5, created on 2013-10-10 17:04:19
         compiled from "D:\Workplace\tt_fis2-diff\test\util\diff\result\difflist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:516052566d9350afb3-35791720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27a07413f2388526b13cb85a4ec5094413a8fb9c' => 
    array (
      0 => 'D:\\Workplace\\tt_fis2-diff\\test\\util\\diff\\result\\difflist.tpl',
      1 => 1381314576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '516052566d9350afb3-35791720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productname' => 0,
    'difflist' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_52566d9357dfd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52566d9357dfd')) {function content_52566d9357dfd($_smarty_tpl) {?><!DOCTYPE html>
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
<table width=1000 border="0" style="overflow:hidden">
  <tr>
    <td bordercolor="#000000"><span class="STYLE2">diff info：</span></td>
  </tr>
  <tr>
    <td bordercolor="#000000">
        <TABLE style="BORDER-COLLAPSE: collapse" borderColor=#000000 height=40 cellPadding=1 align=left border=1>
          <tr>
            <td width="235" bgcolor="#009900">file name</td>
            <td bgcolor="#009900"><?php echo $_smarty_tpl->tpl_vars['productname']->value;?>
 new </td>
            <td bgcolor="#009900"><?php echo $_smarty_tpl->tpl_vars['productname']->value;?>
 old</td>
          </tr>
          <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['difflist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
              <tr>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></td>
                <td width="359"><?php echo $_smarty_tpl->tpl_vars['value']->value['new'];?>
</td>
                <td width="375"><?php echo $_smarty_tpl->tpl_vars['value']->value['old'];?>
</td>
              </tr>
          <?php } ?>
        </table>
    </td>
  </tr>
</table>
</body>
</html>
<?php }} ?>