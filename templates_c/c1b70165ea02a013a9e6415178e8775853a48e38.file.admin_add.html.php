<?php /* Smarty version Smarty-3.1.12, created on 2015-06-03 07:52:12
         compiled from "E:\work\workspace\myvotes\adm\templates\admin_add.html" */ ?>
<?php /*%%SmartyHeaderCode:22983556e960c473dc2-99221917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1b70165ea02a013a9e6415178e8775853a48e38' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\admin_add.html',
      1 => 1433300566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22983556e960c473dc2-99221917',
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
  'unifunc' => 'content_556e960c4f0dd8_90309644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556e960c4f0dd8_90309644')) {function content_556e960c4f0dd8_90309644($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" <?php echo '?>';?>

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
</head>
<body>
<script type="text/javascript">
	function submitAddUserForm(){
		$('#faddUser').form('submit',{
			url: '<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/adminpage.php?act=add',
			onSubmit:function(){
				return $(this).form('enableValidation').form('validate');
			}
		});
		return false;
	}
	function clearAddUserForm(){
		$('#faddUser').form('clear');
		return true;
	}
</script>
<div style="width:auto;height:auto">
    <form id="faddUser" method="post" novalidate="">
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
    			<td></td>
    			<td><center>
	    			<a href="javascript:void(0);" class="easyui-linkbutton" onclick="return submitAddUserForm();">添&nbsp;&nbsp;加</a>
	    		</center></td>
	    		<td><center>
	    			<a href="javascript:void(0);" class="easyui-linkbutton" onclick="return clearAddUserForm();">清&nbsp;&nbsp;除</a>
    			</center></td>
    			<td></td>
    		</tr>
    	</table>
    </form>
</div>
</body>
</html><?php }} ?>