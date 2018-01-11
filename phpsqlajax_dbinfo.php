<?php
header('Content-Type: text/html; charset=utf-8');  
$connect = mysqli_connect("localhost","root","");
if(!$connect){
	echo "Không kết nối được với sever";
}
else{
	mysqli_set_charset($connect,"utf8");
	echo "Kết nối thành công";
}
$selection = mysqli_select_db($connect,"maps");
mysqli_query($connect,"SET NAMES 'utf8'");
?>
