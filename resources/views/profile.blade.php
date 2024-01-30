<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register </title>
</head>
<body>
	@if (Auth::check())
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Registered At: {{ $user->created_at }}</p>
@else
    <p>Please login to view your profile</p>
@endif
</form>
</body>
</html>
