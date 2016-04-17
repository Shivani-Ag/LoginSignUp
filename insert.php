<?php

$connection = mysqli_connect("localhost", "root", "");// Establishing Connection with Server

$db = mysqli_select_db( $connection, "canteen"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
    $customer_name = $_POST['uName'];
    $customer_email = $_POST['uEmail'];
    $customer_password = $_POST['uPassword'];
    $customer_age = $_POST['uAge'];
    $sql="SELECT * FROM customer WHERE customer_email='$customer_email' ";
    $result=mysqli_query($connection, $sql);
    $count=mysqli_num_rows($result);
    if($count<1)
    {
         $query = mysqli_query($connection, "insert into customer(customer_name, customer_email, customer_password, customer_age) values ('$customer_name', '$customer_email', '$customer_password', '$customer_age')");
          echo "<script>alert('Data Inserted successfully');</script>";
        //header( "location:http://localhost/LoginSignUp/index.html#/log");
    }
    else
    {
            echo "<script>alert('Email-id already exist');</script>";    
    }
}
mysqli_close($connection);
?>