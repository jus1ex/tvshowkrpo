<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://getbootstrap.ru/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="rating.js"> </script>
    <title>Телеканал Супер!</title>
</head>
<body class="container text-center bg-secondary-subtle">
    <div class="row justify-content-start">
        <div class="col-4"></div>
        <div class="col-4">
            <h3>Оцените работу нашего телеканала!</h3>
        </div>
    </div>
    <div class="d-flex flex-row mb-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"> Оценка </th>
                    <th scope="col"> Комментарий </th>
                    <th scope="col"> Дата отзыва </th>
                </tr>
            </thead>
            <tbody id="table-body1">
            </tbody>
        </table>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto" id="btn21">
        <a class="btn btn-primary" type="button" href="reglog/add_rating.php"> Добавить отзыв </a>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto" id="btn21">
        <a class="btn btn-danger" type="button" href="reglog/logout.php"> Выйти </a>
    </div>