<?php
include_once 'dbh.inc.php';

if (isset($_POST["submit"])) {

  // Verzamelen data
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $username = mysqli_real_escape_string($conn, $_POST["uid"]);
  $pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);
  $pwdRepeat = mysqli_real_escape_string($conn, $_POST["pwdrepeat"]);

  // Errorhandlers
  // Referentie: functions.inc.php

  require_once 'functions.inc.php';

  // Is not false ipv is true
  if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=emptyinput");
		exit();
  }
  // Correcte gebruikersnaam
  if (invalidUid($uid) !== false) {
    header("location: ../signup.php?error=invaliduid");
		exit();
  }
  // Correct mailadres
  if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidemail");
		exit();
  }
  // Wachtwoorden hetzelfde?
  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=passwordsdontmatch");
		exit();
  }
  // Gebruikersnaam al in gebruik?
  if (uidExists($conn, $username, $username) !== false) {
    header("location: ../signup.php?error=usernametaken");
		exit();
  }

  // Maak nieuwe gebruiker aan
  createUser($conn, $name, $email, $username, $pwd);

} else {
	header("location: ../signup.php");
    exit();
}
