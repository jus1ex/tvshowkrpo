<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/style.css">
    <title>Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary-subtle">
    <h2 class="textind">Зарегистируйтесь прямо сейчас!</h2>
    <form method="post" action="reglog/register_process.php">
        <div class="frm">
                <div class="frm-group">
                    <input type="text" class="form-control" id="login" name="login" placeholder="Логин">
                </div>
                <div class="frm-group">
                    <input type="text" class="form-control" id="password" name="password" placeholder="Пароль">
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto" id="btn1">
                <button type="submit" class="btn btn-primary">Регистрация</button>
            </div>


        
    </form>
</body>

</html>