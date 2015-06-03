<?php /* Smarty version Smarty-3.1.12, created on 2015-05-23 09:29:43
         compiled from "E:\work\workspace\myvotes\adm\templates\user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2671755602c67182301-66894968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cd6c120b69ce7637f5334101e4cef7c331881a8' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\user_list.html',
      1 => 1432365323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2671755602c67182301-66894968',
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
  'unifunc' => 'content_55602c672031a7_87671608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55602c672031a7_87671608')) {function content_55602c672031a7_87671608($_smarty_tpl) {?><!DOCTYPE html>
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
$(function(){
	$('#dlg_add').dialog('close');
	$('#dlg_edit').dialog('close');
})
	function doSearch(){
		alert("do search");
		return false;
	}

	var editIndex = undefined;
	function endEditing(){
		if (editIndex == undefined){
//			alert("editIndex undefined.");
			return true;
		}
		
		if ($('#dg').datagrid('validateRow', editIndex)){
//			alert("111");
			var ed = $('#dg').datagrid('getEditor', {index:editIndex,field:'id'});
			var name = $(ed.target).combobox('getText');
			$('#dg').datagrid('getRows')[editIndex]['name'] = productname;
			$('#dg').datagrid('endEdit', editIndex);
			editIndex = undefined;
			return true;
		} else {
			alert("222");
			return false;
		}
	}
	function onClickRow(index){
		return false;
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
		
		return false;
	}
	function reject(){
		$('#dg').datagrid('rejectChanges');
		editIndex = undefined;
	}
	function getChanges(){
		var rows = $('#dg').datagrid('getChanges');
		alert(rows.length+' rows are changed!');
	}
	
	//////////////////////////////
	function addUser(){
//		alert("popup window add user");
		$('#dlg_add').dialog('open');
		return false;
	}
	
	function deleteUser(){
		alert("remove user");
		return false;
	}
	
	function editUser(){
//		alert("edit user");
//		$('#ff').form('load', 'form_data1.json');
		$('#dlg_edit').dialog('open');
		
		return false;
	}
	
	function getSelected(){
		var row = $('#dg').datagrid('getSelected');
		if (row){
			$.messager.alert('Info', row.id+":"+row.name+":"+row.email);
		}
		return false;
	}

</script>


</head>
<body id="right" class="main1" style="width:800px">

<table id="dg" class="easyui-datagrid" title="管理员账户" style="width:700px;height:auto"
			data-options="singleSelect:true,
			rownumbers:true,
			toolbar:'#tb',
			url:'<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/adminopt.php?act=list', method:'get',
			onClickRow:onClickRow,
			pagination:true
			">
	<thead>
		<tr>
			<th field="ck" checkbox="true"></th>
			<th data-options="field:'id', width:50">ID</th>
			<th data-options="field:'uid',width:80,editor:'textbox'">用户名</th>
			<th data-options="field:'name',width:80,editor:'textbox'">姓名</th>
			<th data-options="field:'status',width:80,editor:'textbox'">状态</th>
			<th data-options="field:'email',width:150,editor:'textbox'">EMAIL</th>
			<th data-options="field:'action',width:100,editor:'textbox'">操作</th>
		</tr>
	</thead>
</table>

<div id="tb" style="padding:5px;height:auto">

<!-- 		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="return addUser();">添加</a>-->
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="return addUser();">添加</a>

<!-- 		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="return editUser();">修改</a> -->
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="return editUser();">修改</a>
		
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="return deleteUser();">删除</a>
		
		<a href="#" class="easyui-linkbutton" onclick="return getSelected();">GetSelected</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span>账户名:</span>
		<input id="name" style="line-height:22px;border:1px solid #ccc">
		<a href="#" class="easyui-linkbutton" iconCls="icon-search" plain="true" onclick="return doSearch()">搜索</a>

</div>

<div id="dlg_edit" class="easyui-dialog" title="修改账户" style="width:700px;height:auto;padding:10px"
			data-options="
				iconCls: 'icon-edit',
				buttons: [{
					text:'保存',
					iconCls:'icon-ok',
					handler:function(){
						alert('ok');
					}
				},{
					text:'关闭',
					handler:function(){
						$('#dlg_edit').dialog('close');
					}
				}]
			">
	<div>
		<form id="ff" class="easyui-form" method="post" data-options="novalidate:true">
	    	<table cellpadding="5">
	    		<tr>
	    			<td>用户名:</td>
	    			<td><input class="easyui-textbox" type="text" name="name" data-options="required:true"></input></td>
	    		</tr>
	    		
	    		<tr>
	    			<td>所在组:</td>
	    			<td><input class="easyui-textbox" type="text" name="group" data-options="required:true"></input></td>
	    		</tr>
	    		<tr>
	    			<td>状态:</td>
	    			<td><input class="easyui-textbox" name="message" data-options="required:true"></input></td>
	    		</tr>
	    		<tr>
	    			<td>Email:</td>
	    			<td><input class="easyui-textbox" type="text" name="email" data-options="required:true,validType:'email'"></input></td>
	    		</tr>
	    	</table>
	    </form>
	</div>
</div>
<div id="dlg_add" class="easyui-dialog" title="添加帐户" style="width:700px;height:auto;padding:10px"
			data-options="
				iconCls: 'icon-add',
				buttons: [{
					text:'保存',
					iconCls:'icon-ok',
					handler:function(){
						alert('ok');
					}
				},{
					text:'关闭',
					handler:function(){
						$('#dlg_add').dialog('close');
					}
				}]
			">
		The dialog content.
	</div>


</body>
</html><?php }} ?>