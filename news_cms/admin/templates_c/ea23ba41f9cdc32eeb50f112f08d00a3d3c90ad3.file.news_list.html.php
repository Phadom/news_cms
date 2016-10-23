<?php /* Smarty version Smarty-3.1.12, created on 2016-04-28 10:40:20
         compiled from ".\templates\news_list.html" */ ?>
<?php /*%%SmartyHeaderCode:24883571e102fc3d875-19719450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea23ba41f9cdc32eeb50f112f08d00a3d3c90ad3' => 
    array (
      0 => '.\\templates\\news_list.html',
      1 => 1461811215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24883571e102fc3d875-19719450',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_571e102fd83379_72074086',
  'variables' => 
  array (
    'arr' => 0,
    'it' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571e102fd83379_72074086')) {function content_571e102fd83379_72074086($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<script src="jquery1.8.js"></script>
</head>

<body>
<meta charset='utf8'/>
<div  id="main">
  <input type="text" id="ser" /><button onclick="ser()">搜索</button>
<table width="90%" border="0" cellspacing="0" cellpadding="0" class="news_table" id="table">
  <caption>
    新闻列表
  </caption>
  <tr>
    <th scope="col">编号</th>
    <th scope="col" width="100">新闻标题</th>
    <th scope="col">所属分类</th>
    <th scope="col" width="200">新闻内容</th>
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
      <td><?php echo $_smarty_tpl->tpl_vars['it']->value['nid'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['it']->value['title'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['it']->value['cname'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['it']->value['content'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['it']->value['author'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['it']->value['add_time'];?>
</td>
      <td><a href="#" onclick='del(<?php echo $_smarty_tpl->tpl_vars['it']->value['nid'];?>
)'>删除</a>||<a href="#">修改</a></td>
    </tr>
  <?php } ?>
</table>
<p id="ppp"><?php echo $_smarty_tpl->tpl_vars['nav']->value;?>
</p>
</div>
</body>
</html>
 
 <script>
 function del(id){
    if(confirm("您确定要删除吗")){
      $.ajax({
        url:"del_news.php",
        data:{id,id},
        success:function(e){
          if(e==1){
            alert('删除成功');location.href='news_list.php';
          }else{
            alert('删除失败');
          }
        }
      })
    }
 }
 function pagep(nowpage){   
    var name=$("#ser").val();
    var  str="<caption>新闻列表</caption><tr><th scope='col'>编号</th><th scope='col' width='100'>新闻标题</th><th scope='col'>所属分类</th><th scope='col' width='200'>新闻内容</th><th scope='col'>添加人</th><th scope='col'>时间</th><th scope='col'>操作</th></tr>";
    $.ajax({
      url:"ajax.php",     
      data:{"nowpage":nowpage,"name":name},
      dataType:'json',
      success:function(o){
        for(var k in o){
          str+="<tr><td>"+o[k].nid+"</td><td>"+o[k].title+"</td><td>"+o[k].cname+"</td><td>"+o[k].content+"</td><td>"+o[k].author+"</td><td>"+o[k].add_time+"</td><td><a href='#' onclick='del("+o[k].nid+")'>删除</a>||<a href='#'>修改</a></td></tr>";        
        }
          $("#table").html(str);
        }
    })
  }
  function ser(){
    var name=$("#ser").val();
    var  str="<caption>新闻列表_搜索结果</caption><tr><th scope='col'>编号</th><th scope='col' width='100'>新闻标题</th><th scope='col'>所属分类</th><th scope='col' width='200'>新闻内容</th><th scope='col'>添加人</th><th scope='col'>时间</th><th scope='col'>操作</th></tr>";
    $.ajax({
      url:"ser.php",
      data:{"name":name},
      dataType:"json",
      success:function(e){
        for(var i in e){
          if(i!="nav"){
            str+="<tr><td>"+e[i].nid+"</td><td>"+e[i].title+"</td><td>"+e[i].cname+"</td><td>"+e[i].content+"</td><td>"+e[i].author+"</td><td>"+e[i].add_time+"</td><td><a href='#' onclick='del("+e[i].nid+")'>删除</a>||<a href='#'>修改</a></td></tr>";
          }  
        }
        $("#table").html(str);
        $("#ppp").html(e.nav);
      }
    })
  }
 </script>
 <?php }} ?>