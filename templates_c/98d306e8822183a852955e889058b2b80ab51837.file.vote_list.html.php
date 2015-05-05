<?php /* Smarty version Smarty-3.1.12, created on 2015-05-05 07:33:09
         compiled from "E:\work\workspace\myvotes\adm\templates\vote_list.html" */ ?>
<?php /*%%SmartyHeaderCode:10844554856159766d0-76003950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98d306e8822183a852955e889058b2b80ab51837' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\vote_list.html',
      1 => 1430803283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10844554856159766d0-76003950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'votes' => 0,
    'vote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55485615a0ec73_78883957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55485615a0ec73_78883957')) {function content_55485615a0ec73_78883957($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" <?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>Insert title here</title>
</head>
<body id="right" class="main1">
<div class="ttitle">
	<h1>我的投票</h1>
</div>
<table class="list-layout wd-500" >
  <thead>
    <tr>
      <th>ID</th>
      <th width="145">主题</th>
      <th width="145">状态</th>
      <th width="145">操作</th>
    </tr>
  </thead>
  <tbody>
  <?php  $_smarty_tpl->tpl_vars['vote'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vote']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['votes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vote']->key => $_smarty_tpl->tpl_vars['vote']->value){
$_smarty_tpl->tpl_vars['vote']->_loop = true;
?>
    <tr>
    	<td width="351"><?php echo $_smarty_tpl->tpl_vars['vote']->value['id'];?>
</td>
      	<td width="351"><?php echo $_smarty_tpl->tpl_vars['vote']->value['title'];?>
</td>
       	<td width="351">OPEN</td>
      	<td width="145"><a href="<{$adminroot}>/userpage.php?act=delete&id=<{$user.id}>"  onclick="return confirm('确认删除？')" class="btn2">删除</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</body>
</html><?php }} ?>