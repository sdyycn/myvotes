<?php /* Smarty version Smarty-3.1.12, created on 2015-04-30 09:54:28
         compiled from "E:\work\workspace\myvotes\adm\templates\siteinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:84795541dfb427ad80-39000580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfe4d2f678838779026cd13e40aa644fe71997c8' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\siteinfo.html',
      1 => 1430380420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84795541dfb427ad80-39000580',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5541dfb42f3f24_59581692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5541dfb42f3f24_59581692')) {function content_5541dfb42f3f24_59581692($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body id="right" class="main1">
<div class="ttitle">
  <h1>网站本信息配置</h1>
</div>

<table class="detail-layout">
  <tbody>
    <tr>
      <th colspan="2">站点信息</th>
    </tr>
  <form action="?act=editsave" id="form1" name="form1" method="post">
    <tr>
      <td width="121" class="a" >名称：</td>
      <td width="836"><input type="text"  class="text-box "  name="sitename"  size="50" value="<<?php ?>?php echo $site["sitename"]?<?php ?>>"/>
        </td>
    </tr>
    <tr>
      <td width="121" class="a" >域名：</td>
      <td width="836"><input type="text"  class="text-box "  name="siteurl"  size="50" value="<<?php ?>?php echo $site["siteurl"]?<?php ?>>"/>
        </td>
    </tr>
    <tr>
      <td width="121" class="a" >关键词：</td>
      <td width="836"><textarea name="sitekeywords"  cols="60" rows="4" class="text-area"><<?php ?>?php echo $site["sitekeywords"]?<?php ?>></textarea> </td>
    </tr>
    <tr>
      <td width="121" class="a" >站点描述：</td>
      <td width="836"><textarea name="sitedescribe"  cols="60" rows="4" class="text-area"><<?php ?>?php echo $site["sitedescribe"]?<?php ?>></textarea>
        </td>
    </tr>
    <tr>
      <td  class="a">网站ICP：</td>
      <td width="836"><input type="text"  class="text-box "  name="siteicp"  size="50" value="<<?php ?>?php echo $site["siteicp"]?<?php ?>>"/></td>
    </tr>
    <tr>
      <td width="121" class="a" >客服QQ：</td>
      <td width="836"><input type="text"  class="text-box "  name="siteqq"  size="50" value="<<?php ?>?php echo $site["siteqq"]?<?php ?>>"/>
        </td>
    </tr>
    <tr>
      <td  class="a">站点状态：</td>
      <td width="836"><input type="radio"  name="siteclose"   value="1" <<?php ?>?php  ckcheck($site["siteclose"],"1") ?<?php ?>>/>
        正常
        <input type="radio"  name="siteclose"  value="0" <<?php ?>?php  ckcheck($site["siteclose"],"0") ?<?php ?>>/>
        关闭 </td>
    </tr>
    <tr>
      <td width="121" class="a" >关闭提示语：</td>
      <td width="836"><textarea name="siteclosenote"  cols="60" rows="4" class="text-area"><<?php ?>?php echo $site["siteclosenote"]?<?php ?>></textarea>
        </td>
    </tr>
    <tr>
      <td colspan="2"  style="padding-left:420px;"><input type="submit" class="btn2" name="submit"  value="提交" onClick="" /></td>
    </tr>
  </form>
  </tbody>
</table>
</body>
</html>
<?php }} ?>