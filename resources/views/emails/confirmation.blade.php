<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email Confirmation</title>
</head>
<body>
	<h1>Thanks for registered as Content Creator!</h1>

	<h3>Please click <a href='{{ url("register/confirm/{$user->token}") }}'>this link</a> to confirm your email address</h3>
</body>
</html>