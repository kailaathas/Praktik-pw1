<?php
session_start();

   // Username dan password yang valid
$username_valid = "unnes";
$password_valid = "123456";

if (!isset($_POST['username']) || !isset($_POST['password'])) {
  header('Location: index.html');
}

    // Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

  // Cek kecocokan
if(($username == $username_valid) && ($password == $password_valid)){
  
  $_SESSION['login'][] = [ 
           'username' => $username,
           'login_at' => date('Y-m-d H:i:s')
  ];

  //jika benar
  echo "Selamat datang: " . $username. ', anda telah login sebanyak: ' . count($_SESSION['login']) . ' kali';

  echo '<br>';
  echo '<a href="logout.php">logout</a>';

  echo '<pre>';
  var_dump($_SESSION['login']);
} else {
  //jika salah
  echo "Username atau Password salah";
}

