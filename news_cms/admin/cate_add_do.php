<?php
	include_once('db.php');
	$news_title=$_POST["news_title"];
	$news_man=$_POST['news_man'];
	$time=date("Y-m-d H:i:s");
	$sql="insert into category(cname,add_author,ctime) values('$news_title','$news_man','$time')";
	$re=mysql_query($sql);
	if($re){
		echo "<script>alert('添加成功');location.href='cate_list.php'</script>";
	}else{
		echo "<script>alert('添加失败')</script>";
	}
?>