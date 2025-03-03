<?php
session_start();
// $name = trim(filter_var($_POST["full-name"], FILTER_SANITIZE_SPECIAL_CHARS));
// $email = trim(filter_var($_POST["email"], FILTER_SANITIZE_SPECIAL_CHARS));
// $password = trim(filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Массив для хранения ошибок
    $errors = [];

    // Валидация для username
    if (empty($name)) {
        $errors[] = "Username не может быть пустым!";
    } elseif (!preg_match("/^[a-zA-Z0-9]{3,20}$/", $name)) {
        $errors[] = "Username должен содержать только буквы и цифры и быть длиной от 3 до 20 символов!";
    }

    // Валидация для email
    if (empty($email)) {
        $errors[] = "Email не может быть пустым!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Некорректный email адрес!";
    }

    // Валидация для password
    if (empty($password)) {
        $errors[] = "Password не может быть пустым!";
    } elseif (strlen($password) < 8 || strlen($password) > 20) {
        $errors[] = "Password должен быть длиной от 8 до 20 символов!";
    }

    // Если есть ошибки, выводим их
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
        echo "<p style='color: green;'>Все данные валидны!</p>";
        // Здесь можно продолжить обработку данных, например, сохранить их в базе данных
    }
}
$pdo = new PDO("mysql:host=MySQL-8.2; dbname=TEST;", "root", "");
$s = $pdo->exec("CREATE TABLE `users`(
    id INT AUTO_INCREMENT,
    name varchar(20),
    email varchar(20),
    password varchar(20),
    PRIMARY KEY(id)
)");

$query = $pdo->prepare("SELECT id FROM users WHERE email = ? OR password = ?");
$query -> execute([$email, $password]);

if($query -> rowCount() == 0){
    $query = $pdo -> prepare("INSERT INTO `users` (name, email, password) VALUES(?, ?, ?)");
    $query -> execute([$name, $email, $password]);
    // header("Location:/popup.php");
}  
else echo "idi naxuy";
    
    

?>