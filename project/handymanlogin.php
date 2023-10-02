<?php
session_start();
if(isset($_POST['login']))
{


$user=$_POST['username'];
echo $pass=$_POST['password'];

$conn = new mysqli("localhost","root","","project");

 $sql = "SELECT * FROM handyman where handymanname='$user'";

$result= $conn->query($sql);

if($result->num_rows>0)
{ 

	while($row=$result->fetch_assoc())
	{
		$duser=$row['handymanname'];
		$dpass=$row['handymanpassword']; 
	}
	if($pass==$dpass)
	{	$_SESSION['user']=10;
		echo "<script>window.location.href ='handyman/handymanindex.php'</script>";
	}
	else
	{
	echo "<script>alert('incorrect password')</script>";
	}
	 
	
}
else
{
echo "<script>alert('no such handyman exists')</script>";


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
    <h2 class=>Handyman Login</h2>
    <form id="form2" name="form2" method="post" action="">
      
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required>
      
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
      <input type="submit" name="login" value="login"><br>
      <center><a href="handymanreg.php">Register as a handyman</a></center>
      
    </form>
  </div>
</body>
</html>