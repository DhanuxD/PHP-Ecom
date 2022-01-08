<?php


  $user_Email = $_POST["email"];
  $user_Name = $_POST["name"];
  $user_Password = $_POST["password"];
  
  $connection = new mysqli("localhost","root","123","ecommerceapp","3307");
  
  $connection->query("INSERT INTO user_registation(`name`,`email`,`password`)VALUES('".$user_Email."','".$user_Name."','".$user_Password."')");
  
  echo 'home.php';
  
  ?>


