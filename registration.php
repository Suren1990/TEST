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
<body class="text-black flex flex-col min-h-screen">

<?php
	require_once("blocks/header.php");
 ?>

  <!-- Main Content: Form Section (Center) -->
  <main class="flex-grow flex items-center justify-center py-12">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md">
      <h2 class="text-2xl font-bold text-center mb-6">Create an Account</h2>

      <!-- Registration Form -->
      <form action="functions/reg.php" method="POST">
        <!-- Full Name -->
        <div class="mb-4">
          <label for="full-name" class="block text-sm font-semibold text-gray-300">Full Name</label>
          <input type="text" id="full-name" name="full-name" placeholder="Enter your full name"
            class="mt-2 p-3 w-full border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <!-- Email -->
        <div class="mb-4">
          <label for="email" class="block text-sm font-semibold text-gray-300">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Enter your email"
            class="mt-2 p-3 w-full border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <!-- Password -->
        <div class="mb-4">
          <label for="password" class="block text-sm font-semibold text-gray-300">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password"
            class="mt-2 p-3 w-full border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <!-- Confirm Password -->
        <!-- <div class="mb-6">
          <label for="confirm-password" class="block text-sm font-semibold text-gray-300">Confirm Password</label>
          <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password"
            class="mt-2 p-3 w-full border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
        </div> -->

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition-colors">Register</button>
      </form>

      <!-- Redirect Link -->
      <div class="mt-4 text-center">
        <p class="text-sm text-gray-400">Already have an account? <a href="#login" class="text-blue-600 hover:underline">Login</a></p>
      </div>
    </div>
  </main>

  <?php	
	// public
	// require("public.php");
	// Footer
	require_once("blocks/footer.php");
 ?>

</body>
</html>
