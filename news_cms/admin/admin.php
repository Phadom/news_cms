<?php
	session_start();
	header("Content-type:text/html;charset=utf-8");
	if(@$_SESSION['username']==""){
		echo "<script>alert('请先登录');location.href='login.php'</script>";
		die;
	}
	include_once('smarty/Smarty.class.php');

	$smarty=new Smarty();
	$smarty->display('admin.html');
?>