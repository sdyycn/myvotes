<?php /* Smarty version Smarty-3.1.12, created on 2015-05-05 07:21:25
         compiled from "E:\work\workspace\myvotes\adm\templates\index_btn.html" */ ?>
<?php /*%%SmartyHeaderCode:315725548535568cc15-12097489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85094b7c9b2070dfd023ea052a8e38f12f393bb8' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\index_btn.html',
      1 => 1430380444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315725548535568cc15-12097489',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_554853556d3120_27254239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554853556d3120_27254239')) {function content_554853556d3120_27254239($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" <?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="<{$baseurl}>" />
<title>Insert title here</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body id="btnm">
<script type="text/javascript">
<!--
function ExpandContents(controller)
{
    mainFrame = parent.document.getElementById("leftmenu");
    if (mainFrame.cols == "160,10,*")
    {
        //已经展开，收缩之，并更换控制指示
        mainFrame.cols = "0,10,*";
       // controller.src = "controller_expand.gif";
        controller.title = "展开";
		controller.className="link2";
    }
    else
    {
        //已经收缩，展开之，并更换控制指示
        mainFrame.cols = "160,10,*";
       // controller.src = "controller_collapse.gif";
        controller.title = "折叠";
		controller.className="link1";
    }
}
-->
</script>
<div id="middle">
<a href="#" title="折叠" id="controller" onclick="javascript:ExpandContents(this);" class="link1"></a>
</div>
</body>
</html><?php }} ?>