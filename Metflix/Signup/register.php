<?php include("../condb.php");
 	  session_start();
 ?>
<?php	 

	if($_POST["Email"] == "" )
	{
		header("refresh:0;url=http://localhost/Metflix/signup.php");
		echo '<script type="text/javascript">alert("Please input your Email!");</script>';
		exit();
	}	
	if(trim($_POST["Name"]) == "")
	{
		header("refresh:0;url=http://localhost/Metflix/signup.php");
		echo '<script type="text/javascript">alert("Please input your Name!");</script>';
		exit();		
	}
	if(trim($_POST["Password"]) == "")
	{
		header("refresh:0;url=http://localhost/Metflix/signup.php");
		echo '<script type="text/javascript">alert("Please input your Password!");</script>';
		exit();	
	}	
	if($_POST["Password"] != $_POST["ConPassword"])
	{
		header("refresh:0;url=http://localhost/Metflix/signup.php");
		echo '<script type="text/javascript">alert("Password not Match!");</script>';
		exit();
	}
	
	$Name= $_POST["Name"]; 
    $Password = $_POST["Password"];
    $Email = $_POST["Email"]; 
	$Status = 'member';
	
	$duplicate=mysqli_query($con,"select * from users where Email='$Email'");
	if (mysqli_num_rows($duplicate)>0)
	{
		header("refresh:0;url=http://localhost/Metflix/signup.php");
		echo '<script type="text/javascript">alert("ซ้ำโว้ยยยยยยยยยย!");</script>';
	}
	else
	{
		$strSQL = "INSERT INTO users (Email,Password,Name,Status) VALUES ('".$Email."','".$Password."','".$Name."','".$Status."')";		
		if (mysqli_query($con, $strSQL)) 
		{
			$sql="SELECT * FROM users WHERE  Email='".$Email."'";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
					  $_SESSION["ID"] = $row["ID"];
					  $sql2 = "INSERT INTO profile (Username,Picture,ID) VALUES ('".$Name."','','".$ID."')";
					  $query = mysqli_query($con,$sql2);
					  header("refresh:0;url=http://localhost/Metflix/index.php");
					  echo '<script type="text/javascript">alert("Success!");</script>';
				  }	
		}
		else 
		{
			echo "Error: " . $strSQL . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);	
	}
?>