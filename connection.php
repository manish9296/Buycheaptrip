<?php

$conn = mysqli_connect('localhost','root','12345','bycheaptrip');
mysqli_select_db($conn,"bycheaptrip");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>