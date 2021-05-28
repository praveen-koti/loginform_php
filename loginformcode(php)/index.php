<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="test.css">
	<meta charset="UTF-8">
</head>
<body>
	<div class="loginbox">
		<img src="avtar.png" class="avtar">
		<h1>Login Here</h1>
		<form action="validation.php" method="post">
			<p>Username</p>
			<input type="text" name="Username" placeholder="Enter Username">
			<p>password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" value="Login">
			<a href="#">Lost your password</a><br>
			<a href="reg.php">Don't have an account?..REGISTER</a>

		</form>
	</div>

  <script type="text/javascript">
  	document.addEventListener("mousemove", function(e){
  		var body = document.querySelector('body');
  		var heart = document.createElement("span");
  		var x = e.offsetX;
  		var y = e.offsetY;
  		heart.style.left = x+'px';
  		heart.style.top = y+'px';
  		var size = Math.random() * 100;
  		heart.style.width = 20 + size+'px';
  		heart.style.height = 20 + size+'px';
  		body.appendChild(heart);

      setTimeout(function(){
        heart.remove();
      },2000)
  	})
  </script>
</body>
</html>