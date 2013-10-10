<?php /* Smarty version Smarty-3.1.5, created on 2013-10-10 17:04:18
         compiled from "D:\Workplace\tt_fis2-diff\test\util\diff\result\diffdetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2106752566d92f05a69-30945316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edae8b4c01ef418f6304edd9602130adf8202b52' => 
    array (
      0 => 'D:\\Workplace\\tt_fis2-diff\\test\\util\\diff\\result\\diffdetails.tpl',
      1 => 1376996168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2106752566d92f05a69-30945316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'old' => 0,
    'new' => 0,
    'diffdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_52566d9307bb6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52566d9307bb6')) {function content_52566d9307bb6($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>diff details</title>
    <style type="text/css">
        .del{
            background:#fcc;
        }
        .ins{
            background:#cfc;
        }
        .old{
            background:#fcc;
        }
        .new{
            background:#cfc;
        }
    </style>
</head>

<body>
<p>&nbsp;</p>
<TABLE style="BORDER-COLLAPSE: collapse" borderColor=#000000 height=40 cellPadding=1 width=900 align=left border=1>
    <tr>
        <td width="871" bordercolor="#000000"><span class="STYLE2">红色代表老版本编译后的结果<?php echo $_smarty_tpl->tpl_vars['old']->value;?>
</span></td>
    </tr>
    <tr>
        <td bordercolor="#000000"><span class="STYLE4">绿色代表新版本编译后的结果<?php echo $_smarty_tpl->tpl_vars['new']->value;?>
</span></td>
    </tr>
    <tr>
        <td bordercolor="#000000"><span class="STYLE5">diff details</span></td>
    </tr>
    <tr>
        <td bordercolor="#000000">
            <p class="STYLE5">
                    <?php echo $_smarty_tpl->tpl_vars['diffdata']->value;?>

            </p>
        </td>
    </tr>
</table>

</body>
</html>
<?php }} ?>