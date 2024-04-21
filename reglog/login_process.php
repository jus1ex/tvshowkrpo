<?php
session_start(); // запуск сессии
// получаем данные по login и password
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $login = $_POST["login"];
    $password = $_POST["password"];
    $users = [];
    if (file_exists("users.json"))
    { //проверяет на существование файла
        $users = json_decode(file_get_contents("users.json"), true); //декодирует JSON в массив PHP
    }
    if(isset($users[$login]) && $users[$login]["password"] === $password)
    {
        $_SESSION["login"] = $login; // если зареган имя хранится в сесси по ключу "login"
        header("Location: rating.php");
        exit();
    } else {
    echo "Такого аккаунта не существует." , " <br/>" ;
    echo "Проверьте свой <strong>пароль</strong> или <strong>логин</strong>
    <br/>" ;
    echo "<a href='index.php'> Вернуться в меню </a> ";
    }
}
?>