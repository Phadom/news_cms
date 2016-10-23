<?php /* Smarty version Smarty-3.1.12, created on 2016-04-25 20:46:03
         compiled from ".\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:8809571e1180eadf30-35933094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05b143acdc50731311b48d7001385e844715105d' => 
    array (
      0 => '.\\templates\\login.html',
      1 => 1461588362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8809571e1180eadf30-35933094',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_571e1181089ce1_85388597',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571e1181089ce1_85388597')) {function content_571e1181089ce1_85388597($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆</title>
<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>

<body>
<div id="login">
<form name="login"  action="login_pro.php" method="post">
<table width="300" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>用户名：</td>
    <td><input  name='username' type="text" class="login_txt" id="n"/></td>
  </tr>
  <tr>
    <td>密&nbsp;码：</td>
    <td><input name='pwd' type="password"  class="login_txt" id="p" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="checkbox"  checked="checked" />一周免登陆     <a href="#">忘记密码？</a>    <a href="#">注册</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input  type="submit" value="登 陆" class="sub"/><input  type="reset" value="重 置"  class="res"/></td>
  </tr>
</table>

</form>
</div>
</body>
</html>

<?php }} ?>