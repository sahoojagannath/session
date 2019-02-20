<?php 

// starting a session

session_start();

// Creating a session

$_SESSION['user_info'] = ['user_id' =>1,
'first_name' =>
'Ramesh', 'last_name' =>
'Kumar', 'status' =>
'active'];

// checking session


if (isset($_SESSION['user_info']))
  {
  echo "logged In";
  }

// un setting remove a value from session

unset($_SESSION['user_info']['first_name']);



// destroying complete session

session_destroy();

?>