<?php
   session_start();
   $con = mysqli_connect("localhost","root","","login");
   $name = $_POST['Username'];
   $pass = $_POST['password'];
   $s = "select * from login where name = '$name' && password = '$pass'";
   
   $result = mysqli_query($con, $s);
   $num = mysqli_num_rows($result);
   if($num == 1){
   	header('location:welcome.html');

   }else{

   	echo "login incrediables";
   

   }



?>