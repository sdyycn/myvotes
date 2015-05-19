<?php /* Smarty version Smarty-3.1.12, created on 2015-05-19 09:33:36
         compiled from "E:\work\workspace\myvotes\adm\templates\user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:28524555ae750db22b8-49011272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cd6c120b69ce7637f5334101e4cef7c331881a8' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\user_list.html',
      1 => 1432020814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28524555ae750db22b8-49011272',
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
  'unifunc' => 'content_555ae750e17bc9_86704992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ae750e17bc9_86704992')) {function content_555ae750e17bc9_86704992($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<base href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" />
<title>Insert title here</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="js/easyui/themes/default/easyui.css" />
<link rel="stylesheet" type="text/css" href="js/easyui/themes/icon.css" />
<script type="text/javascript" src="js/easyui/jquery.min.js"></script>
<script type="text/javascript" src="js/easyui/jquery.easyui.min.js"></script>

<script type="text/javascript">
	function doSearch(){
		alert("do search");
		return false;
	}
	
	function addUser(){
		$('#dg').edatagrid('addRow');
	}
	
	function saveUser(){
		$('#dg').edatagrid('saveRow');
	}
	
	function destroyUser(){
		$('#dg').edatagrid('destroyRow');
	}
	
	function cancelUser(){
		$('#dg').edatagrid('cancelRow');
	}
	
	var editIndex = undefined;
	function endEditing(){
		if (editIndex == undefined){return true}
		if ($('#dg').datagrid('validateRow', editIndex)){
			var ed = $('#dg').datagrid('getEditor', {index:editIndex,field:'productid'});
			var productname = $(ed.target).combobox('getText');
			$('#dg').datagrid('getRows')[editIndex]['productname'] = productname;
			$('#dg').datagrid('endEdit', editIndex);
			editIndex = undefined;
			return true;
		} else {
			return false;
		}
	}
	function onClickRow(index){
		if (editIndex != index){
			if (endEditing()){
				$('#dg').datagrid('selectRow', index)
						.datagrid('beginEdit', index);
				editIndex = index;
			} else {
				$('#dg').datagrid('selectRow', editIndex);
			}
		}
	}
	function append(){
		if (endEditing()){
			$('#dg').datagrid('appendRow',{status:'P'});
			editIndex = $('#dg').datagrid('getRows').length-1;
			$('#dg').datagrid('selectRow', editIndex)
					.datagrid('beginEdit', editIndex);
		}
	}
	function removeit(){
		if (editIndex == undefined){return}
		$('#dg').datagrid('cancelEdit', editIndex)
				.datagrid('deleteRow', editIndex);
		editIndex = undefined;
	}
	function accept(){
		if (endEditing()){
			$('#dg').datagrid('acceptChanges');
		}
	}
	function reject(){
		$('#dg').datagrid('rejectChanges');
		editIndex = undefined;
	}
	function getChanges(){
		var rows = $('#dg').datagrid('getChanges');
		alert(rows.length+' rows are changed!');
	}
</script>


</head>
<body id="right" class="main1">

<table id="dg" class="easyui-datagrid" title="管理员账户" style="width:700px;height:auto"
			data-options="singleSelect:true,
			toolbar:'#tb',
			url:'<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/userOpt.php?act=list',method:'get',
			onClickRow:onClickRow,
			pagination:true
			">
	<thead>
		<tr>
			<th field="ck" checkbox="true"></th>
			<th data-options="field:'id', width:50">ID</th>
			<th data-options="field:'name',width:80,editor:'textbox'">用户名</th>
			<th data-options="field:'group',width:80,editor:'textbox'">所在组</th>
			<th data-options="field:'status',width:80,editor:'textbox'">状态</th>
			<th data-options="field:'email',width:150,editor:'textbox'">EMAIL</th>
			<th data-options="field:'action',width:100,editor:'textbox'">操作</th>
		</tr>
	</thead>
</table>

<div id="tb" style="padding:5px;height:auto">

		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="return addUser();">添加</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="return destroyRow();">删除</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="return saveRow();">保存</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="return cancelRow();">取消</a>

		<span>账户名:</span>
		<input id="name" style="line-height:22px;border:1px solid #ccc">
		<a href="#" class="easyui-linkbutton" iconCls="icon-search" plain="true" onclick="return doSearch()">搜索</a>

</div>

</body>
</html><?php }} ?>