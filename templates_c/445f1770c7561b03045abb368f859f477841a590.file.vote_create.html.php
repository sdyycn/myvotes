<?php /* Smarty version Smarty-3.1.12, created on 2015-05-05 07:51:49
         compiled from "E:\work\workspace\myvotes\adm\templates\vote_create.html" */ ?>
<?php /*%%SmartyHeaderCode:2484055485a75089b30-16531493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '445f1770c7561b03045abb368f859f477841a590' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\vote_create.html',
      1 => 1430805100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2484055485a75089b30-16531493',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55485a75125f44_40036567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55485a75125f44_40036567')) {function content_55485a75125f44_40036567($_smarty_tpl) {?><!DOCTYPE html>
<!-- saved from url=(0047)http://www.stonepoll.com/action/createvote.html -->
<html keydn="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>创建投票</title>
<link href="http://www.stonepoll.com/js/uploadify/uploadify.css" rel="stylesheet" media="screen">
<meta http-equiv="X-UA-Compatible" content="edge">
<link href="http://www.stonepoll.com/favicon.ico" type="image/x-icon" rel="icon">
<link href="http://www.stonepoll.com/favicon.ico" type="image/x-icon" rel="shortcut icon">
<link href="http://res.data.mvote.net/css/bootstrap.css" rel="stylesheet" media="screen">


<script src="./创建投票-投票网-磐石投票_files/config.js"></script>
<link href="http://res.data.mvote.net/css/style.css?ver=103" rel="stylesheet" media="screen">
<script src="./创建投票-投票网-磐石投票_files/bootstrap.min.js"></script>

<script>
var sid = "82cdd0e0bbe41e57c15a64ea3b449a80";
var isGuest = true;
</script>
<script>
var nowvoteopnum = 2;
var uid = 0;
</script>
<style type="text/css"></style>
<script src="./创建投票-投票网-磐石投票_files/zh-cn.js" type="text/javascript" defer="defer">
</script><link href="./创建投票-投票网-磐石投票_files/ueditor.css" type="text/css" rel="stylesheet">
<script src="./创建投票-投票网-磐石投票_files/codemirror.js" type="text/javascript" defer="defer"></script>
<link rel="stylesheet" type="text/css" href="./创建投票-投票网-磐石投票_files/codemirror.css">
</head>
<body>

<div class="wrap">
<div class="container bodycontainer">
<h2>创建投票</h2>
	<div class="row-fluid">
	<div class="span8">
		
			
			
			
			<form class="form-horizontal" method="post" target="posthere" action="http://www.stonepoll.com/dosubmit.php?action=createvote" onsubmit="return checkCreateVoteForm();" autocomplete="off">
		    <input type="hidden" name="action" value="createvote">
		     <input type="hidden" name="op" value="dosavevote">
		    <legend>投票基本设置</legend>
		    
		    <div class="control-group" id="inputTitleDiv">
		    <label class="control-label" for="inputTitle">投票标题</label>
			    <div class="controls">
			    <input type="text" name="votetitle" id="inputTitle" placeholder="请输入投票标题" mouseev="true" keyev="true" style="padding-right: 0px; cursor: auto; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;">
			    <span class="help-inline"></span>
			    </div>
		    </div>
		   
		   
		   <div class="control-group">
		    <label class="control-label" for="">投票类型</label>
			    <div class="controls">
			    
			    <label class="radio">
					<input type="radio" id="inputVotetype" name="votetype" class="votetype" value="0" checked=""> 单选
				</label>
			    <label class="radio">
					<input type="radio" name="votetype" value="1" class="votetype"> 多选
				</label>
			    </div>
		    </div>
		   
		   <div class="control-group" id="inputMaxselDiv" style="display: none;">
		    <label class="control-label" for="">做多选择几项</label>
			    <div class="controls">
			    <input type="text" name="maxselection" id="inputMaxsel" placeholder="0" value="0" class="span2">
			    <span class="help-inline">设置最多选择几项，0为不限制</span>
			    </div>
		    </div>
		    
		    		    
		   			    <div class="control-group" id="inputQuickVoteDiv" style="display: block;">
			    <label class="control-label" for="">快速投票</label>
				    <div class="controls">
				    
				    <label class="radio">
						<input class="quickvote" type="radio" id="" name="quickvote" value="0" checked=""> 否
						<span class="help-inline">点击“提交投票”按钮后提交投票</span>
					</label>
				    <label class="radio">
						<input class="quickvote" type="radio" name="quickvote" value="1"> 是
						<span class="help-inline">选择投票项后自动提交投票，不显示“提交投票“按钮（只适用于单选投票）</span>
					</label>
				    </div>
			    </div>
		   		   <div class="control-group" id="moresetting" style="display: none;">
		   		<label class="control-label" for="">&nbsp;</label>
				<div class="controls"><button type="button" class="btn">更多设置</button></div>
		   </div>
			
		   <!--start morevoteset--->
		   <div id="morevoteset" style="">
			   		    
			    
			    <div class="control-group">
			    <label class="control-label" for="">投票隐私</label>
				    <div class="controls">
				    
				    <label class="radio">
						<input class="voteviewtype" type="radio" id="inputViewtypel" name="public" value="0" checked=""> 任何人可查看和投票
					</label>
				    <label class="radio">
						<input class="voteviewtype" type="radio" name="public" value="1"> 凭密码查看和投票
					</label>
				    </div>
			    </div>
		    
			    <div class="control-group" style="display:none" id="inputVotepwdDiv">
			    <label class="control-label" for="inputVotepwd">密码 </label>
				    <div class="controls">
				    <input type="text" name="voteviewpasswd" id="inputVotepwd" placeholder="请输入密码">
				    </div>
			    </div>
		    
		    
			    <div class="control-group">
			    
			    <label class="control-label" for="">投票后才能查看结果？</label>
				    <div class="controls">
				    
				    <label class="radio">
						<input type="radio" id="inputViewresult" name="aftervote" value="0" checked=""> 否
						<span class="help-inline">不投票即可看到当前的投票选项分布情况</span>
					</label>
				    <label class="radio">
						<input type="radio" name="aftervote" value="1"> 是
						<span class="help-inline">只有在提交投票后才可看到投票选项分布情况</span>
					</label>
					
				    </div>
			    </div>
		    
			    <div class="control-group">
			    
			    <label class="control-label" for="inputExpairtime">投票截止时间 :</label>
			    
				    <div style="margin-left:19px;" class="controls input-append date form_datetime" data-date="2015-05-04 08:18:03" data-date-format="yyyy-mm-dd hh:ii:ss" data-link-field="dtp_input1">
				                    <input size="16" type="text" value="" id="inputExpairtime" name="expairtime" readonly="">
				                    <span class="add-on"><i class="icon-remove"></i></span>
									<span class="add-on"><i class="icon-th"></i></span>
									
									
				    </div>
				    <span class="help-inline">不选则没有截止日期</span>
			    
			    </div>
		    </div>
		    <!--end morevoteset--->
		    <div class="control-group">
				<button type="button" class="btn" id="addcontent" style="display: none;">添加投票说明内容</button>
			</div>
			
			<div id="addcontentdiv" style="">
				<legend>投票说明内容</legend>
				
				<div class="control-group">
				<div class=" edui-default"><div id="edui1" class="edui-editor  edui-default" style="z-index: 999; width: 600px;"><div id="edui1_toolbarbox" class="edui-editor-toolbarbox edui-default"><div id="edui1_toolbarboxouter" class="edui-editor-toolbarboxouter edui-default"><div class="edui-editor-toolbarboxinner edui-default"><div id="edui2" class="edui-toolbar   edui-default" onselectstart="return false;" onmousedown="return $EDITORUI[&quot;edui2&quot;]._onMouseDown(event, this);" style="-webkit-user-select: none;"><div id="edui3" class="edui-box edui-button edui-for-fullscreen edui-default"><div id="edui3_state" onmousedown="$EDITORUI[&quot;edui3&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui3&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui3&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui3&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui3_body" unselectable="on" title="全屏" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui3&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div><div class="edui-box edui-label edui-default"></div></div></div></div></div><div id="edui4" class="edui-box edui-button edui-for-undo edui-default"><div id="edui4_state" onmousedown="$EDITORUI[&quot;edui4&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui4&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui4&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui4&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui4_body" unselectable="on" title="撤销" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui4&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui5" class="edui-box edui-button edui-for-redo edui-default"><div id="edui5_state" onmousedown="$EDITORUI[&quot;edui5&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui5&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui5&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui5&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui5_body" unselectable="on" title="重做" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui5&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui6" class="edui-box edui-separator  edui-default"></div><div id="edui7" class="edui-box edui-button edui-for-bold edui-default"><div id="edui7_state" onmousedown="$EDITORUI[&quot;edui7&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui7&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui7&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui7&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui7_body" unselectable="on" title="加粗" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui7&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui8" class="edui-box edui-button edui-for-italic edui-default"><div id="edui8_state" onmousedown="$EDITORUI[&quot;edui8&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui8&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui8&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui8&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui8_body" unselectable="on" title="斜体" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui8&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui9" class="edui-box edui-button edui-for-underline edui-default"><div id="edui9_state" onmousedown="$EDITORUI[&quot;edui9&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui9&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui9&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui9&quot;].Stateful_onMouseOut(event, this);" class="edui-default"><div class="edui-button-wrap edui-default"><div id="edui9_body" unselectable="on" title="下划线" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui9&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui10" class="edui-box edui-button edui-for-strikethrough edui-default"><div id="edui10_state" onmousedown="$EDITORUI[&quot;edui10&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui10&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui10&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui10&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui10_body" unselectable="on" title="删除线" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui10&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui11" class="edui-box edui-button edui-for-removeformat edui-default"><div id="edui11_state" onmousedown="$EDITORUI[&quot;edui11&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui11&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui11&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui11&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui11_body" unselectable="on" title="清除格式" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui11&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui12" class="edui-box edui-button edui-for-pasteplain edui-default"><div id="edui12_state" onmousedown="$EDITORUI[&quot;edui12&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui12&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui12&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui12&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui12_body" unselectable="on" title="纯文本粘贴模式" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui12&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui13" class="edui-box edui-separator  edui-default"></div><div id="edui14" class="edui-box edui-splitbutton edui-for-forecolor edui-default edui-colorbutton"><div title="字体颜色" id="edui14_state" onmousedown="$EDITORUI[&quot;edui14&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui14&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui14&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui14&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-splitbutton-body edui-default"><div id="edui14_button_body" class="edui-box edui-button-body edui-default" onclick="$EDITORUI[&quot;edui14&quot;]._onButtonClick(event, this);"><div class="edui-box edui-icon edui-default"></div><div id="edui14_colorlump" class="edui-colorlump"></div></div><div class="edui-box edui-splitborder edui-default"></div><div class="edui-box edui-arrow edui-default" onclick="$EDITORUI[&quot;edui14&quot;]._onArrowClick();"></div></div></div></div><div id="edui17" class="edui-box edui-splitbutton edui-for-backcolor edui-default edui-colorbutton"><div title="背景色" id="edui17_state" onmousedown="$EDITORUI[&quot;edui17&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui17&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui17&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui17&quot;].Stateful_onMouseOut(event, this);" class="edui-default"><div class="edui-splitbutton-body edui-default"><div id="edui17_button_body" class="edui-box edui-button-body edui-default" onclick="$EDITORUI[&quot;edui17&quot;]._onButtonClick(event, this);"><div class="edui-box edui-icon edui-default"></div><div id="edui17_colorlump" class="edui-colorlump"></div></div><div class="edui-box edui-splitborder edui-default"></div><div class="edui-box edui-arrow edui-default" onclick="$EDITORUI[&quot;edui17&quot;]._onArrowClick();"></div></div></div></div><div id="edui20" class="edui-box edui-button edui-for-justifyleft edui-default"><div id="edui20_state" onmousedown="$EDITORUI[&quot;edui20&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui20&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui20&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui20&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-checked"><div class="edui-button-wrap edui-default"><div id="edui20_body" unselectable="on" title="居左对齐" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui20&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div><div class="edui-box edui-label edui-default"></div></div></div></div></div><div id="edui21" class="edui-box edui-button edui-for-justifycenter edui-default"><div id="edui21_state" onmousedown="$EDITORUI[&quot;edui21&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui21&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui21&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui21&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui21_body" unselectable="on" title="居中对齐" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui21&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div><div class="edui-box edui-label edui-default"></div></div></div></div></div><div id="edui22" class="edui-box edui-button edui-for-justifyright edui-default"><div id="edui22_state" onmousedown="$EDITORUI[&quot;edui22&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui22&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui22&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui22&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui22_body" unselectable="on" title="居右对齐" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui22&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div><div class="edui-box edui-label edui-default"></div></div></div></div></div><div id="edui23" class="edui-box edui-button edui-for-justifyjustify edui-default"><div id="edui23_state" onmousedown="$EDITORUI[&quot;edui23&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui23&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui23&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui23&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui23_body" unselectable="on" title="两端对齐" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui23&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div><div class="edui-box edui-label edui-default"></div></div></div></div></div><div id="edui24" class="edui-box edui-button edui-for-touppercase edui-default"><div id="edui24_state" onmousedown="$EDITORUI[&quot;edui24&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui24&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui24&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui24&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui24_body" unselectable="on" title="字母大写" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui24&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui25" class="edui-box edui-button edui-for-tolowercase edui-default"><div id="edui25_state" onmousedown="$EDITORUI[&quot;edui25&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui25&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui25&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui25&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui25_body" unselectable="on" title="字母小写" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui25&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui26" class="edui-box edui-separator  edui-default"></div><div id="edui33" class="edui-box edui-button edui-for-link edui-default"><div id="edui33_state" onmousedown="$EDITORUI[&quot;edui33&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui33&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui33&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui33&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui33_body" unselectable="on" title="超链接" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui33&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div><div class="edui-box edui-label edui-default"></div></div></div></div></div><div id="edui34" class="edui-box edui-button edui-for-unlink edui-default"><div id="edui34_state" onmousedown="$EDITORUI[&quot;edui34&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui34&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui34&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui34&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui34_body" unselectable="on" title="取消链接" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui34&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui39" class="edui-box edui-button edui-for-insertimage edui-default"><div id="edui39_state" onmousedown="$EDITORUI[&quot;edui39&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui39&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui39&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui39&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui39_body" unselectable="on" title="图片" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui39&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div><div class="edui-box edui-label edui-default"></div></div></div></div></div><div id="edui40" class="edui-box edui-separator  edui-default"></div><div id="edui41" class="edui-box edui-button edui-for-preview edui-default"><div id="edui41_state" onmousedown="$EDITORUI[&quot;edui41&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui41&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui41&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui41&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui41_body" unselectable="on" title="预览" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui41&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui44" class="edui-box edui-button edui-for-searchreplace edui-default"><div id="edui44_state" onmousedown="$EDITORUI[&quot;edui44&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui44&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui44&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui44&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui44_body" unselectable="on" title="查询替换" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui44&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div><div class="edui-box edui-label edui-default"></div></div></div></div></div><div id="edui45" class="edui-box edui-combox edui-for-fontfamily edui-default"><div title="字体" id="edui45_state" onmousedown="$EDITORUI[&quot;edui45&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui45&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui45&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui45&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-combox-body edui-default"><div id="edui45_button_body" class="edui-box edui-button-body edui-default" onclick="$EDITORUI[&quot;edui45&quot;]._onButtonClick(event, this);">arial</div><div class="edui-box edui-splitborder edui-default"></div><div class="edui-box edui-arrow edui-default" onclick="$EDITORUI[&quot;edui45&quot;]._onArrowClick();"></div></div></div></div><div id="edui58" class="edui-box edui-combox edui-for-fontsize edui-default"><div title="字号" id="edui58_state" onmousedown="$EDITORUI[&quot;edui58&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui58&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui58&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui58&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-combox-body edui-default"><div id="edui58_button_body" class="edui-box edui-button-body edui-default" onclick="$EDITORUI[&quot;edui58&quot;]._onButtonClick(event, this);">16px</div><div class="edui-box edui-splitborder edui-default"></div><div class="edui-box edui-arrow edui-default" onclick="$EDITORUI[&quot;edui58&quot;]._onArrowClick();"></div></div></div></div><div id="edui69" class="edui-box edui-separator  edui-default"></div><div id="edui70" class="edui-box edui-splitbutton edui-for-inserttable edui-default"><div title="插入表格" id="edui70_state" onmousedown="$EDITORUI[&quot;edui70&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui70&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui70&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui70&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-splitbutton-body edui-default"><div id="edui70_button_body" class="edui-box edui-button-body edui-default" onclick="$EDITORUI[&quot;edui70&quot;]._onButtonClick(event, this);"><div class="edui-box edui-icon edui-default"></div></div><div class="edui-box edui-splitborder edui-default"></div><div class="edui-box edui-arrow edui-default" onclick="$EDITORUI[&quot;edui70&quot;]._onArrowClick();"></div></div></div></div><div id="edui73" class="edui-box edui-button edui-for-deletetable edui-default"><div id="edui73_state" onmousedown="$EDITORUI[&quot;edui73&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui73&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui73&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui73&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui73_body" unselectable="on" title="删除表格" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui73&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui74" class="edui-box edui-button edui-for-insertparagraphbeforetable edui-default"><div id="edui74_state" onmousedown="$EDITORUI[&quot;edui74&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui74&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui74&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui74&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui74_body" unselectable="on" title="表格前插入行" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui74&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui75" class="edui-box edui-button edui-for-insertrow edui-default"><div id="edui75_state" onmousedown="$EDITORUI[&quot;edui75&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui75&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui75&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui75&quot;].Stateful_onMouseOut(event, this);" class="edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui75_body" unselectable="on" title="前插入行" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui75&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui76" class="edui-box edui-button edui-for-deleterow edui-default"><div id="edui76_state" onmousedown="$EDITORUI[&quot;edui76&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui76&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui76&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui76&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui76_body" unselectable="on" title="删除行" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui76&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui77" class="edui-box edui-button edui-for-insertcol edui-default"><div id="edui77_state" onmousedown="$EDITORUI[&quot;edui77&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui77&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui77&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui77&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui77_body" unselectable="on" title="前插入列" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui77&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui78" class="edui-box edui-button edui-for-deletecol edui-default"><div id="edui78_state" onmousedown="$EDITORUI[&quot;edui78&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui78&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui78&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui78&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui78_body" unselectable="on" title="删除列" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui78&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui79" class="edui-box edui-button edui-for-mergecells edui-default"><div id="edui79_state" onmousedown="$EDITORUI[&quot;edui79&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui79&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui79&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui79&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui79_body" unselectable="on" title="合并多个单元格" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui79&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui80" class="edui-box edui-button edui-for-mergeright edui-default"><div id="edui80_state" onmousedown="$EDITORUI[&quot;edui80&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui80&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui80&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui80&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui80_body" unselectable="on" title="右合并单元格" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui80&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui81" class="edui-box edui-button edui-for-mergedown edui-default"><div id="edui81_state" onmousedown="$EDITORUI[&quot;edui81&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui81&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui81&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui81&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui81_body" unselectable="on" title="下合并单元格" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui81&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui82" class="edui-box edui-button edui-for-splittocells edui-default"><div id="edui82_state" onmousedown="$EDITORUI[&quot;edui82&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui82&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui82&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui82&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui82_body" unselectable="on" title="完全拆分单元格" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui82&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui83" class="edui-box edui-button edui-for-splittorows edui-default"><div id="edui83_state" onmousedown="$EDITORUI[&quot;edui83&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui83&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui83&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui83&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui83_body" unselectable="on" title="拆分成行" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui83&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui84" class="edui-box edui-button edui-for-splittocols edui-default"><div id="edui84_state" onmousedown="$EDITORUI[&quot;edui84&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui84&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui84&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui84&quot;].Stateful_onMouseOut(event, this);" class=" edui-default edui-state-disabled"><div class="edui-button-wrap edui-default"><div id="edui84_body" unselectable="on" title="拆分成列" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui84&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div></div></div></div></div><div id="edui85" class="edui-box edui-separator  edui-default"></div><div id="edui86" class="edui-box edui-splitbutton edui-for-emotion edui-default"><div title="表情" id="edui86_state" onmousedown="$EDITORUI[&quot;edui86&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui86&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui86&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui86&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-splitbutton-body edui-default"><div id="edui86_button_body" class="edui-box edui-button-body edui-default" onclick="$EDITORUI[&quot;edui86&quot;]._onButtonClick(event, this);"><div class="edui-box edui-icon edui-default"></div></div><div class="edui-box edui-splitborder edui-default"></div><div class="edui-box edui-arrow edui-default" onclick="$EDITORUI[&quot;edui86&quot;]._onArrowClick();"></div></div></div></div><div id="edui92" class="edui-box edui-button edui-for-map edui-default"><div id="edui92_state" onmousedown="$EDITORUI[&quot;edui92&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui92&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui92&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui92&quot;].Stateful_onMouseOut(event, this);" class=" edui-default"><div class="edui-button-wrap edui-default"><div id="edui92_body" unselectable="on" title="Baidu地图" class="edui-button-body edui-default" onmousedown="return false;" onclick="return $EDITORUI[&quot;edui92&quot;]._onClick();"><div class="edui-box edui-icon edui-default"></div><div class="edui-box edui-label edui-default"></div></div></div></div></div></div></div></div><div id="edui1_toolbarmsg" class="edui-editor-toolbarmsg edui-default" style="display:none;"><div id="edui1_upload_dialog" class="edui-editor-toolbarmsg-upload edui-default" onclick="$EDITORUI[&quot;edui1&quot;].showWordImageDialog();">点击上传</div><div class="edui-editor-toolbarmsg-close edui-default" onclick="$EDITORUI[&quot;edui1&quot;].hideToolbarMsg();">x</div><div id="edui1_toolbarmsg_label" class="edui-editor-toolbarmsg-label edui-default"></div><div style="height:0;overflow:hidden;clear:both;" class=" edui-default"></div></div></div><div id="edui1_iframeholder" class="edui-editor-iframeholder edui-default" style="height: 320px; overflow: hidden;"><iframe id="baidu_editor_0" width="100%" height="100%" scroll="no" frameborder="0"></iframe></div><div id="edui1_bottombar" class="edui-editor-bottomContainer edui-default"><table class=" edui-default"><tbody class=" edui-default"><tr class=" edui-default"><td id="edui1_elementpath" class="edui-editor-bottombar edui-default"><div class="edui-editor-breadcrumb" onmousedown="return false;">元素路径: <span unselectable="on" onclick="$EDITORUI[&quot;edui1&quot;].editor.execCommand(&quot;elementpath&quot;, &quot;0&quot;);">body</span> &gt; <span unselectable="on" onclick="$EDITORUI[&quot;edui1&quot;].editor.execCommand(&quot;elementpath&quot;, &quot;1&quot;);">p</span> &gt; <span unselectable="on" onclick="$EDITORUI[&quot;edui1&quot;].editor.execCommand(&quot;elementpath&quot;, &quot;2&quot;);">br</span></div></td><td id="edui1_wordcount" class="edui-editor-wordcount edui-default"></td><td id="edui1_scale" class="edui-editor-scale edui-default" style="display: none;"><div class="edui-editor-icon edui-default"></div></td></tr></tbody></table></div><div id="edui1_scalelayer" class=" edui-default"></div><object type="application/x-pluginbaidusnap" width="0" height="0" style="position: absolute; left: -9999px;"></object></div></div><textarea name="votecontent" id="votecontent" style="display: none;"></textarea>
				
	
				</div>
			</div>
			
		    <legend>投票选项</legend>
		    
		    <div class="voteoptions">
			    <div class="control-group">
			    	<div class="input-prepend">
						<span class="add-on add-on-num" id="oporder_1">1</span>
						<input class="span6 voteoptions" name="voteoptions[]" id="voteOptioninput" type="text" placeholder="请输入投票选项" style="width:430px;">
						<input type="hidden" name="opimageids[]" value="" class="opimageid">
						<div class="oppicmodify">
						<span class="add-on addoppicdone"></span>
						<span class="add-on deloppic"><i class="icon-remove" title="删除图片"></i></span>
						</div>
						
						<span class="add-on addoppic"><a href="http://www.stonepoll.com/action/pop_uploadoptionimage.html?id=1" data-trigger="modal" data-title="添加图片"><i class="icon-picture" title="添加图片"></i></a></span>
						
					</div>
				</div>
				<div class="control-group" id="voteoptionforcopy">
					<div class="input-prepend">
						<span class="add-on add-on-num" id="oporder_2">2</span> 
						<input class="span6 voteoptions" name="voteoptions[]" id="prependedInput" type="text" placeholder="请输入投票选项" style="width:430px;">
						
						<input type="hidden" name="opimageids[]" value="" class="opimageid">
						<div class="oppicmodify">
							<div class="add-on addoppicdone">
							</div>
							<span class="add-on deloppic"><i class="icon-remove" title="删除图片"></i></span>
						</div>
						
						<span class="add-on addoppic"><a href="http://www.stonepoll.com/action/pop_uploadoptionimage.html?id=2" data-trigger="modal" data-title="添加图片"><i class="icon-picture" title="添加图片"></i></a></span>
						
					</div>
				</div>
				
			<div class="control-group">
					<div class="input-prepend">
						<span class="add-on add-on-num" id="oporder_3">3</span> 
						<input class="span6 voteoptions" name="voteoptions[]" id="prependedInput" type="text" placeholder="请输入投票选项" style="width:430px;">
						
						<input type="hidden" name="opimageids[]" value="" class="opimageid">
						<div class="oppicmodify" style="display: none;">
							<div class="add-on addoppicdone"></div>
							<span class="add-on deloppic"><i class="icon-remove" title="删除图片"></i></span>
						</div>
						
						<span class="add-on addoppic"><a href="http://www.stonepoll.com/action/pop_uploadoptionimage.html?id=3" data-trigger="modal" data-title="添加图片"><i class="icon-picture" title="添加图片"></i></a></span>
						
					</div>
				</div></div>
			<div class="control-group">
				<button type="button" class="btn" id="addvoteoption">增加选项</button>
			</div>
			
			
		    <div class="control-group" id="voteOtherinputDiv">
		    	<div class="input-prepend">
					<span class="add-on">其他</span>
					<input class="span6 voteoptions" name="" id="voteOtherinput" type="text" placeholder="其他选项用于当没有用户满意的选项时，用户可以输入自己的内容" style="width:430px;">
					<span class="add-on">
					<label class="checkbox">
					<input type="checkbox" id="enableothers" value="1" name="enableothers">启用其他选项
					</label>
					</span>
					
				</div>
				<span class="help-inline"></span>
			</div>

			<div class="control-group">
				<button type="button" class="btn" id="addaftervotecontent">添加投票后显示的内容</button>
			</div>
			<div id="addaftervotecontentdiv" style="display:none;">
				<legend>投票后显示的内容</legend>
				
				<div class="control-group">
				<textarea name="aftervotecontent" id="aftervotecontent"></textarea>
				</div>
			</div>
			</div>
			
			
			<div class="control-group" id="inputAgreeDiv">
			    <label class="checkbox " style="color:red">
					 <input type="checkbox" id="inputAgree" name="inputagree" value="1"><i class="icon-warning-sign"></i> 我同意投票服务条款 <a href="http://www.stonepoll.com/v/b05fca0a-291f-744f-e0a3-5ecbb613d6f3.html" target="_blank">查看</a>
					 <span class="help-inline"></span>
				</label>
		    </div>
		    
		    
			<div class="alert" id="submitalertdiv" style="display:none;">
	  		<h4></h4>
	  		<span></span>
			</div>
			
			
			<div class="control-group" style="margin-bottom:100px;">
				<button type="submit" class="btn btn-primary createvotesubmitbtn" id="docreatevote">创建投票</button>
				
			</div>
			
			
		    </form>
	
		
	</div>
	

  
<script src="./创建投票-投票网-磐石投票_files/lang.php"></script>

<script type="text/javascript" src="./创建投票-投票网-磐石投票_files/spin.js"></script>
<script type="text/javascript" src="./创建投票-投票网-磐石投票_files/sco.modal.js"></script>
<script src="./创建投票-投票网-磐石投票_files/main.js"></script>

<script type="text/javascript" src="./创建投票-投票网-磐石投票_files/swfobject.js"></script>
<script type="text/javascript" src="./创建投票-投票网-磐石投票_files/jquery.uploadify-3.1.min.js"></script>
<script type="text/javascript" src="./创建投票-投票网-磐石投票_files/sco.modal(1).js"></script>
<script type="text/javascript" src="./创建投票-投票网-磐石投票_files/jquery.alerts.js"></script>
<script type="text/javascript" src="./创建投票-投票网-磐石投票_files/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="./创建投票-投票网-磐石投票_files/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
<script type="text/javascript" src="./创建投票-投票网-磐石投票_files/editor_config.js"></script>
<script type="text/javascript" src="./创建投票-投票网-磐石投票_files/editor_all.js"></script>
<script type="text/javascript">
    
   // UE.getEditor('votecontent');
</script>
<script type="text/javascript">
    
    //UE.getEditor('aftervotecontent');
</script>

</body></html><?php }} ?>