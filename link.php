<?php
	session_start();
	@$la = $_POST['v_name'];
	$_SESSION['s_v_name']=$la;
	@$lb = $_POST['v_link'];
	$_SESSION['s_v_link']=$lb;
	echo "<script>window.location.href='video.php';</script>";
?>