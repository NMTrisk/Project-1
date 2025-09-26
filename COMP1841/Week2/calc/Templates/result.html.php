<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
</head>
<body>
<h1>Result</h1>

<p><?= htmlspecialchars($output ?? '', ENT_QUOTES, 'UTF-8') ?></p>

<p><a href="./">Back</a></p>
</body>
</html>
