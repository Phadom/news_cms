<?php /* Smarty version Smarty-3.1.12, created on 2016-04-29 14:31:36
         compiled from ".\templates\cate_list.html" */ ?>
<?php /*%%SmartyHeaderCode:23338571e115998aa47-64160816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9907aa19e91254c1ac860afe3997e6c3d9d15e50' => 
    array (
      0 => '.\\templates\\cate_list.html',
      1 => 1461911491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23338571e115998aa47-64160816',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_571e1159a691b5_39830606',
  'variables' => 
  array (
    'arr' => 0,
    'it' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571e1159a691b5_39830606')) {function content_571e1159a691b5_39830606($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="./css/public.css">

<style>
  #ppp a{margin:10px;display:inline-block;border:#ccc solid 1px;padding:5px 10px;color:#087eac;}
  #ppp{
    text-align: center;
  }

</style>

</head>

<body>
<div  id="main">
<table width="80%"  border="0" cellspacing="0" cellpadding="0" class="news_table" id="tt">
  <caption>
    新闻分类列表
  </caption>
  <tr>
    <th scope="col">编号</th>
    <th scope="col" width="100">分类名称</th>
    <th scope="col">添加人</th>
    <th scope="col">时间</th>
    <th scope="col">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['it']->value['cid'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['it']->value['cname'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['it']->value['add_author'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['it']->value['ctime'];?>
</td>
    <td><a href="#" onclick="del(<?php echo $_smarty_tpl->tpl_vars['it']->value['cid'];?>
)">删除</a>/<a href="#">修改</a></td>
  </tr>
  <?php } ?>
</table>
<p id="ppp"><?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
</p>

</div>
</body>
</html>
<script src="jquery1.8.js"></script>

<script>
  
  function del(id){
    if(confirm("您确定要删除吗")){
      $.ajax({
        url:"del.php",
        data:{'id':id},
        success:function(e){
          if(e==1){
            alert('删除成功');location.href='cate_list.php';
          }else{
            alert('删除失败');
          }
        }
      })
    }
    
  }

  function pagep(nowpage){   
    var  str="<caption>新闻列表</caption><tr><th scope='col'>编号</th><th scope='col' width='100'>分类名称</th><th scope='col'>添加人</th><th scope='col' width='200'>时间</th><th scope='col'>操作</th></tr>";
    $.ajax({
      url:"cate_ajax.php",     
      data:{"nowpage":nowpage},
      dataType:'json',
      success:function(o){
        for(var k in o){
          str+="<tr><td>"+o[k].cid+"</td><td>"+o[k].cname+"</td><td>"+o[k].add_author+"</td><td>"+o[k].ctime+"</td><td><a href='#' onclick='del("+o[k].cid+")'>删除</a>||<a href='#'>修改</a></td></tr>";        
        }
          $("#tt").html(str);
        }
    })
  }
</script>
<?php }} ?>