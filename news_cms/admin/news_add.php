<?php
	include_once('smarty/Smarty.class.php');
	$smarty=new Smarty();
	include_once('db.php');
	$sql="select * from category";
	$re=mysql_query($sql);
	while($info=mysql_fetch_assoc($re)){
		$arr[]=$info;
	}
	$smarty->assign("arr",$arr);
	$smarty->display('news_add.html');
?>