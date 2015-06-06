<?php /* Smarty version Smarty-3.1.12, created on 2015-06-06 08:54:25
         compiled from "E:\work\workspace\myvotes\adm\templates\cls_list.html" */ ?>
<?php /*%%SmartyHeaderCode:377955729921bc4494-09670197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5eb46e394569e528e3f27eca6f31804aa841287' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\cls_list.html',
      1 => 1433573534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '377955729921bc4494-09670197',
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
  'unifunc' => 'content_55729921c2dc11_86218409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55729921c2dc11_86218409')) {function content_55729921c2dc11_86218409($_smarty_tpl) {?><!DOCTYPE html>
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
</head>
<body>
	<table id="tg" class="easyui-treegrid" title="栏目管理" style="width:800px;height:250px"
			data-options="
				iconCls: 'icon-ok',
				rownumbers: true,
				animate: true,
				url:'<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/cls.php?act=list',
				method:'get',
				toolbar:'#tb',
				idField:'id',
				treeField:'name'
			">
		<thead>
			<tr>
				<th data-options="field:'id',width:30">ID</th>
				<th data-options="field:'_parentId',width:30,editor:'numberbox'">上级目录ID</th>
				<th data-options="field:'name',width:180,editor:'text'">栏目名</th>
				<th data-options="field:'mid',width:50,align:'right',editor:'text'">栏目ID</th>
				<th data-options="field:'status',width:60,editor:'numberbox'">是否显示</th>
				<th data-options="field:'privilege',width:80,editor:'numberbox'">同级显示顺序</th>
				<th data-options="field:'type',width:80,editor:'numberbox'">栏目类型(目录或URL))</th>
				<th data-options="field:'directory',width:150,editor:'text'">目录或URL</th>
				<th data-options="field:'description',width:80,editor:'text'">备注</th>
			</tr>
		</thead>
	</table>
	<div id="tb">
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="add()">添加</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="delete()">删除</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="edit()">修改</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="save()">保存</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="cancel()">取消</a>
	</div>
	<script type="text/javascript">
		var editingId;
		function edit(){
	//		alert("edit column");
			if (editingId != undefined){
				$('#tg').treegrid('select', editingId);
				alert("edit column1");
				return;
			}
			var row = $('#tg').treegrid('getSelected');
			if (row){
				editingId = row.id
//				alert(editingId);
				$('#tg').treegrid('beginEdit', editingId);
			}
		}
		function save(){
//			alert("save column");
			if (editingId != undefined){
				var t = $('#tg');
				t.treegrid('endEdit', editingId);
				var row = t.treegrid('getSelected');
				var url = "<?php echo $_smarty_tpl->tpl_vars['adminroot']->value;?>
/cls.php?act=edit";
	/*/			url += "&id="+editingId;
				url += "&name="+row.name;
				url += "&mid="+row.mid;
				url += "&status="+row.status;
				url += "&privilege="+row.privilege;
				url += "&type="+row.type;
				url += "&directory="+row.directory;
				url += "&description="+row.description;
//				alert(url);
//*/
				$.post(url, {id:editingId, pid:row._parentId, name:row.name, mid:row.mid, status:row.status, privilege:row.privilege, type:row.type, directory:row.directory, description:row.description},
						function(data){
					alert(data);
					$('#tg').treegrid('reload');
				});
				editingId = undefined;
			}
		}
		function cancel(){
//			alert("cancel edit");
			if (editingId != undefined){
				$('#tg').treegrid('cancelEdit', editingId);
				editingId = undefined;
			}
		}
	</script>

</body>
</html><?php }} ?>