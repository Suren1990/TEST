<?php
  session_start();
  
 if($_SESSION['user_id']){
  header("Location: /dashboard.php");
    exit();
  }
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
 ?>

  
      Hello

 <?php
	// Footer
	require_once("blocks/footer.php");
 ?>

</body>
</html>
