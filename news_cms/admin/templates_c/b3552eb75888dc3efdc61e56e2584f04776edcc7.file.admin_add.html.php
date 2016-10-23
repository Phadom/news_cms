<?php /* Smarty version Smarty-3.1.12, created on 2016-04-25 20:39:24
         compiled from ".\templates\admin_add.html" */ ?>
<?php /*%%SmartyHeaderCode:12287571e0fec789335-94197975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3552eb75888dc3efdc61e56e2584f04776edcc7' => 
    array (
      0 => '.\\templates\\admin_add.html',
      1 => 1461587962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12287571e0fec789335-94197975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_571e0feca12b18_93698102',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571e0feca12b18_93698102')) {function content_571e0feca12b18_93698102($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="./css/public.css">
</head>

<body>
<div  id="main">
<h2>管理员添加</h2>
<form name="login"  action="" method="post">
<table border="0"    cellspacing="20" cellpadding="0">
  <tr>
    <td>用户名：</td>
    <td><input   type="text" name="username" class="txt"/></td>
  </tr>
  <tr>
    <td>密码：</td>
    <td><input  type="password" name="psd"  class="txt"/></td>
  </tr>
  <tr>
    <td>性别：</td>
    <td>
    <input   type="radio"  name="sex"  checked="checked"/>男
    <input   type="radio"  name="sex" />女</td>
  </tr>
    <tr>
    <td>爱好：</td>
    <td>
    <input   type="checkbox" name="web"/>上网
    <input   type="checkbox" name="sport"/>体育
    <input   type="checkbox"  name="study"/>学习
    </td>
  </tr>
      <tr>
    <td>城市：</td>
    <td>
    <select name="city"  class="s1">
    	<option value="1">北京</option>
        <option value="2">上海</option>
        <option value="3">南京</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input  type="submit" value="添 加"  class="sub"/><input  type="reset" value="重 置"  class="res"/></td>
  </tr>
</table>

</form>
</div>
</body>
</html>
<?php }} ?>