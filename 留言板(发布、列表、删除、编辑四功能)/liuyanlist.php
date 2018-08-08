<?php
require 'conn.php';
$sql='select * from mydb';
$res=mysqli_query($conn, $sql);
if($res===false){
	echo mysqli_error($conn);
	exit();
}
$data=array();
while($row=mysqli_fetch_assoc($res)){
	$data[]=$row;
}
//print_r($data);
require 'meglist.html';
?>