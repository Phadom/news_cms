<?php /* Smarty version Smarty-3.1.12, created on 2016-04-26 10:06:30
         compiled from ".\templates\cate_add.html" */ ?>
<?php /*%%SmartyHeaderCode:11285571e109e44eec5-46960753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e131eda02e30a2e56927b26703e524399bfd29a6' => 
    array (
      0 => '.\\templates\\cate_add.html',
      1 => 1461634692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11285571e109e44eec5-46960753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_571e109e4edc42_17017157',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571e109e4edc42_17017157')) {function content_571e109e4edc42_17017157($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="./css/public.css">
</head>

<body>
<div  id="main">
<h2>添加分类</h2>
<form name="login"  action="cate_add_do.php" method="post">
<table border="0"    cellspacing="10" cellpadding="0">
  <tr>
    <td>分类名称：</td>
    <td><input   type="text" name="news_title" class="txt"/></td>
  </tr>
    <tr>
    <td>添加人：</td>
    <td><input   type="text"  name="news_man"  class="txt"/></td>
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