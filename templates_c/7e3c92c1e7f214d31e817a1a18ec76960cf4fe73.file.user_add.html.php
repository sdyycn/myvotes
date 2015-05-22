<?php /* Smarty version Smarty-3.1.12, created on 2015-05-22 10:09:40
         compiled from "E:\work\workspace\myvotes\adm\templates\user_add.html" */ ?>
<?php /*%%SmartyHeaderCode:23137555ee44483eb10-55091624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e3c92c1e7f214d31e817a1a18ec76960cf4fe73' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\user_add.html',
      1 => 1430380268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23137555ee44483eb10-55091624',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_555ee444890ba1_17048949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ee444890ba1_17048949')) {function content_555ee444890ba1_17048949($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" <?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="<{$baseurl}>" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="scripts/user.js?12345" type="text/javascript"></script>
<title>Insert title here</title>
</head>
<body id="right" class="main1">
<div class="ttitle">
	<h1>管理员添加</h1>
</div>           
<table class="list-layout wd-500" >
	<form  method="post" action="<{$adminroot}>/userpage.php?act=add" name="myform" id="myform">
		<thead>
			<tr>
				<th  colspan="2" class="tc">管理员添加</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td width="141" class="a">用户名:</td>
				<td width="347"><input name="username"  type="text" id="username" size="20" /></td>
			</tr>
			<tr>
				<td width="141" class="a">密码：</td>
				<td width="347"><input name="password"  type="password" id="password" size="20" /></td>
			</tr>
			<tr>
				<td width="141" class="a">再次输入：</td>
				<td width="347"><input name="repassword"  type="password" id="repassword" size="20" /></td>
			</tr>
			<tr>
			<td></td>
			<td><input  type="submit" class="btn2"   name="submit" id="submit" value="添加" onClick="return checkform();"  /></td>
			</tr>
		</tbody>
	</form>
</table>
</body>
</html><?php }} ?>