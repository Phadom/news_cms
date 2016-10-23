<?php
	include_once('db.php');
	include_once("page.class.php");
	$nowpage=$_GET['nowpage'];
	$sql="select * from news order by add_time desc";
	$pagesize=5;
	$page=new Page($sql,$nowpage,$pagesize);
	$arr=$page->show();
	echo JSON_encode($arr);
?>