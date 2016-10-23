<?php
	include_once("db.php");
	include_once('smarty/Smarty.class.php');
	$smarty=new Smarty();
	$sql="select * from news order by add_time desc limit 0,10";
	$re=mysql_query($sql);
	while($info=mysql_fetch_assoc($re)){
		$arr[]=$info;
	}
	$smarty->assign("arr",$arr);
	$smarty->display('index.html')
?>