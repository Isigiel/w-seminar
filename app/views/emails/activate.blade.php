<?php
    $data=Session::get("data");
?>

<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Hello {{$data["name"]}}!</h2>
		<p>Your Data:</p>
		Name: {{$data["name"]}}<br>
		Username: {{$data["username"]}}<br>

		<div>
			To activate your account, please click this <a href="{{ URL::to('register/activate', $data['id']).'/'.$data['code'] }}">here</a> .
		</div>
	</body>
</html>