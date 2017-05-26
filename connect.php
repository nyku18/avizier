<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db_name = "avizier";
  $connection = mysqli_connect($host, $user, $pass, $db_name);//conexiune la baza de date

  // Check connection
  if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
