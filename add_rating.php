<?php
session_start();
$rating = [];
if (file_exists("rating.json")) {
    $rating = json_decode(file_get_contents("rating.json"), true);
}
//ДОБАВЛЕНИЕ ДАННЫХ
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $date = date("Y-m-d");
    $rating[] =
        [
            "title" => $title,
            "content" => $content,
            "date" => $date
        ];
    file_put_contents("rating.json", json_encode($rating));
    header("Location: add_rating.php");
    exit();
}
//Удаление
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["delete"])) {
    $index = $_POST["index"];
    if (isset($rating)) {
        array_splice($rating, $index, 1);
        file_put_contents("rating.json", json_encode($rating));
    }
    header("Location: add_rating.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Телеканал Супер!</title>
</head>

<body class="p-3 border-bottom m-0 border-0 bd-example">
    <div class="border-bottom pb-2 mb-4">
        <h3>Добавить отзыв</h3>
    </div>
    <form method="post" action="reglog/add_rating.php">
            <div class="p-3 bg-primary border-bottom bg-opacity-10 borderstart-0 rounded-end">
                <div class="mb-3">
                    <label for="title" class="form-label"> Оценка </label>
                    <input type="number" min="0" max="5" class="form-control " id="title" name="title" required><br><br>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Комментарий</label>
                    <textarea class="form-control" id="content" name="content" required></textarea><br><br>
                    <button class="btn btn-primary mb-3" type="submit" name="submit"> Добавить отзыв </button>
                </div>
            </div>
            <div class="h4 pb-2 mb-4 border-danger">
                <h3 class="text-danger">Удалить отзыв</h3>
            </div>
    </form>
        <ul>
            <?php foreach ($rating as $index => $rat) : ?>
                <li class="pb-2 mb-4 border-bottom border-danger">
                    <?php echo "Оценка: ", $rat["title"]; ?><br>
                    <?php echo "Комментарий: ", $rat["content"]; ?><br>
                    <?php echo "Дата: ", $rat["date"]; ?><br>
                    <form method="post" action="add_rating.php">
                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                        <button type="submit" name="delete" class="btn btn-danger"> Удалить </button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <div class="h4 pb-2 mb-4 text-danger border-danger"></div>
    <a href="rating.php" class="btn btn-primary"> Главная <a>
</body>

</html>