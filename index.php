<!DOCTYPE html>
<html>
<head>
	<title>Watchlist Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>

<body>
	<div class="vh-100 d-flex align-items-md-center justify-content-center">
		<div class="bg-light rounded p-3">
			<form method="post" action="login.php">
				<label for="username" class="form-label mt-2">Username</label>
				<input id="username" type="text" name="username" class="form-control"/>
				<label for="password" class="form-label mt-2">Password</label>
				<input id="password" type="password" name="password" class="form-control"/>
				<input type="submit" name="Submit" value="Login" class="btn btn-primary mt-3">
			</form>
		</div>
	</div>

</body>
</html>