<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <?php if($_SESSION["customer_email"]) {
    ?>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center">User Dashboard</td>
</tr>
<tr class="tablerow">
<td>


                    Welcome <?php echo $_SESSION["customer_email"]; ?>. 
    
    Click here to <a href="logout.php" title="Logout">Logout.</a>
    </td>
</tr>
    </table>
<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db( $connection , "canteen");

$query = "SELECT * FROM buyer where canteen_id = '1' " ;
$result = mysqli_query( $connection ,$query) 
or die(mysqli_error( $connection)); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\"><tr> 
<td width=100>Product Id</td>
<td width=100>Product Name</td> 
<td width=100>Product Price</td> 
<td width=100>Product Quantity</td>
<td width=100>Customer Name</td> 
<td width=100>Customer Email</td> 
<td width=100>Customer Phone</td> 
<td width=100>Customer Address</td> 
</tr>"; 

while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>"  .$row['product_id'].  "</td>"; 
print "<td>"  .$row['product_name'].  "</td>"; 
print "<td>"  .$row['product_price']. "</td>"; 
print "<td>"  .$row['product_quantity'].  "</td>"; 
print "<td>"  .$row['customer_name']. "</td>"; 
print "<td>"  .$row['customer_email'].  "</td>"; 
print "<td>"  .$row['customer_phone']. "</td>"; 
print "<td>"  .$row['customer_address']. "</td>"; 
print "</tr>"; 
} 
print "</table>"; 
mysqli_close($connection);
}?>

</body>
</html>