<?php
$con=mysqli_connect("localhost","root","","maps");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM markers ORDER BY id DESC";
$result=mysqli_query($con,$sql);

// Numeric array
$row=mysqli_fetch_array($result, MYSQLI_NUM);
printf ("%s (%s)\n",$row[1],$row[2]);

echo "<br>";
// Associative array
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
printf ("%s (%s)\n",$row["name"],$row["address"]);

// Free result set
mysqli_free_result($result);

mysqli_close($con);
?>