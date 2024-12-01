<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Лабораторна робота №2</title>
</head>
<body>
    <h2>Завантаження файлу</h2>
    <form action="process.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="user_file" required><br>
        <input type="submit" value="Завантажити">
    </form>

    <h2>Запис тексту у файл log.txt</h2>
    <form action="text.php" method="POST">
        <textarea name="log_text" rows="4" cols="50" required></textarea><br>
        <input type="submit" value="Записати у файл">
    </form>

    <h2>Список файлів у директорії uploads</h2>
    <a href="list.php">Переглянути список файлів</a>
</body>
</html>
