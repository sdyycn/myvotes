<?php /* Smarty version Smarty-3.1.12, created on 2015-04-30 08:09:40
         compiled from "E:\work\workspace\myvotes\adm\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:136385541c7243d3e27-14479302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d52ecf349417c52534da7ee4b561317ae4687af' => 
    array (
      0 => 'E:\\work\\workspace\\myvotes\\adm\\templates\\login.html',
      1 => 1430372513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136385541c7243d3e27-14479302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5541c724439748_77615609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5541c724439748_77615609')) {function content_5541c724439748_77615609($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>管理中心登陆 V1.0</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<base href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
" />
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
</HEAD>
<BODY onload=document.form1.name.focus();>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" bgColor=#002779 border=0>
<TR>
  <TD align=middle><TABLE cellSpacing=0 cellPadding=0 width=468 border=0>
      <TR>
        <TD><IMG height=23 src="images/login_1.jpg" width=468></TD>
      </TR>
      <TR>
        <TD><IMG height=147 src="images/login_2.jpg" width=468></TD>
      </TR>
    </TABLE>
    <TABLE cellSpacing=0 cellPadding=0 width=468 bgColor=#ffffff border=0>
      <TR>
        <TD width=16><IMG height=122 src="images/login_3.jpg" 
            width=16></TD>
        <TD align=middle><TABLE cellSpacing=0 cellPadding=0 width=230 border=0>
            <FORM name=form1 action=? method=post>
              <TR height=5>
                <TD width=5></TD>
                <TD width=56></TD>
                <TD></TD>
              </TR>
              <TR height=36>
                <TD></TD>
                <TD>用户名</TD>
                <TD><INPUT 
                  style="BORDER-RIGHT: #000000 1px solid; BORDER-TOP: #000000 1px solid; BORDER-LEFT: #000000 1px solid; BORDER-BOTTOM: #000000 1px solid" 
                  maxLength=30 size=24 value="admin" name=name></TD>
              </TR>
              <TR height=36>
                <TD>&nbsp;</TD>
                <TD>口　令</TD>
                <TD><INPUT 
                  style="BORDER-RIGHT: #000000 1px solid; BORDER-TOP: #000000 1px solid; BORDER-LEFT: #000000 1px solid; BORDER-BOTTOM: #000000 1px solid" 
                  type=password maxLength=30 size=24 value="123456" 
                name=pass></TD>
              </TR>
              <TR height=5>
                <TD colSpan=3></TD>
              </TR>
              <TR>
                <TD>&nbsp;</TD>
                <TD>&nbsp;</TD>
                <TD><INPUT type=image height=18 width=70 
                  src="images/bt_login.gif"></TD>
              </TR>
            </FORM>
          </TABLE></TD>
        <TD width=16><IMG height=122 src="images/login_4.jpg" 
            width=16></TD>
      </TR>
    </TABLE>
    <TABLE cellSpacing=0 cellPadding=0 width=468 border=0>
      <TR>
        <TD><IMG height=16 src="images/login_5.jpg" 
          width=468></TD>
      </TR>
    </TABLE>
</BODY>
</HTML>
<?php }} ?>