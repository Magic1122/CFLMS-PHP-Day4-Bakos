<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="actions/aCreate.php" method="POST">
        <input type="text" name="model" placeholder="Model" required><br>
        <input type="number" name="year" placeholder="Year" required><br>
        <input type="number" name="hp" placeholder="HP" required><br>
        <input type="text" name="img" placeholder="Image Link" required><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
