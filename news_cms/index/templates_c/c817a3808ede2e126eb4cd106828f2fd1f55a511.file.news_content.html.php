<?php /* Smarty version Smarty-3.1.12, created on 2016-04-29 11:49:38
         compiled from ".\templates\news_content.html" */ ?>
<?php /*%%SmartyHeaderCode:4629571dfc40b7b2e5-30766186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c817a3808ede2e126eb4cd106828f2fd1f55a511' => 
    array (
      0 => '.\\templates\\news_content.html',
      1 => 1461901776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4629571dfc40b7b2e5-30766186',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_571dfc40c48141_00414155',
  'variables' => 
  array (
    'arr' => 0,
    'it' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571dfc40c48141_00414155')) {function content_571dfc40c48141_00414155($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文章发布</title>
<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>

<body>
	<meta charset="utf-8" />
<div id="header">
<img src="./images/logo1.png" alt="logo"/>
<ul>
	<li><a href="register.php">会员注册</a></li>
    <li><a href="login.php">登陆</a>/</li>
</ul>
</div>

<div id="nav">
<ul>
	<li ><a href="#">首页</a></li>
    <li><a href="#"  class="active">国内新闻</a></li>
    <li><a href="#">国际新闻</a></li>
    <li><a href="#">军事新闻</a></li>
    <li><a href="#">娱乐新闻</a></li>
</ul>
</div>

<div class="blank20"></div>

<div class="article">
	<?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
		<h3><?php echo $_smarty_tpl->tpl_vars['it']->value['title'];?>
</h3>
		<p><?php echo $_smarty_tpl->tpl_vars['it']->value['content'];?>
</p>
	<?php } ?>
</div>


<div class="blank20"></div>

<div id="footer">
	<p>版权所有&copy;八维研修学院<br />联系方式：010-82157081&nbsp;&nbsp;010-82157081&nbsp;&nbsp;010-82157081</p>
</div>

</body>
</html>
<?php }} ?>