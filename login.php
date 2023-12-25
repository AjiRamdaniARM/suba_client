
<?php
session_start();
include 'config/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Suba_Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/font.css" />
    <link rel="stylesheet" href="css/app.css" />
    <script src="js/tailwind.js"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body style="background-color: #1E1E1E">
<div class="bg absolute  z-[-10]">
    <img src="assets/img/Group.png" class="rotate-180 w-[30em] top-[-10px]" alt="bg">
</div>
    <div class="container-lg mx-auto py-20 z-1">
    <div class="flex flex-wrap gap-10 justify-center items-center">
        <div class="content-text">
        <h1 class="DM-Sans font-bold w-[8em] mx-auto lg:text-start text-4xl text-center lg:text-6xl py-3 lg:w-[7em] text-white">Welcome, Admin Suba Client</h1>
        <p class="text-white text-[10px] lg:px-0 px-5 text-center lg:text-start lg:w-[25em]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat nulla suspendisse tortor aenean dis placerat.</p>
        </div>

        <div class="content-form">
        <div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" role="form">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username" >
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="user" id="username" type="text" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="pass" placeholder="******************">
      <p class="text-red-500 text-xs italic">Please choose a password.</p>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="login" >
        Masuk
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-yellow-500 hover:text-yellow-800" href="#">
        Lupa Password?
      </a>
    </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Suba Arch Studio. All rights reserved.
  </p>
</div>
        </div>
    </div>
    </div>

    <?php
    if (isset($_POST['login'])){
        $ambil = $conn -> query("SELECT * FROM tb_admin WHERE username='$_POST[user]'");
        $get = $ambil->num_rows;
        if ($get==1) {
            $_SESSION['admin']=$ambil->fetch_assoc();
            echo "<div class=' container w-full mx-auto bg-green-100 border-l-4 border-green-500 text-green-700 p-4' role='alert'>
            <p class='font-bold'>Login Suksess</p>
          </div>";
            echo "<script>location='dashbord.php?admin=admin';</script>";
        }
        else {
            echo "<div class=' container w-full mx-auto bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4' role='alert'>
            <p class='font-bold'>Login Gagal</p>
          </div>";
	        echo "<meta http-queiv='refresh' content='1;url=login.php'>";
        }
    }
    ?>
   
</body>
</html>