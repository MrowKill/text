<?php

$con=mysql_connect('localhost','root','');

mysql_select_db('lrfbeyond_demo',$con);

mysql_query("SET names UTF8");


$danmu = $_POST['danmu'];
//$danmu = '{ "text":"12312312","color":"#ffffff","size":"1","position":"0","time":265}';
$addtime = time();
$sql = "INSERT INTO danmu (id,content,addtime)  
VALUES (null,'$danmu','$addtime')";
 if (!mysql_query($sql,$con))
 {
   die('Error: ' . mysql_error());
 }
// echo "success";
mysql_close($con);
//echo $danmu;
?>