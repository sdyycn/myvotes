<?php /* Smarty version Smarty-3.1.12, created on 2015-05-06 05:32:02
         compiled from "E:\work\workspace\myvotes\adm\templates\poll_create.html" */ ?>
<?php /*%%SmartyHeaderCode:126955498b325c9401-81748142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b49a3a57454568cc5656a2f6b0bd7f1f7614e7e2' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\poll_create.html',
      1 => 1430883120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126955498b325c9401-81748142',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55498b3261f312_35237260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55498b3261f312_35237260')) {function content_55498b3261f312_35237260($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<div>
<form>
    <div>
    <table>
        <tr><th colspan="2">基本信息</th></tr>
        <tr>
            <td>调查问卷标题</td><td><input type="text" name="title" /></td>
        </tr>
        <tr>
            <td>截至时间</td>
            <td><input type="datetime" name="date" /></td>
        </tr>
        <tr>
            <td>说明</td>
            <td><input type="text" name="note"></td>
        </tr>
        <tr>
            <td>提交后显示的感谢语</td>
            <td><input type="text" name="thanks" value="感谢您参与次次调查问卷！"></td>
        </tr>
    </table>
    </div>
<div>
<div class="clear" /><br />
<div>
    <label>问卷内容</label><input type="button" value="添加问题" />
    <br />
    问题1.<input type="text" name="q1" value="question 1" /><input type="button" value="添加选项" />
    <br />
    选项a. <input type="text" name="q1a1" value="q1a1" />
    <br />
    选项b. <input type="text" name="q1a2" value="q1a2" />
    <br />
    选项c. <input type="text" name="q1a3" value="q1a3" />
    <br />
    
    <br />
    问题1.<input type="text" name="q2" value="question 2"  /><input type="button" value="添加选项" />
    <br />
    选项a. <input type="text" name="q2a1" value="q2a1" />
    <br />
    选项b. <input type="text" name="q2a2" value="q2a2" />
    <br />
    选项c. <input type="text" name="q2a3" value="q2a3" />
    <br />
    
</div>
<div>
</form>
<br />
<a>问卷地址</a>
<a>二维码</a>
<a>分享到 xxx 新浪微博 ....</a>
</div>
</body>
</html><?php }} ?>