<?php
	$n=$_GET["n"];		
	$conn =new mysqli('localhost','root','') or die("链接MySQL失败");
	mysqli_select_db( $conn,'newsuser') or die("选择数据库失败");
	mysqli_set_charset($conn,'utf8');
	$result = mysqli_query($conn,"SELECT * FROM user
	WHERE user_name='$n'");
	if(!mysqli_fetch_array($result))
	{
		echo  "账号错误！";
	}
?>