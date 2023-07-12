<?php

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

  ?>

<!DOCTYPE html>
<html>

<head>

  <title>Hacking</title>

  <meta charset="UTF-8">

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'><link rel="stylesheet" href="./style-success.css">

  <style>

    button {

      background-color: rgba(255,255,255,0.5);
      border-radius: 10px;
      color: black;
      padding: 15px 32px; 
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px; 
      border: none;    
}
  </style>


</head>

<body>
  <div id="particles-js"></div>
  <div class="login-form">
   <h1><b>Hacking<b></h1>
<p align="center"><h2>You have successfully logged in!</h2><p align="center">
    <br> <button onclick="window.location.href='logout.php';">
Logout
</button>
<br><br>


<p align="center">©️ made by <a href="https://technik.xn--schchner-2za.de">technik.schächner.de</a><p align="center"> 
  </form>

  <div id="particles-js"></div>
<!-- partial -->

  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'></script>
  <script src='https://code.jquery.com/jquery-1.11.1.min.js'></script><script src="./script.js"></script>

</body>
<?php
} else {
  header("Location: index.html");
  exit;
}
?>
