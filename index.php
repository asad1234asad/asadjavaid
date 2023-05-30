<?php
			$db = mysqli_connect('localhost','root','','insert_db');

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
					
					
					$insert = "INSERT INTO test_tbl ( name ) VALUES ('$name')";
					$query = mysqli_query($db,$insert);
					
					if($query)
					{
						echo "<script>alert('Record inserted successfully')</script>";
					}
					else
					{
						echo "<script>alert('Failed to insert')</script>";
                    }
            }
		?>
		<form method="post" action="file:///C|/XAMMP/htdocs/ANH Real Tech Solution project/insert.php">
			<label>Name:</label>
			<input type="text" name="txtname" placeholder="Enter your name" />
<!--            <span style="color: red;"></span>-->
			<input type="submit" name="btnsub" value="Save me" />
		</form>
</body>
</html>