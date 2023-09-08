<?php
session_start();

$username = "";
$email = "";

$errors = array();


include("../config.php");

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($link, $_POST['username']);
  $password = mysqli_real_escape_string($link, $_POST['password']);


  if (count($errors) == 0) {
  	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($link, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Acum esti logat";
  	  header('location: ../../index.php');
  	}else {
  		array_push($errors, "Username sau parola gresita");
  	}
  }
}


?>