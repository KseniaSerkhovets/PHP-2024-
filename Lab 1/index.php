<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма вводу</title>
</head>
<body>
    <h2>Введіть свої дані</h2>
    <form action="process.php" method="post">
        <label for="first_name">Ім'я:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>
        
        <label for="last_name">Прізвище:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>
        
        <input type="submit" value="Відправити">
    </form>
</body>
</html>
