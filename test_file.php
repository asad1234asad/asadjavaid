<?php
  $db = mysqli_connect('localhost','root','','test_db');
     if($db == true)
	 {
		 echo "database connected";
	 } 
     else
	 {
		 echo "connectin closed";
	 }
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>