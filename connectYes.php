<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>connected?</title>
</head>

<body>

<?php
// this connect To database
$hostname="mysql.hostinger.in";
// database name    
$username="u996219413_vivek"; 
// database password  
$password="vivi9999";
// database name    
$dbname="u996219413_vivek";  

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
    die("You Don't Connect With Me");
} 

echo "We Are Connected!";

?>

<p><a href="index.html">return</a></p>
</body>
</html>
