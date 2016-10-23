<?php /* Smarty version Smarty-3.1.12, created on 2016-05-04 10:39:37
         compiled from ".\templates\register.html" */ ?>
<?php /*%%SmartyHeaderCode:15492571dfc974ff919-62819575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46b652f0a70dbe5d4ef43a980a5f10cf934f6c3a' => 
    array (
      0 => '.\\templates\\register.html',
      1 => 1462329535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15492571dfc974ff919-62819575',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_571dfc9760aee4_45658138',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571dfc9760aee4_45658138')) {function content_571dfc9760aee4_45658138($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>前台首页</title>
<link rel="stylesheet" type="text/css" href="./css/index.css">
<link rel="stylesheet" type="text/css" href="./css/public.css">

<style>
#header{ height:92px; background:none;}
#main  h2{ margin-left:0px; line-height:50px; font-size:20px;}
.article{margin-left:-50px;}

a{color:#087eac;}
</style>

</head>

<body>
<div id="header">
<img src="./images/logo1.png" alt="logo"/>
<ul>
    <li><a href="register.php" style="color:#087eac;">会员注册</a>/</li>
    <li><a href="login.php" style="color:#087eac;">登陆</a></li>
</ul>
</div>

<div id="nav">
<ul>
	<li ><a href="index.php"  class="active">首页</a></li>
    <li><a href="index_list.php">国内新闻</a></li>
    <li><a href="#">国际新闻</a></li>
    <li><a href="#">军事新闻</a></li>
    <li><a href="#">娱乐新闻</a></li>
</ul>
</div>
<div>
<div  id="main">
<h2 align="center">欢迎注册新用户</h2>
<div class="article">

<form name="login"  action="add_do.php" method="post">

<table border="0"    cellspacing="20" cellpadding="0" align="center">
  <tr>
    <td>用户名：</td>
    <td><input   type="text" name="username" class="txt" width="2"/></td>
  </tr>
  <tr>
    <td>密码：</td>
    <td><input  type="password" name="psd"  class="txt"/></td>
  </tr>
  <tr>
    <td>性别：</td>
    <td>
    <input   type="radio"  name="sex"  checked="checked" value="男" />男&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input   type="radio"  name="sex" value="女" />女</td>
  </tr>
    <tr>
    <td>爱好：</td>
    <td>
    <input   type="checkbox" name="ho[]" value="上网" />&nbsp;上网&nbsp;&nbsp;
    <input   type="checkbox" name="ho[]" value="体育" />&nbsp;体育&nbsp;&nbsp;
    <input   type="checkbox" name="ho[]" value="学习" />&nbsp;学习&nbsp;&nbsp;
    </td>
  </tr>
      <tr>
    <td>城市：</td>
    <td>
    <select name="city"  class="s1">
    	<option value="北京">北京</option>
        <option value="上海">上海</option>
        <option value="南京">南京</option>
    </select>
    </td>
  </tr>
	<tr>
		<td>介绍：</td><td><textarea cols=25 rows=5 name="introduce"></textarea></td>
	</tr>
  <tr>
    <td>&nbsp;</td>
    <td><input  type="submit" value="添 加"  class="sub"/><input  type="reset" value="重 置"  class="res"/></td>
  </tr>
</table>

</form>

</div>
</div>


<div class="blank20"></div>

<div id="footer">
	<p>版权所有&copy;八维研修学院<br />联系方式：010-82157081&nbsp;&nbsp;010-82157081&nbsp;&nbsp;010-82157081</p>
</div>

</body>
</html>
<script src="jquery1.8.js"></script>

<?php }} ?>