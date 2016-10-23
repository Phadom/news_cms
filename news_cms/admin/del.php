<?php
	include_once('db.php');
	$id=$_GET['id'];
	$sql="delete from category where cid=$id";
	$re=mysql_query($sql);
	if($re){
		echo 1;
	}else{
		echo 0;
	}
?>