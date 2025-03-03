<?php
// session_start();

// $email = trim(filter_var($_POST["email"], FILTER_SANITIZE_SPECIAL_CHARS));
// $password = trim(filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS));

// $pdo = new PDO("mysql:host=MySQL-8.2; dbname=TEST;", "root", "");

// $query = $pdo->prepare("SELECT id FROM users WHERE email = ? AND password = ?");
// $query -> execute([$email, $password]);

// if($query -> rowCount() == 0){
//     echo "No log in";
// }  
// else {
//     $_SESSION['user_id'] = $user['id'];
// header("Location:/dashboard.php");
// }


session_start(); // Стартуем сессию

$email = trim(filter_var($_POST["email"], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS));

// Параметры подключения к базе данных
$pdo = new PDO("mysql:host=MySQL-8.2; dbname=TEST;", "root", "");

// Подготовка запроса для проверки пользователя
$query = $pdo->prepare("SELECT id FROM users WHERE email = ? AND password = ?");
$query->execute([$email, $password]);

if ($query->rowCount() == 0) {
    // Если нет совпадений, показываем ошибку
    echo "Неверные данные для входа";
} else {
    // Получаем данные пользователя
    $user = $query->fetch(PDO::FETCH_ASSOC);
    
    // Сохраняем id пользователя в сессии
    $_SESSION['user_id'] = $user['id'];
    
    // Перенаправляем на панель управления
    header("Location: /dashboard.php");
    exit(); // Останавливаем выполнение скрипта
}
?>





