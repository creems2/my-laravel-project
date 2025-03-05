<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
</head>
<body>
    <h1>Форма для ввода данных</h1>
    <form action="/store_form" method="POST">
        @csrf
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="surname">Фамилия:</label>
        <input type="text" id="surname" name="surname" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Отправить</button>
    </form>
</body>
</html>
