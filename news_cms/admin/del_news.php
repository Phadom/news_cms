<?php
	include_once('db.php');
	$id=$_GET['id'];
	$sql="delete from news where nid=$id";
	$re=mysql_query($sql);
	if($re){
		echo 1;
	}else{
		echo 0;
	}
?>