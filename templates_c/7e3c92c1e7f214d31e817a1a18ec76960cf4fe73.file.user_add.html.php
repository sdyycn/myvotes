<?php /* Smarty version Smarty-3.1.12, created on 2015-05-23 09:29:46
         compiled from "E:\work\workspace\myvotes\adm\templates\user_add.html" */ ?>
<?php /*%%SmartyHeaderCode:3016255602c6a1bd757-49992039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e3c92c1e7f214d31e817a1a18ec76960cf4fe73' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\user_add.html',
      1 => 1432364511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3016255602c6a1bd757-49992039',
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
  'unifunc' => 'content_55602c6a223065_07871201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55602c6a223065_07871201')) {function content_55602c6a223065_07871201($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" <?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" />
<link rel="stylesheet" type="text/css" href="js/easyui/themes/default/easyui.css" />
<link rel="stylesheet" type="text/css" href="js/easyui/themes/icon.css" />
<script type="text/javascript" src="js/easyui/jquery.min.js"></script>
<script type="text/javascript" src="js/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript">
$.extend($.fn.validatebox.defaults.rules, {
	equals:{
		validator:function(value, param){
			return value==$(param[0].val();
		},
		message:'Field do not match.'
	}
})
function submitForm(){
	$('#ff').form('submit',{
		onSubmit:function(){
			return $(this).form('enableValidation').form('validate');
		}
	});
}
function clearForm(){
	$('#ff').form('clear');
}
</script>
<title>Insert title here</title>
</head>
<body id="right" class="main1">
<div class="easyui-panel" title="添加账户" style="width:600px">
	<div style="padding:10px 60px 20px 60px">
    <form id="ff" method="post" action="<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/userpage.php?act=add">
    	<table cellpadding="5">
    		<tr>
    			<td>用户名:</td>
    			<td>
    				<input class="easyui-textbox" type="text" name="uid" data-options="required:true"></input>
    			</td>
    			<td>姓名:</td>
    			<td>
    				<input class="easyui-textbox" type="text" name="username" data-options="required:true"></input>
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
    			<td><input class="easyui-textbox" name="email" data-options="required:true,validType:'email'"></input></td>
    		</tr>
    		<tr>
    			<td colspan="4"><input type="submit" name="submit" value="添  加"></input></td>
    		</tr>
    		<tr>
    			<td colspan="2"><center><a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()">添&nbsp;&nbsp;加</a></center></td>
    			<td colspan="2"><center><a href="javascript:void(0)" class="easyui-linkbutton" onclick="clearForm()">清&nbsp;&nbsp;除</a></center></td>
    		</tr>
    	</table>
    </form>
</div>
</body>
</html><?php }} ?>