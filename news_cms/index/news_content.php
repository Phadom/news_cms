<?php
	include_once('smarty/Smarty.class.php');
	include_once("db.php");
	$smarty=new Smarty();
	$id=$_GET['id'];
	$sql="select * from news where nid=$id";
	$re=mysql_query($sql);
	while($info=mysql_fetch_assoc($re)){
		$arr[]=$info;
	}

	$smarty->assign('arr',$arr);
	
	$smarty->display('news_content.html');

?>