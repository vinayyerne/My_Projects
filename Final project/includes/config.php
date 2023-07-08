<?php 

$con = mysqli_connect('localhost','root','','finalproject') OR die('could not connect to mysql server');

session_name('auth');

session_start();

require_once('includes/validation.php');
?>