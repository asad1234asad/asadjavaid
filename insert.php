<?php
			$db = mysqli_connect('localhost','root','','test_db');

			if($db == false)
			{
				echo "Error: Could not establish database connection".mysqli_connect_error();
			}
			else
			{
				echo "Database connected";
			}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insert</title>
</head>

<body>
		<?php
	         
   
    
				if(isset($_POST['btnsub']))
			{
                    
					$name = $_POST['txtname'];
					$phone = $_POST['txtphone'];
					$email = $_POST['txtemail'];
					
					$insert = "INSERT INTO emp_tbl (emp_name,emp_phone,emp_email) VALUES ('$name','$phone','$email')";
					$query = mysqli_query($db,$insert);
//					
//					if($query)
//					{
//						echo "<script>alert('Record inserted successfully')</script>";
//					}
//					else
//					{
//						echo "<script>alert('Failed to insert')</script>";
//                    }
                }
		?>
		<form method="post" action="insert.php">
			<label>Name:</label>
			<input type="text" name="txtname" placeholder="Enter your name" />
<!--            <span style="color: red;"></span>-->
		</form>
</body>
</html>