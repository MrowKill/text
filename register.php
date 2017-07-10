<?php
	$c=null;
	$flag1=null;
	$flag2=null;
	// 允许上传的图片后缀
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);     // 获取文件后缀名
	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/x-png")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 204800)   // 小于 200 kb
	&& in_array($extension, $allowedExts))
	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "错误：: " . $_FILES["file"]["error"] . "<br>";
		}
		else
		{
			if (!file_exists("img/" . $_FILES["file"]["name"]))
			{
				// 如果 img 目录不存在该文件则将文件上传到 img 目录下
				move_uploaded_file($_FILES["file"]["tmp_name"], "img/" . $_FILES["file"]["name"]);
				$c="http://localhost/danmu/img/" . $_FILES["file"]["name"];
				$flag1=true;
			}
		}
	}	
	$a=$_POST["user_name"];
	$b=$_POST["password"];
			
	$conn =new mysqli('localhost','root','') or die("链接MySQL失败");
	mysqli_select_db( $conn,'newsuser') or die("选择数据库失败");
	mysqli_set_charset($conn,'utf8');
	$sql = "INSERT INTO user (user_name, password, user_img)
	VALUES ('$a', '$b', '$c')";
	if ($conn->query($sql) === TRUE) {
		echo "插入数据成功!";
	    $flag2=true;
	} 
	echo "<script>
				window.location.href='login.html';
		  </script>"
?>
