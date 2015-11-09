<!Doctype html>

<head>
	<title>SEGP Clinic Project</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>

<body>
	<div id="loginForm">
	<div id="logoPlaceholder"> LOGO </div>
	<form method="POST" action="login.php">		<!- Insert page to be redirected to in 'action' attribute ->
		<p>
		<input type="text" name="username" placeholder="Username"></input> <br />
		<input type="password"  name="password" placeholder="Password"></input> <br /> <br />
		<input type="submit" value="Login" class="btn btn-default"></input> <br />
		</p>

	</form>
	</div>
</body>

</html>

