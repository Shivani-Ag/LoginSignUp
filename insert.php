<?php

$connection = mysql_connect("localhost", "root", "");// Establishing Connection with Server

$db = mysql_select_db("canteen", $connection); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
    
    
    $customer_name = $_POST['uName'];
    $customer_email = $_POST['uEmail'];
    $customer_password = $_POST['uPassword'];
    $customer_age = $_POST['uAge'];
    
   $sql="SELECT * FROM customer WHERE customer_email='$customer_email' ";
   $result=mysql_query($sql);
   $count=mysql_num_rows($result);

    if($count!=1)
    {
    
        
        $query = mysql_query("insert into customer(customer_name, customer_email, customer_password, customer_age) values ('$customer_name', '$customer_email', '$customer_password', '$customer_age')");
        echo "Data inserted successfully";
        //header( "location:http://localhost/LoginSignUp/index.html#/log");
        
    }
    else
    {
        echo "email Id already exist";
    }
}
mysql_close($connection); 
?>

