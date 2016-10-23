<?php /* Smarty version Smarty-3.1.12, created on 2016-04-26 11:25:12
         compiled from ".\templates\news_add.html" */ ?>
<?php /*%%SmartyHeaderCode:3343571df8932bf649-80549352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb97306cf0b1dfb298022e07935f9b4fa76f847c' => 
    array (
      0 => '.\\templates\\news_add.html',
      1 => 1461640635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3343571df8932bf649-80549352',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_571df89339f5b4_42820797',
  'variables' => 
  array (
    'arr' => 0,
    'it' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571df89339f5b4_42820797')) {function content_571df89339f5b4_42820797($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="./css/public.css">
</head>

<body>
<meta charset='utf8'/>
<div  id="main">
<h2>添加新闻</h2>
<form name="login"  action="news_add_pro.php" method="post">
<table border="0"    cellspacing="10" cellpadding="0">
  <tr>
    <td>新闻标题：</td>
    <td><input   type="text" name="news_title" class="txt"/></td>
  </tr>
  <tr>
    <td>新闻分类：</td>
    <td><select class="s1" name='cate_id'>
        <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['it']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['it']->value['cname'];?>
</option>
        <?php } ?>
	</select>
	</td>
  </tr>
  <tr>
    <td>新闻内容：</td>
    <td><textarea  name="news" class="textarea"></textarea></td>
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
<script src="jquery1.8.js"></script>

<?php }} ?>