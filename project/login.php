<?php
session_start();
if(isset($_POST['login']))
{


$user=$_POST['username'];
$pass=$_POST['password'];

$conn = new mysqli("localhost","root","","project");

 $sql = "SELECT * FROM user where username='$user'";

$result= $conn->query($sql);

if($result->num_rows>0)
{ 

	while($row=$result->fetch_assoc())
	{
		$duser=$row['username'];
		$dpass=$row['password']; 
	}
	if($pass==$dpass)
	{	
    $_SESSION['user']=10;
		echo "<script>window.location.href ='user/index.php'</script>";
	}
	else
	{
    echo "<script>alert('wrong password')</script>";
	
	}
	 
	
}
else
{
echo "<script>alert('no such user exists')</script>";


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
    <h2 class=><u>User Login</u></h2>
    <form id="form1" name="form1" method="post" action="">
      
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required>
      
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
      <input type="submit" name="login" value="login"><br>
      <a href="userreg.php"><input type="button" name="register" value="Sign up"><a><br>
      <center><a href="handymanlogin.php" >Login as a handyman</a></center>
      
    </form>
  </div>
</body>
</html>