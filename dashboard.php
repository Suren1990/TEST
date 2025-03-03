<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dark Theme Layout</title>
  <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS CDN -->
</head>
<body class="flex flex-col min-h-screen">
  <?php
  // Header
  require_once("blocks/header.php");
  
  if (empty($_SESSION['user_id'])) {
      echo "Пользователь не авторизован!";
      header("Location: login.php");
      session_unset();
      exit();
  }
  echo "Добро пожаловать на панель управления!";
  ?>
  <?php
	// Footer
	require_once("blocks/footer.php");
 ?>
</body>
</html>