<?php
	//连接MySQL数据库
	$link=mysql_connect("127.0.0.1","root","");
		if(!$link){
			die("数据库连接失败");
		}
		//选择数据库
		mysql_select_db("news");
		//设置数据库编码
		mysql_query("set names utf8");
?>