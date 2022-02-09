<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="login.css">
	<title>login</title>
</head>
<body>



<div class="login">
<p class="headlines"> Login to Your Account </p>
	<!-- <h1>LOGIN TO YOUR ACCOUNT</h1> -->
<form
 class="formtext"
 method="post" 
 action="dash.php">
	<label class="afterdee">EmailAddress</label>
	<input type="text"
	 placeholder="emailaddress" 
	 size="40" 
	 required="required" 
	 name="emailaddress"
	 /><br>
	<label class="afterdee">PassWord</label>
	<input type="password"  
	placeholder="PassWord" 
	size="40" 
	required="required"
	 name="password"
	 /><br>
	<button class="btn">SignIn</button><br>
	
</form>
</div>

<div class="createme">
<label>Donot have an Account ?</label><br>
	<form method="post" action="create.php">
	<button class="createone">CreateHere</button>
	</form>
</div>
 
	
</div> 
</body>
</html>