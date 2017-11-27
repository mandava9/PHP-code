<html>
<head>
<title>List Customers</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<h1>List Customers</h1>
<p><br>
  <br>
  
  
  <?php

// include the connection streamm
include 'connect.php';

// the customer file is sorted last name, first name
$query = "select * from custTab order by custLast, custFirst";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);
print "There are currently $num customers on file<br><br>";



while($row = mysqli_fetch_assoc($result)) {
	$custNo = $row['custNo'];
	$custFirst = $row['custFirst'];
	$custLast = $row['custLast'];
	$custAddress = $row['custAddress'];
	$custCity = $row['custCity'];
	
	
	print "$custLast";
	print "$custFirst";
	print "$custAddress";
	print "$custCity";
	
// this is a change - pass customer no to update
	print "<a href=customer_update4.php?action=u&id=";
	print $custNo;
	print ">Change</a><br>";	
//  and now add a second link for a delete
//	except I don't need to go to the update form
//  so I am going directly to the update program
	
		
	print "</tr>";
}
print "</table>";

?>

</p>
<!-- this gives us a link to add a customer -->
<p><a href="customer_update4.php?action=a">Add a Customer</a></p>
<p><a href="index.html">Return </a></p>
</body>
</html>
