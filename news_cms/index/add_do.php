<meta charset="utf-8">
<?php
	include_once('db.php');
	if(!empty($_POST)){
		$username=$_POST["username"];
		$psd=MD5($_POST['psd']);
		$sex=$_POST["sex"];
		$city=$_POST['city'];
		$introduce=$_POST['introduce'];
		$ho=$_POST['habby'];
		$ha=implode(",",$ho);
		//添加命令
		$sql="insert into user_index(name,password,sex,habby,city,introduce) values('$username','$psd','$sex','$ha','$city','$introduce')";
		if(mysql_query($sql)){
			//命令执行成功
			echo '<script>alert("添加成功,马上去登陆"),location.href="login.php"</script>';
		}else{
			echo "添加失败";
		}
	}
?>