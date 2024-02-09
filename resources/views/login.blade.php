<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login </title>
</head>
<body>
	<form method="POST" action="{{ route('login') }}">
    @csrf

     <label for="name">Name :</label>
    <input type="text" name="name" value="{{ old('name') }}" required autofocus>

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ old('email') }}" required autofocus>


    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
</form>
</body>
</html>
</body>
</html>
