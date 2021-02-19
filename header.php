<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>keenesports</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    </head>
  <body>


    <nav>
      <div class="wrapper">
        <a href="index.php"></a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="anarchitact.php">Scapes</a></li>
          <li><a href="art.php">Art</a></li>
          <li><a href="about.php">About</a></li>


          <?php
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='profile.php'>Profile Page</a></li>";
              echo "<li><a href='logout.php'>Logout</a></li>";
            }
            else {
              echo "<li><a href='signup.php'>Sign up</a></li>";
              echo "<li><a href='login.php'>Log in</a></li>";
            }
          ?>
        </ul>
       </div>
    </nav>
<br>
<section class="index-intro">
  <a href="https://www.twitch.tv/janwillemkeen" class="fa fa-twitch"></a>
  <a href="https://www.linkedin.com/in/jan-willem-keen-40b83211/" class="fa fa-linkedin"></a>
  <a href="https://www.facebook.com/jay.double.keen" class="fa fa-facebook"></a>
  <a href="https://www.instagram.com/keenzensports/" class="fa fa-instagram"></a>
  <a href="https://www.youtube.com/channel/UCeKqQU7B-l0WXAlg1wjR-cw" class="fa fa-youtube"></a>
</section>

<div class="wrapper">
