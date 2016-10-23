<?php
	include_once('smarty/Smarty.class.php');
	include_once('db.php');
	include_once('page.class.php');
	$smarty=new Smarty();
	$sql="select * from news order by add_time desc";
	$pagesize=5;
	$page=new Page($sql,1,$pagesize);
	$arr=$page->show();
	$nav=$page->ajaxnav("pagep");
	$smarty->assign('arr',$arr);
	$smarty->assign("nav",$nav);
	$smarty->display('index_list.html');
?>