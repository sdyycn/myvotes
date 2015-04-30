<?php /* Smarty version Smarty-3.1.12, created on 2015-04-30 09:45:56
         compiled from "E:\work\workspace\myvotes\adm\templates\index_left.html" */ ?>
<?php /*%%SmartyHeaderCode:218155541ddb4495055-68428589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4426748c59a15668001e7feb7299451618e6919b' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\index_left.html',
      1 => 1430379483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218155541ddb4495055-68428589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'adminroot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5541ddb45258f0_73275462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5541ddb45258f0_73275462')) {function content_5541ddb45258f0_73275462($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" <?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" />
<link href="common/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/menu.js"></script>
<title>Insert title here</title>
</head>
<body id="left">
<div class="ttitle">
  <h1>控制菜单</h1>
</div>
<dl>
  <dt onclick="javascript:show(this);">基本信息配置</dt>
  <dd><img src="images/menu_icon.gif" />&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/config/siteinfo.php" target="mainFrame">网站信息配置</a></dd>
</dl>
<dl>
  <dt onclick="javascript:show(this);">账户管理</dt>
  <dd><a href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/user/userpage.php?page=list" target="mainFrame">用户管理</a></dd>
  <dd><a href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/user/userpage.php?page=add" target="mainFrame">用户添加</a></dd>
  <dd><a href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/user/userpage.php?page=pwd" target="mainFrame">密码修改</a></dd>
</dl>
<dl>
  <dt onclick="javascript:show(this);">会员管理</dt>
  <dd><img src="images/menu_icon.gif" /><a href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/job/jobpost.php" target="mainFrame">个人会员管理</a></dd>
  <dd><a href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/job/joblist.php" target="mainFrame">企业会员管理</a></dd>
</dl>
<dl>
  <dt onclick="javascript:show(this);">投票管理</dt>
  <dd><a href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/votes/votepage.php?page=title" target="mainFrame">主题管理</a></dd>
  <dd><a href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/votes/votepage.php?page=question" target="mainFrame">题目管理</a></dd>
  <dd><a href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/votes/votepage.php?page=result" target="mainFrame">查看结果</a></dd>
</dl>
<dl>
  <dt onclick="javascript:show(this);">资讯管理</dt>
  <dd><a href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/news/newspage.php?page=type" target="mainFrame">资讯类别</a></dd>
  <dd><a href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/news/newspage.php?page=list" target="mainFrame">资讯管理</a></dd>
  <dd><a href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/news/newspage.php?page=add" target="mainFrame">资讯添加</a></dd>
</dl>
<dl>
  <dt onclick="javascript:show(this);">广告管理</dt>
  <dd><a href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/ad/messagelist.php" target="mainFrame">广告管理</a></dd>
  <dd><a href="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/ad/messagelist.php" target="mainFrame">广告添加</a></dd>
</dl>
</body>
</html><?php }} ?>