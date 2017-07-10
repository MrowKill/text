<?php
	session_start();
	$a=$_POST["user_name"];
	$b=$_POST["password"];
	$conn =new mysqli('localhost','root','') or die("链接MySQL失败");
	mysqli_select_db( $conn,'newsuser') or die("选择数据库失败");
	mysqli_set_charset($conn,'utf8');
	$result = mysqli_query($conn,"SELECT * FROM user
	WHERE user_name='$a'");
	if($row = mysqli_fetch_array($result))
	{
		if($row['password']===$b){
			$_SESSION['U']=$a;
			$_SESSION['IMG']=$row['user_img'];
			echo "<script>window.location.href='index.php';</script>";
		}else{
			echo "密码错误！";
		}
		
	}
?>