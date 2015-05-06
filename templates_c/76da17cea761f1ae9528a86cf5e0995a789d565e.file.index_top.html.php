<?php /* Smarty version Smarty-3.1.12, created on 2015-05-06 05:05:42
         compiled from "E:\work\workspace\myvotes\adm\templates\index_top.html" */ ?>
<?php /*%%SmartyHeaderCode:28833554985060ed8b2-75838791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76da17cea761f1ae9528a86cf5e0995a789d565e' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\index_top.html',
      1 => 1430377435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28833554985060ed8b2-75838791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'welcome' => 0,
    'adminroot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_554985061e3a70_54962392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554985061e3a70_54962392')) {function content_554985061e3a70_54962392($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" <?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" />
<title></title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>

<table cellspacing=0 cellpadding=0 width="100%" background="images/header_bg.jpg" border=0>
  	<tr height=56>
        <td width=260>
			<img height=56 src="images/header_left.jpg" width=260>
		</td>
        <td style="FONT-WEIGHT: bold; COLOR: #fff; PADDING-TOP: 20px" align=middle>
            <?php echo $_smarty_tpl->tpl_vars['welcome']->value;?>
当前用户：admin &nbsp;&nbsp; 
            <a style="color:#fff" href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/user/userpage.php?page=pwd" target=main>修改口令</a>
             &nbsp;&nbsp; 
            <a style="color:#fff" onclick="if (confirm('确定要退出吗？')) return true; else return false;" href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/login.php?act=logout" target=_top>退出系统</a>
        </td>
	</tr>
</table>
<table cellspacing=0 cellpadding=0 width="100%" border=0>
	<tr bgColor=#1c5db6 height=4>
    	<td></td>
	</tr>
</table>
</html><?php }} ?>