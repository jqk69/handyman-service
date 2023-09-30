<?php 
session_start();
if(isset($_POST['Submit']))
  {
    $con=mysqli_connect("localhost", "root", "", "project");
    $user=$_POST['username'];
    $contno=$_POST['contact'];
    if($_POST['password'] !== $_POST['confirmpassword']){
        $pass=$_POST['password'];
    }
    else{
        echo"<script>alert('different passwords. Please try again');</script>";
    }
    $ret=mysqli_query($con, "select handymanname from handyman where handymanname='$user' || handymancontact='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
echo "<script>alert('This User or Contact Number already associated with another account');</script>";
echo "<script>window.location.href ='handymanreg.php'</script>";
    }
    else{
    $query=mysqli_query($con, "insert into handyman(handmanid,handymanname,handymanwage,handymanimage,handymanstatus,handymanPassword,handymancontact) values('','$user','','','', '$pass','$contno');");
    if ($query) {
    echo "<script>alert('You have successfully registered');</script>";
    echo "<script>window.location.href ='handymanlogin.php'</script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
       echo "<script>window.location.href ='login.php'</script>";
    }
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>register</title>
</head>

<body>
<div class="container">
    <h2 class=>Handyman Registration</h2>
    <form id="form1" name="form1" method="post" action="">
      
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required>
      <label for="Contact No">Contact</label>
      <input type="text" inputmode="numeric" id="contact" name="contact" placeholder="xxxxx-xxxxx" required maxlength="10" minlength="10">
      <label for="password">Password</label>
      <input type="text" id="password" name="password" placeholder="Enter your password" required>
      <label for="confirm_password">Confirm Password</label>
      <input type="text" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required><br>
      <input type="submit" name="Submit" value="Submit"><a><br>
    </form>
  </div>
</body>
</html>

