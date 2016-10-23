<meta charset="utf-8">
<?php
	session_start();
	session_destroy();
	echo "<script>alert('退出成功');top.location.href='login.php'</script>";	
?>