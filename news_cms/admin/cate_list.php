<?php
	include_once('smarty/Smarty.class.php');
	include_once('db.php');
	$smarty=new Smarty();
	
	$sql="select * from category";
	include_once('page.class.php');
	$pagesize=3;
	$nowpage=1; 
	$page=new Page($sql,$nowpage,$pagesize);
	$arr=$page->show();
	$nav=$page->ajaxnav('pagep');
	$smarty->assign("nav",$nav);
	$smarty->assign("arr",$arr);
	$smarty->display('cate_list.html');
?>