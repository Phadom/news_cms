<?php
	include_once('db.php');
	$news_title=$_POST['news_title'];
	$cate_id=$_POST['cate_id'];
	$news=$_POST['news'];
	$news_man=$_POST['news_man'];
	$add_time=date("Y-m-d H:i:s");
	$sql="insert into news (cate_id,title,author,content,add_time) values('$cate_id','$news_title','$news_man','$news','$add_time')";
	$re=mysql_query($sql);
	if($re){
		echo "<script>alert('添加成功');location.href='news_list.php'</script>";
	}else{
		echo "<script>alert('添加失败')</script>";
	}
?>