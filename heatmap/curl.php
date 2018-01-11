<?php

 $pin = $_GET['pin'];
 
	 
$fp=fopen('data.txt','w');

fwrite($fp,"$pin");
fclose($fp);


?>