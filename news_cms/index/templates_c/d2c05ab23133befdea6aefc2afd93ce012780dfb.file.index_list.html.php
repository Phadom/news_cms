<?php /* Smarty version Smarty-3.1.12, created on 2016-04-29 13:29:07
         compiled from ".\templates\index_list.html" */ ?>
<?php /*%%SmartyHeaderCode:15285571dfae06d6940-58666126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2c05ab23133befdea6aefc2afd93ce012780dfb' => 
    array (
      0 => '.\\templates\\index_list.html',
      1 => 1461907743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15285571dfae06d6940-58666126',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_571dfae07ac2e1_58422415',
  'variables' => 
  array (
    'arr' => 0,
    'it' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571dfae07ac2e1_58422415')) {function content_571dfae07ac2e1_58422415($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>国内新闻</title>
<link rel="stylesheet" type="text/css" href="./css/index.css">
</head>

<body>
<div id="header">
<img src="./images/logo1.png" alt="logo"/>
<ul>
	<li><a href="register.php">会员注册</a>/</li>
    <li><a href="login.php">登陆</a></li>
</ul>
</div>

<div id="nav">
<ul>
	<li ><a href="index.php">首页</a></li>
    <li><a href="#"  class="active">国内新闻</a></li>
    <li><a href="#">国际新闻</a></li>
    <li><a href="#">军事新闻</a></li>
    <li><a href="#">娱乐新闻</a></li>
</ul>
</div>

<div class="blank20"></div>

<div id="main1">
	<div class="title"><h3>图片新闻</h3><a href="#">更多&gt;&gt;</a></div>
    <ul>
    	<li><a href="#"><img src="./images/infor.jpg"  height="178" /></a><p><a href="#">图片新闻</a></p></li>
        <li><a href="#"><img src="./images/infor.jpg" /></a><p><a href="#">图片新闻</a></p></li>
        <li><a href="#"><img src="./images/infor.jpg" /></a><p><a href="#">图片新闻</a></p></li>
        <li><a href="#"><img src="./images/infor.jpg" /></a><p><a href="#">图片新闻</a></p></li>
        <li><a href="#"><img src="./images/infor.jpg" /></a><p><a href="#">图片新闻</a></p></li>
    </ul>
</div>

<div class="blank20"></div>

<div class="news">
	<div class="title"><h3>国内新闻</h3><a href="#">更多&gt;&gt;</a></div>
            <ul class="width">
            <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
        	   <li><span><?php echo $_smarty_tpl->tpl_vars['it']->value['add_time'];?>
</span><a  href="news_content.php?id=<?php echo $_smarty_tpl->tpl_vars['it']->value['nid'];?>
"><?php echo $_smarty_tpl->tpl_vars['it']->value['title'];?>
</a></li>
            <?php } ?>
        </ul>

</div>
<p id="pp"><?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
</p>
 
<div class="blank20"></div>

<div id="footer">
	<p>版权所有&copy;八维研修学院<br />联系方式：010-82157081&nbsp;&nbsp;010-82157081&nbsp;&nbsp;010-82157081</p>
</div>

</body>
</html>
<script src="jquery1.8.js"></script>

<script>
    function pagep(nowpage){
        $.ajax({
            url:"ajaxnav.php",
            data:{"nowpage":nowpage},
            dataType:"json",
            success:function(e){
                var str="";
                for(var k in e){
                    str+="<li><span>"+e[k].add_time+"</span><a href='news_content.php?id="+e[k].nid+"'>"+e[k].title+"</a></li>";
                }
                $(".width").html(str);
            }
        })
    }

</script>
<?php }} ?>