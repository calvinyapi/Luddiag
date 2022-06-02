<?php

//Here we are going to handle the error

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./View/Form/connection.js"></script>
    <title>Connection</title>
</head>
<body>
    <div class="h-screen w-screen text-white overflow-hidden">
      <?php 
      include './View/Components/navbar.view.php'; 

      if(isset($_SESSION['error']))
      {
        echo '<div id="error" class="bg-red-500 text-white p-2">';
          echo $_SESSION['error'];
          echo '<button onClick="closeError()" class="text-white float-right">X</button>';
        echo '</div>';
        unset($_SESSION['error']);
      }
      ?>
      <div class="h-[90%] flex flex-col items-center justify-center mt-6">
        <div class="bg-zinc-800 w-1/3 h-[45rem] rounded-2xl flex flex-col items-center mb-32">
          <div class="h-20 w-72 mt-5 flex flex-col justify-center border-b-2">
            <p class="text-3xl font-bold text-center">test login page</p>
          </div>
          <div class="mt-5">
            <form class="text-lg mt-12" method="POST" action="./View/Form/connection_request.php" >
              <div class="flex flex-row items-center">
                <MailIcon class="h-6" />
                <p class="text-lg font-semibold" id="username">
                  Email
                </p>
              </div>
              <input
                type="email"
                id='emailInput'
                name="mail"
                class="bg-transparent border-b-2 mt-3 outline outline-0 text-gray-500 h-12"
                placeholder="Email"
                htmlFor="username" name="mail_user"
              />
              <div class="flex flex-row items-center">
                <p class="text-lg mt-16 font-semibold" id="password" >
                  Password
                </p>
              </div>
              <input
                type="password"
                name="mdp"
                class="bg-transparent border-b-2 mt-2 outline outline-0 h-12"
                htmlFor="password" 
              />
              <div class='flex flex-row items-center justify-center mt-8'>
                <select name="role" class="border-2 bg-zinc-800 w-32">
                  <option selected disabled>Role</option>
                  <option name="exposant" value="exposant">Exposant</option>
                  <option name="organisateur" value="organisateur">Organisateur</option>
                <select>
              </div>
              <div class="flex flex-col items-center justify-center mt-16">
                <button class="bg-[#81CCEF] hover:bg-[#40B1E6] text-white rounded-lg w-24 h-12 mb-9">
                  Valider
                </button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>