<html>
<head>
<title>List Customers</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align:center;
    padding: 15px;
}
th{
	background : grey;
	color : white;
}
             
                a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a:hover {
    text-decoration: none;
}

a:active {
    text-decoration: none;
}
               }
        
</style>
</head>

<body>

<h1>List Customers</h1>
<p><br>
  <br>
  
  
  <?php

// include the connection streamm
include 'connect.php';

// the customer file is sorted last name, first name
$query = "select * from custBank, bankAccount where custBank.accTypeNo = bankAccount.accTypeNo";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);
print "There are currently $num customers on file<br><br>";

print "<table>";
print "<tr><th><b>Last Name</b></th>";
print "<th><b>First Name</b></th>";
print "<th><b>Account Type</b></th>";
print "<th><b>Bank Branch</b></th>";
print "<th><b>Address</b></th>";
print "<th><b>City</b></th>";

print "<th><b>Email</b></th>";
print "<th><b>Account Balance</b></th>";
print "<th><b>Change</b></th>";
print "<th><b>Withdraw</b></th>";
print "<th><b>Deposit</b></th>";
print "<th><b>Delete</th></b></tr>";

while($row = mysqli_fetch_assoc($result)) {
	$custNo = $row['custNo'];
	$custFirst = $row['custFirst'];
	$custLast = $row['custLast'];
	$accountType = $row['accountType'];
	$custBankBranch = $row['custBankBranch'];
	$custAddress = $row['custAddress'];
	$custCity = $row['custCity'];
	$custEmail = $row['custEmail'];
	$accountBal = $row['balance'];
	
	print "<tr>";
	print "<td>$custLast</td>";
	print "<td>$custFirst</td>";
	print "<td>$accountType</td>";
	print "<td>$custBankBranch</td>";
	print "<td>$custAddress</td>";
	print "<td>$custCity</td>";
	print "<td>$custEmail</td>";
	print "<td>$$accountBal</td>";
	
// this is a change - pass customer no to update
	print "<td><a href=bank_update4.php?action=u&id=";
	print $custNo;
	print ">Change</a></td>";

    print "<td><a href=action2.php?action=W&id=";
	print $custNo;
	print ">Withdraw</a></td>";

	print "<td><a href=action2.php?action=C&id=";
	print $custNo;
	print ">Deposit</a></td>";
//  and now add a second link for a delete
//	except I don't need to go to the update form
//  so I am going directly to the update program
	
	print "<td><a href=bank_action4.php?action=d&id=";
	print $custNo;
	print "> Delete </a></td>";	
	print "</tr>";
}
print "</table>";

?>

</p>
<!-- this gives us a link to add a customer -->
<p><a href="bank_update4.php?action=a">Add a Customer</a></p>
<p><a href="index.html">Return </a></p>
</body>
</html>
