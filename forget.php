<?php

$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("canteen", $connection); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
    
    
    
    $customer_email = $_POST['uEmail'];
    $customer_password = $_POST['uPass'];
    $customer_rpassword = $_POST['uRePass'];
    
   
   $sql="SELECT * FROM customer WHERE customer_email='$customer_email' ";
   $result=mysql_query($sql);
   $count=mysql_num_rows($result);

    if($count>=1)
    {
            if($customer_password == $customer_rpassword)
            { 
        
                $query = mysql_query("UPDATE customer SET customer_password = '$customer_password' WHERE customer_email = '$customer_email' ");
                echo "password updated";
        
            }
            else
            {
                echo "Password do not match";
            }

    }
    else 
    {
        echo "email-id not found" ;  
    }
}
mysql_close($connection); 
?>

