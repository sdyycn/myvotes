<?php /* Smarty version Smarty-3.1.12, created on 2015-06-03 08:20:39
         compiled from "E:\work\workspace\myvotes\adm\templates\admin_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:23076556e9cb7b55914-07078631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f6c2405906b8d01f5925ef0d8106f129b853e3d' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\admin_edit.html',
      1 => 1433312432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23076556e9cb7b55914-07078631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adminroot' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_556e9cb7b90292_59549624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556e9cb7b90292_59549624')) {function content_556e9cb7b90292_59549624($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<script type="text/javascript">
	function submitEditUserForm(){
		$('#fmodifyuser').form('submit',{
			url: '<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/adminpage.php?act=edit',
			onSubmit:function(){
				return $(this).form('enableValidation').form('validate');
			}
		});
		return false;
	}
</script>

<div>

<form id="fmodifyuser" method="post">
   	<table cellpadding="5">
   		<tr>
   			<td>用户名:</td>
   			<td>
   				<input class="easyui-textbox" type="text" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['uid'];?>
" readonly="true"></input>
   			</td>
   			<td>姓名:</td>
   			<td>
   				<input class="easyui-textbox" type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" data-options="required:true"></input>
   			</td>
   		</tr>
   		<tr>
   			<td>密码:</td>
   			<td><input id="pwd" class="easyui-validatebox" type="password" name="password" data-options="required:true"></input></td>
   			<td>再次输入:</td>
   			<td><input id="rpwd" class="easyui-validatebox" type="password" name="password2" required="required" validType="equals['#pwd']" invalidMessage="输入密码不一致"></input></td>
   		</tr>
   		<tr>
   			<td>状态</td>
   			<td>启用</td>
   			<td>EMAIL:</td>
   			<td><input class="easyui-textbox" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" data-options="required:true,validType:'email'"></input></td>
   		</tr>
   		<tr>
   			<td colspan="2"></td>
   			<td colspan="2">
    			<a style="margin:auto" href="javascript:void(0);" class="easyui-linkbutton" onclick="return submitEditUserForm();">修&nbsp;&nbsp;改</a>
    		</td>
   		</tr>
   	</table>
</form>
</div>
</body>
</html><?php }} ?>