<?php

require_once '../config/dbacess.php';


$salutation = $_POST["salutation"];
$firstName = $_POST["first_name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$uid = $_POST["uid"];
$password = $_POST["password"];
$passwordRepeat = $_POST["password_repeat"];


include 'functions.inc.php';

if (checkUID($uid) !== false) {
  header("location: ../index.php?page=register&error=uid");
  exit();
}

if (checkEmail($email) !== false) {
  header("location: ../index.php?page=register&error=email");
  exit();
}

if (matchPasswords($password, $passwordRepeat) !== false) {
  header("location: ../index.php?page=&error=match");
  exit();
}

if (uidExists($dbconnection, $uid) !== false) {
  header("location: ../index.php?page=register&error=uidtaken");
  exit();
}

if (emailExists($dbconnection, $email) !== false) {
  header("location: ../index.php?page=register&error=emailtaken");
  exit();
}

createUser($dbconnection, $salutation, $firstName, $surname, $email, $uid, $password);
