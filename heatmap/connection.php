<?php 

$connect=mysqli_connect('localhost','root','','maps');
if(!$connect){
	echo "Không kết nối được với sever";
}
else{
	mysqli_set_charset($connect,"utf8");
}
?>