<?php
//连接数据库
require 'conn.php';
$id=$_GET['id'];
//两种情况,编辑需要给出一张页面
//第一种表单为空

if(empty($_POST)){
	
	$sql="select * from mydb where id='$id'";
	$res=mysqli_query($conn, $sql);
	if($res===false){
		echo mysqli_error($conn);
		exit();
	}
		$arr=mysqli_fetch_assoc($res);
		require 'editliuyan.html';
}
else{
	$sql="update mydb set name='$_POST[name]',email='$_POST[email]',comment='$_POST[comment]' where id=$id";
	$res=mysqli_query($conn, $sql);
	if($res===false){
		echo mysqli_error($conn);
		exit();
	}
	else{
		echo '修改成功';
	}
}
?>