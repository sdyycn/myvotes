<?php /* Smarty version Smarty-3.1.12, created on 2015-04-30 08:07:22
         compiled from "E:\work\workspace\myvotes\adm\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:240015541c69a992961-58633758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56b961b89fc68ef3f079909a46ae667c4eb7605a' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\index.html',
      1 => 1430373705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240015541c69a992961-58633758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'title' => 0,
    'adminroot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5541c69aa0baf3_14746133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5541c69aa0baf3_14746133')) {function content_5541c69aa0baf3_14746133($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" <?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
</head>

<frameset rows="97,*" cols="*" frameborder="no" border="0" framespacing="0">
    <frame src="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/admin_index.php?frm=top" name="topFrame" scrolling="no" noresize="noresize" id="topFrame" />
    <frameset rows="*" cols="160,10,*" framespacing="0" frameborder="no" border="0" id="leftmenu">
	    	<frame src="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/admin_index.php?frm=left" name="leftFrame" scrolling="no" noresize="noresize" id="leftFrame" />
	      	<frame src="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/admin_index.php?frm=btn" name="btnFrame" scrolling="no" noresize="noresize" id="btnFrame" />
	      	<frame src="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/admin_index.php?frm=main" name="mainFrame" scrolling="auto" noresize="noresize" id="mainFrame" />
	</frameset>
    
    <noframes>
    <body>
		<p>This page uses frames. The current browser you are using does not support frames.</p>
    </body>
    </noframes>
</frameset>
</html><?php }} ?>