<!DOCTYPE html>
<html>
<head>
   <title>Register page</title>
   <link rel="stylesheet" type="text/css" href="test.css">
</head>
<body>
   <div class="loginbox">
      <img src="avtar.png" class="avtar">
      <h1>Register Here</h1>
      <form action="register.php" method="post">
         <p>Username</p>
         <input type="text" name="username" placeholder="Enter Username" required>
         <p>password</p>
         <input type="password" name="password" placeholder="Enter Password" required>
         <p>Mobile Number</p>
         <input type="text" name="mobile" placeholder="Enter Your Mobile Number" required>
         <input type="submit" value="Register">
         

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

</body>
</html>