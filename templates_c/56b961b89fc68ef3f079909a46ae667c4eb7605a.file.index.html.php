<?php /* Smarty version Smarty-3.1.12, created on 2015-05-06 05:05:41
         compiled from "E:\work\workspace\myvotes\adm\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1939455498505b88528-27579115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56b961b89fc68ef3f079909a46ae667c4eb7605a' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\index.html',
      1 => 1430377393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1939455498505b88528-27579115',
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
  'unifunc' => 'content_55498505bf99b2_34588185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55498505bf99b2_34588185')) {function content_55498505bf99b2_34588185($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" <?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link href="css/admin.css" type="text/css" rel="stylesheet">
</head>

<frameset rows="60,*" cols="*" frameborder="no" border="0" framespacing="0">
    <frame src="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/index.php?frm=top" name="topFrame" scrolling="no" noresize="noresize" id="topFrame" />
    <frameset rows="*" cols="160,10,*" framespacing="0" frameborder="no" border="0" id="leftmenu">
	    	<frame src="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/index.php?frm=left" name="leftFrame" scrolling="no" noresize="noresize" id="leftFrame" />
	      	<frame src="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/index.php?frm=btn" name="btnFrame" scrolling="no" noresize="noresize" id="btnFrame" />
	      	<frame src="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/index.php?frm=main" name="mainFrame" scrolling="auto" noresize="noresize" id="mainFrame" />
	</frameset>
    
    <noframes>
    <body>
		<p>This page uses frames. The current browser you are using does not support frames.</p>
    </body>
    </noframes>
</frameset>
</html><?php }} ?>