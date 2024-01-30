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
</head>
<body>
    <h2>Sum Calculator</h2>
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
