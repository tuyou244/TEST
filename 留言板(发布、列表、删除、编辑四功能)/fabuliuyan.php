<meta charset="utf8">
<?php
//案例留言板
//空数组print_r($_POST);
if(empty($_POST)){
	require 'fabuliuyan.html';
}
else{
	$conn=mysqli_connect('localhost','root','root');
	mysqli_query($conn,'use board');
	mysqli_query($conn,'set names utf8');
	
	$sql="insert into mydb(name,email,comment) values('$_POST[name]','$_POST[email]','$_POST[comment]')";

	$res=mysqli_query($conn,$sql);
	if($res===false){
//		echo '插入失败';
echo mysqli_error($conn);
exit();
	}else{
		echo '插入成功';
	}
}



?>