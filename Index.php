<!DOCTYPE html>
<html>
<head>
<title>FieryPatient</title>
</head>
<body>

<h1>Login</h1>


 <form action="" method="post">
 
	<label>Username</label> 
	<input type="text" name="username" id="username" autofocus/>
	<label>Password </label>
	<input type="password" name="password" id="password"/><br/>
	<input type="submit" class="button" value="Log In"/> 
			
 </form>	

</body>
</html>

<?php
echo $_POST["username"]; 


?>