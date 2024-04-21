<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://getbootstrap.ru/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Телеканал Супер!</title>
</head>

    <body class="bg-secondary-subtle">
        <h1 class="textind">Добро пожаловать!</h1>
        <h2>Рады видеть вас на сайте нашего телеканала!</h2>
        <form method="post" action="login_process.php">
            <div class="frm">
                <div class="frm-group">
                    <input type="text" class="form-control" id="login" name="login" placeholder="Логин">
                </div>
                <div class="frm-group">
                    <input type="text" class="form-control" id="password" name="password" placeholder="Пароль">
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto" id="btn1">
                <button type="submit" class="btn btn-success">Вход</button>
            </div>
        </form>
        <div class="d-grid gap-2 col-6 mx-auto" id="btn2">
            <a class="btn btn-primary" type="button" href="reglog/register.php"> Зарегистрироваться </a>
        </div>
    </body>

</html>