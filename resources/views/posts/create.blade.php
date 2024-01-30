{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login </title>
</head>
<body>
	<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ old('title') }}" required>

    <label for="content">Content:</label>
    <textarea name="content" required>{{ old('content') }}</textarea>

    <button type="submit">Create Post</button>

</form>
</body>
</html>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Calculator</title>
    <script>
        function calculateSum() {
            var num1 = document.getElementById('num1').value;
            var num2 = document.getElementById('num2').value;

            // Client-side validation
            if (isNaN(num1) || isNaN(num2)) {
                alert('Please enter numeric values.');
                return;
            }

            var sum = parseFloat(num1) + parseFloat(num2);
            document.getElementById('result').innerHTML = 'Sum: ' + sum;
        }
    </script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
         h2 {
             
            color: #0f958e;
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        form {
            margin-top: 30px;
        }
        label {
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 10%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #415b16;
        }
        button[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

</head>
<body>
    <h2>Post</h2>

    <form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ old('title') }}" required>

    <label for="content">Content:</label>
    <textarea name="content" required>{{ old('content') }}</textarea>

    <button type="submit">Create Post</button>
<br>
<br>
</form>
    <h4>Sum Calculator</h4>
    <form>
        <label for="num1">Number 1:</label>
        <input type="text" id="num1" name="num1"><br><br>

        <label for="num2">Number 2:</label>
        <input type="text" id="num2" name="num2"><br><br>

        <button type="button" onclick="calculateSum()">Calculate Sum</button>
    </form>

    <div id="result"></div>
</body>
</html>


