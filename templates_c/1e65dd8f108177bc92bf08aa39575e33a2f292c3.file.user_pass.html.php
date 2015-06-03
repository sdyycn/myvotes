<?php /* Smarty version Smarty-3.1.12, created on 2015-05-23 08:05:33
         compiled from "E:\work\workspace\myvotes\adm\templates\user_pass.html" */ ?>
<?php /*%%SmartyHeaderCode:9004556018ad897670-10547209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e65dd8f108177bc92bf08aa39575e33a2f292c3' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\user_pass.html',
      1 => 1430380276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9004556018ad897670-10547209',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_556018ad8f1418_75517164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556018ad8f1418_75517164')) {function content_556018ad8f1418_75517164($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" <?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="<{$baseurl}>" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="scripts/user.js?userpass.html123456" type="text/javascript"></script>
<title>Insert title here</title>
</head>
<body id="right" class="main1">
<div class="ttitle">
	<h1>密码修改</h1>
</div>
<table class="list-layout wd-500" >
	<form  method="post" action="<{$adminroot}>/userpage.php?act=edit" name="myform" id="myform">
		<thead>
			<tr>
				<th  colspan="2" class="tc">密码修改</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td width="141" class="a">旧密码 :</td>
				<td width="347"><input type="password" name="oldpassword" id="oldpassword" size="20" /></td>
			</tr>
			<tr>
				<td width="141" class="a">新密码 :</td>
				<td width="347"><input type="password" name="password" id="password" size="20" /></td>
			</tr>
			<tr>
				<td width="141" class="a">确认密码 :</td>
				<td width="347"><input type="password" name="repassword" id="repassword" size="20" /></td>
			</tr>
			<tr>
			<td><input type="hidden" name="username" value="<{$username}>" /></td>
			<td><input  type="submit" class="btn2"   name="submit" id="submit" value="修改" onClick="return checkform();"  /></td>
			</tr>
		</tbody>
	</form>
</table>
</body>
</html><?php }} ?>