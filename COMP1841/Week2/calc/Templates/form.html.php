<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic Calculator</title>
</head>
<body>
<h1>Basic Calculator</h1>

<form method="post" action="">
    <p>
        Value 1: <input type="text" name="val1" required>
    </p>
    <p>
        Value 2: <input type="text" name="val2" required>
    </p>
    <p>
        <label><input type="radio" name="calc" value="add" checked> Add</label>
        <label><input type="radio" name="calc" value="sub"> Subtract</label>
        <label><input type="radio" name="calc" value="mul"> Multiply</label>
        <label><input type="radio" name="calc" value="div"> Divide</label>
    </p>
    <p>
        <button type="submit">Calculate</button>
    </p>
</form>
</body>
</html>
