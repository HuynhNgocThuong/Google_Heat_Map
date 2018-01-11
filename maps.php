<?php
require("connection.php");

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

// Opens a connection to a MySQL server
mysqli_query($connect,"SET NAMES 'utf8'");
//$gps = mysqli_query($connect,"SELECT * FROM gps ORDER BY id  DESC LIMIT 1 ");
$result = mysqli_query($connect,"SELECT * FROM markers ORDER BY id  DESC LIMIT 1 ");

header("Content-Type: text/xml;");

//header("Content-Type: text/php;");


// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while($row = mysqli_fetch_array($result)){
  // ADD TO XML DOCUMENT NODE
  
  echo '<marker ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  echo 'intensity="' . $row['name'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';

?>