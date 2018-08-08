<?php
require 'conn.php';
//print_r($_GET);
$id=$_GET['id'];
$sql="delete from mydb where id='$id'";
$res=mysqli_query($conn, $sql);
if($res===false){
	echo mysqli_error($conn);
	exit();
}
else{
	//echo '删除成功';
	header('location:liuyanlist.php');
}
?>