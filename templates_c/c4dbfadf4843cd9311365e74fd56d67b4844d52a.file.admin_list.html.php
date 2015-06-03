<?php /* Smarty version Smarty-3.1.12, created on 2015-06-03 08:27:04
         compiled from "E:\work\workspace\myvotes\adm\templates\admin_list.html" */ ?>
<?php /*%%SmartyHeaderCode:17191556e9e3842dea7-86426219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4dbfadf4843cd9311365e74fd56d67b4844d52a' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\admin_list.html',
      1 => 1433310609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17191556e9e3842dea7-86426219',
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
  'unifunc' => 'content_556e9e3847c0a4_83272945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556e9e3847c0a4_83272945')) {function content_556e9e3847c0a4_83272945($_smarty_tpl) {?><!DOCTYPE html>
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

	//////////////////////////////
	function onAddUser(){
		$('#addUserDlg').dialog({
		    title: '添加账户',
		    width: 500,
		    height: 200,
		    closed: false,
		    cache: false,
		    href: '<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/adminpage.php?page=add',
		    modal: false
		});
//		$('#addUserDlg').dialog('refresh', '<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/adminpage.php?page=list');
		
		return false;
	}
	
	function onDeleteUser(){
//		alert("remove user");
		var row = $('#dg').datagrid('getSelected');
		if (!row) {
			alert("请选择需要删除的账户！");
			return false;
		}
		
		var url = "<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/adminpage.php?act=delete&id="+row.id;
//		alert(url);
		$.getJSON(url, function handler(res){
			$('#dg').datagrid('reload');
			if (res.status == 'true'){
				
				alert("删除成功!");
			} else {
				alert("删除失败!");
			}
//			alert(res.msg);
		});
		return false;
	}
	
	function onEditUser(){
		var row = $('#dg').datagrid('getSelected');
		if (!row){
			alert("请选择需要修改的账户！");
			return false;
		}

		//*/	
		var url = '<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/adminpage.php?page=edit&id='+row.id;
//		alert(url);
		$('#editUserDlg').dialog({
		    title: '账户修改',
		    width: 500,
		    height: 200,
		    closed: false,
		    cache: false,
		    href: url,
		    modal: true
		});
		//*/
		return false;
	}
	
	function onGetSelected(){
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
/adminpage.php?act=list', method:'get',
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
		<a href="javascript:void(0);" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="return onAddUser();">添加</a>
		<a href="javascript:void(0);" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="return onEditUser();">修改</a>	
		<a href="javascript:void(0);" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="return onDeleteUser();">删除</a>
		<a href="javascript:void(0);" class="easyui-linkbutton" onclick="return onGetSelected();">GetSelected</a>

		<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<span>账户名:</span>
		<input id="name" style="line-height:22px;border:1px solid #ccc">
		<a href="javascript:void(0);" class="easyui-linkbutton" iconCls="icon-search" plain="true" onclick="return doSearch();">搜索</a>

</div>

<div id="editUserDlg"></div>
<div id="addUserDlg"></div>

</body>
</html><?php }} ?>