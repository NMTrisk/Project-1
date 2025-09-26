<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
</head>
<body>
<h1>Error</h1>

<p style="color:red;">
    <?= htmlspecialchars($error ?? 'Something went wrong.', ENT_QUOTES, 'UTF-8') ?>
</p>

<p><a href="./">Try Again</a></p>
</body>
</html>
