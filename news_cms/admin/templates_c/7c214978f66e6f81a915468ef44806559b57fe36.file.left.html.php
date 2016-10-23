<?php /* Smarty version Smarty-3.1.12, created on 2016-04-25 20:54:47
         compiled from ".\templates\left.html" */ ?>
<?php /*%%SmartyHeaderCode:14622571b3edd1ec553-81455339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c214978f66e6f81a915468ef44806559b57fe36' => 
    array (
      0 => '.\\templates\\left.html',
      1 => 1461588696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14622571b3edd1ec553-81455339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_571b3edd2b14d4_76845188',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571b3edd2b14d4_76845188')) {function content_571b3edd2b14d4_76845188($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左部菜单</title>
<link rel="stylesheet" type="text/css" href="./css/public.css">
</head>

<body>
<div  id="left">
	<ul>
    	<li><a href="news_add.php"  target="right">新闻添加</a></li>
        <li><a href="news_list.php"  target="right">新闻列表</a></li>
        <li><a href="cate_add.php"  target="right">分类添加</a></li>
        <li><a href="cate_list.php"  target="right">分类列表</a></li>
        <li><a href="admin_list.php"  target="right">评论管理</a></li>
        <li><a href="admin_add.php"  target="right">管理员添加</a></li>
    </ul>
</div>
</body>
</html>
<?php }} ?>