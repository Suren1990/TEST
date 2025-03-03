 <!-- Header -->
 <?php
  session_start();
  ?>
  <header class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo -->
      <div class="text-2xl font-bold">
        <a href="home.php">MyLogo</a>
      </div>

      <!-- Navigation -->
      <nav class="space-x-6">
     <?php
        if(!$_SESSION['user_id']){
          echo "<a href='home.php' class='hover:text-gray-400'>Home</a>
                <a href='registration.php' class='hover:text-gray-400'>Registration</a>
                <a href='login.php' class='hover:text-gray-400'>Login</a>";
        }else 
            echo "<a href='./functions/logout.php' class='hover:text-gray-400'>Log out</a>";
     ?> 
      </nav>
    </div>
  </header>
   
 