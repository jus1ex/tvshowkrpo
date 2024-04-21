<?php
echo "<title> Успешная регистрация </title>";
// получаем данные по login и password
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];
    $users = [];
    if (file_exists("users.json")) { //проверяет на существование файла
        $users = json_decode(file_get_contents("users.json"), true); //декодирует JSON в массив PHP
    }
    $users[$login] = [
    "login" => $login,
    "password" => $password
    ];
//записывает данные в файл
    file_put_contents("users.json", json_encode($users));
    echo "Вы успешно зарегестрировались!" ," <br/>";
    echo "Ваши данные для входа:";
    echo " <br/>" , "Логин: " , '<strong>', $login ,'</strong>', " <br/>" ;
    echo "Пароль: " ,'<strong>', $password, '</strong>', " <br/>" ;
    echo '<a href="index.php"> Вернуться в меню </a>' ;
    
}
?>
