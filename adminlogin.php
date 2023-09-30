<?php
session_start();
if(isset($_POST['login']))
{


$user=$_POST['username'];
echo $pass=$_POST['password'];

$conn = new mysqli("localhost","root","","project");

 $sql = "SELECT * FROM user where adminname='$user'";

$result= $conn->query($sql);

if($result->num_rows>0)
{ 

	while($row=$result->fetch_assoc())
	{
		$duser=$row['adminname'];
		$dpass=$row['adminpassword']; 
	}
	if($pass==$dpass)
	{	$_SESSION['user']=10;
		header("Location: admin/index.php");
	}
	else
	{
	echo "incorect pass";
	}
	 
	
}
else
{
echo "no such admin exists";


}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
</head>
<body>
  <div class="container">
    <h2 class=>Admin Login</h2>
    <form id="form2" name="form2" method="post" action="">
      
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required>
      
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
      <a href="validate.html">
      <input type="submit" name="login" value="login"></a>
      
    </form>
  </div>
</body>
</html>