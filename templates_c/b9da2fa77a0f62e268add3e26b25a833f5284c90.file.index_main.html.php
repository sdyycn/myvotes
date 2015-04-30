<?php /* Smarty version Smarty-3.1.12, created on 2015-04-30 09:54:10
         compiled from "E:\work\workspace\myvotes\adm\templates\index_main.html" */ ?>
<?php /*%%SmartyHeaderCode:150125541dfa2e129f7-92583792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9da2fa77a0f62e268add3e26b25a833f5284c90' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\index_main.html',
      1 => 1430380432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150125541dfa2e129f7-92583792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
    'server_software' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5541dfa2e87d15_55065820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5541dfa2e87d15_55065820')) {function content_5541dfa2e87d15_55065820($_smarty_tpl) {?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" <?php echo '?>';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" />
<title>系统首页</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--
function bgchang()
{
	var allrow = document.getElementById("chang").getElementsByTagName("tr").length;
	var allrowx = document.getElementById("chang").getElementsByTagName("tr");
	for (i=0;i<allrow;i++) {
		if (i%2==0){
			allrowx[i].className = "trcolor";
		}
	}
}
//window.onload=function(){bgchang();}
//-->
</script>
</head>

<body id="right" class="main1">
<div class="ttitle">
<h1>服务器环境</h1>
</div>

<table class="list-layout wd-800">
<tr>    
        <td height="25" align=left>&nbsp;上线时间：</td>  
        <td height="25"><?php echo $_smarty_tpl->tpl_vars['server_software']->value;?>
</td>
      </tr>
	  <tr>    
        <td height="25" align=left>&nbsp;IP地址：</td>  
        <td height="25"><?php echo $_smarty_tpl->tpl_vars['server_software']->value;?>
</td>
      </tr>
	  <tr>    
        <td height="25" align=left>&nbsp;身份过期：30分钟</td>  
        <td height="25"><?php echo $_smarty_tpl->tpl_vars['server_software']->value;?>
</td>
      </tr>
	  
      <tr> 
        <td colspan="2" align=left><strong>&nbsp;服务器的有关参数&nbsp;</strong></td>
      </tr>
      
      <tr>   
        <td align=left>&nbsp;服务器名</td>  
        <td><!--$server_name}--></td>
      </tr>
          
      <tr> 
        <td align=left>&nbsp;服务器IP</td>  
        <td height="25"><!--$server_ip}--></td>
      </tr>
      
      <tr> 
        <td align=left>&nbsp;服务器端口</td> 
        <td><!--$server_port}--></td>
      </tr>
          
      <tr> 
        <td align=left>&nbsp;服务器时间</td> 
        <td><!--$server_time}--></td>
      </tr>
      
      <tr>    
        <td height="25" align=left>&nbsp;服务器版本</td>  
        <td height="25"><!--$server_software}--></td>
      </tr>
          
      <tr> 
        <td height="25" align=left>&nbsp;脚本超时时间</td>   
 	    <td height="25"><<?php ?>%=Server.ScriptTimeout%<?php ?>> 秒</td>
      </tr>
      <tr>   
        <td height="25" align=left>&nbsp;Session过期时间</td>
        <td height="25"><<?php ?>%=session.Timeout%<?php ?>> 分钟</td>
      </tr>

      <tr> 
        <td height="25" align=left>&nbsp;服务器解译引擎</td>  
        <td height="25"><<?php ?>%=ScriptEngine & "/"& ScriptEngineMajorVersion &"."&ScriptEngineMinorVersion&"."& ScriptEngineBuildVersion %<?php ?>></td>
      </tr>
      <tr align=center  class=backs height=18>
        <td height=30 colspan=2 class="TD">
			<div align="left"><strong>&nbsp;所需支持及相关的组件</strong></div>
		</td>
      </tr>
	  <tr  > 
        <td height="25" align=left>&nbsp;Jmail组件(注册邮件认证须此组件支持)</td>
        <td>
          <<?php ?>%
		If Not IsObjInstalled("JMail.Message") Then
            Response.Write "<font color=red>不支持这个组件</font>"
        else
            Response.Write "已经支持"
        end if
		%<?php ?>>
        </td>       
	  </tr>
          <tr  > 
            
        <td height="25" align=left>&nbsp;XMLHTTP组件</td>
            
        <td height="25">
          <<?php ?>%
		If Not IsObjInstalled("Microsoft.XMLHTTP") Then
            Response.Write "<font color=red>不支持这个组件</font>"
        else
            Response.Write "已经支持"
        end if		
		%<?php ?>>
        </td>
          </tr>
          <tr  > 
            
        <td height="25" align=left>&nbsp;Microsoft.XMLDOM组件</td>
            
        <td height="25">
          <<?php ?>%
		If Not IsObjInstalled("Microsoft.XMLDOM") Then
            Response.Write "<font color=red>不支持这个组件</font>"
        else
            Response.Write "已经支持"
        end if		
		%<?php ?>>
        </td>
          </tr>
          <tr  > 
            
        <td height="25" align=left>&nbsp;Fso组件&nbsp;(生成HTML必须此组件支持)</td>
            
        <td height="25"> 
          <<?php ?>%
		If Not IsObjInstalled(fso) Then
            Response.Write "<font color=red>不支持这个组件</font>"
        else
            Response.Write "已经支持"
        end if		
		%<?php ?>>
        </td>
          </tr>
          <tr  > 
            
        <td height="25" align=left>&nbsp;AspJPEG组件&nbsp;(水印缩略图组件)</td>
            
        <td height="25"> 
          <<?php ?>%
		If Not IsObjInstalled("Persits.Jpeg") Then
            Response.Write "<font color=red>不支持这个组件</font>"
        else
            Response.Write "已经支持"
        end if		
		%<?php ?>>
         </td>
          </tr>
</table>
</body>
</html><?php }} ?>