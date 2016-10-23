<?php
	include_once('db.php');
	include_once('page.class.php');
	$name=$_GET['name'];
	$sql="select * from news,category where news.cate_id=category.cid and title like '%$name%'";
	//$re=mysql_query($sql);
	/*while($info=mysql_fetch_assoc($re)){
		$arr[]=$info;
	}*/

	$nowpage=1;
	$pagesize=3;
	$page=new Page($sql,$nowpage,$pagesize);
	$arr=$page->show();
	$nav=$page->ajaxnav('pagep');
	$arr['nav']=$nav;
	//echo $nav;
	$redspan="<span style='color:red'>".$name."</span>";
	foreach($arr as $key=>$val){
		$arr[$key]['title']=substr($arr[$key]['title'],0,9)."……";
		$arr[$key]['content']=substr($arr[$key]['content'],0,33)."……";
		$arr[$key]['title']=str_replace($name,$redspan,$arr[$key]['title']);
	}
	echo JSON_encode($arr);
?>