<?php
   session_start();
   $con = mysqli_connect("localhost","root","","login");
   $name = $_POST['username'];
   $pass = $_POST['password'];
   $phone = $_POST['mobile'];

   $n = " insert into login(name , password , mobile) values ('$name' , '$pass' , '$phone')";

   mysqli_query($con, $n);

?>
<!DOCTYPE html>
<html>
<head>
   <style type="text/css">
      body{
         text-align: center;
      }
   </style>
	
</head>
<body>
   <p style="color: green;">you are successfully registered</p><br>
	<a href="index.php">click here for login</a>
</body>
</html>