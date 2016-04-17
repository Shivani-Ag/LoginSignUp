<?php
session_start();
$connection = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysqli_select_db($connection , "canteen" ); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
    $useremail = $_POST['customer_email'];
    $userpassword = $_POST['customer_password'];
    $sql="SELECT * FROM customer WHERE customer_email='$useremail' and customer_password='$userpassword'";
    $result=mysqli_query($connection , $sql);
    
    $row  = mysqli_fetch_array($result);
    if(is_array($row))
    {
                $_SESSION['customer_email'] = $row[customer_email];
                $_SESSION['customer_password'] = $row[customer_password];
    }
    else 
    {
                $message = "Invalid Username or Password!";
    }
}
if(isset($_SESSION['customer_email'])) 
{
        header("Location:welcome.php");
}
mysqli_close($connection); 
?>
   