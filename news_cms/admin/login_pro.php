<meta charset="utf-8">
<?php
	session_start();
	if(!empty($_POST)){
		$username=$_POST['username'];
		$password=MD5($_POST['pwd']);
		$link=mysql_connect("127.0.0.1","root","");
		if(!$link){
			die("数据库连接失败");
		}
		//选择数据库
		mysql_select_db("news");
		//设置数据库编码
		mysql_query("set names utf8");
		$sql="select * from user where uname='$username' and upassword='$password'";
		$result=mysql_query($sql);
		$info=mysql_fetch_assoc($result);
		if(@$info){
			$_SESSION['username']=$info['uname'];	
			echo "<script>alert('登录成功');location.href='admin.php'</script>";
		}else{
			$sql2="select * from user where uname='$username'";
			$result2=mysql_query($sql2);
			$info2=mysql_fetch_assoc($result2);
			if($info2){
				echo "<script>alert('密码错误');location.href='login.php'</script>";
			}else{
				echo "<script>alert('用户不存在,马上去注册');location.href='admin_add.php'</script>";

			}
		}
	}
?>