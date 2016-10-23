<?php
	include_once('db.php');
	include_once('page.class.php');

	$sql="select * from category";
	$nowpage=$_GET['nowpage'];
	$pagesize=3;
	$page=new Page($sql,$nowpage,$pagesize);
	$arr=$page->show();
	
	echo JSON_encode($arr);
?>