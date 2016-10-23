<?php
	include_once('smarty/Smarty.class.php');
	include_once('db.php');
	include_once('page.class.php');
	$smarty=new Smarty();
	$sql="select * from news,category where news.cate_id=category.cid";
	$pagesize=3;
	$nowpage=1; 
	$page=new Page($sql,$nowpage,$pagesize);
	//$sql="select * from ";
	$arr=$page->show();
	foreach($arr as $key=>$val){
		$arr[$key]['title']=substr($arr[$key]['title'],0,9)."……";
		$arr[$key]['content']=substr($arr[$key]['content'],0,30)."……";
	}
	$nav=$page->ajaxnav('pagep');
	$smarty->assign("arr",$arr);
	$smarty->assign("nav",$nav);
	$smarty->display('news_list.html');
?>
