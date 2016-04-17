<?php
session_start();
unset($_SESSION["customer_email"]);
unset($_SESSION["customer_name"]);
header("Location:http://localhost/LoginSignUp/index.html#/home");
?>