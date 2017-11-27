

<html>
<head>
<title>Update Customer Information</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<p>&nbsp;</p>
<?php 


// include the connection streamm
include 'connect.php';

// here are the two hiddent fields
// they tell the script is this is an add, update or delete
// and for an update and delete, they pass the id
$action = $_REQUEST["action"];
$id = $_REQUEST["id"];
$amount = $_REQUEST["amount"];
$balance = $_REQUEST["balance"];

// here are all the fields from the form
$custLast = $_REQUEST["custLast"];
$custFirst = $_REQUEST["custFirst"];
$accTypeNo = $_REQUEST["accTypeNo"];;
$custBankBranch = $_REQUEST["custBankBranch"];;
$custAddress = $_REQUEST["custAddress"];
$custCity = $_REQUEST["custCity"];
$custState = $_REQUEST["custState"];
$custZip = $_REQUEST["custZip"];
$custEmail = $_REQUEST["custEmail"];
$custPhone = $_REQUEST["custPhone"];

$dt = date('Y-m-d');

// here I test the parm
// the action I take depends on if the parm is a(dd) or u(pdate)
if ($action == 'a') {
$query = "insert into custBank values (
	null, 
	'$custLast', 
	'$custFirst', 
	'$accTypeNo',
	'$custBankBranch',
	'$custAddress', 
	'$custCity', 
	'$custState', 
	'$custZip', 
	'$custEmail', 
	'$custPhone',
	'$balance'
)";

mysqli_query($conn, $query) or
	die(mysqli_error());

print "<h3>Thanks $custFirst $custLast for entering your information<br>";
}

// now check for an update
// I will use a set query to update the changed fields
// I also update the changed date field 
if ($action == 'u') {
	$query = "update custBank
		set custLast = '$custLast',
		custFirst = '$custFirst', 
		accTypeNo = '$accTypeNo',
		custBankBranch = '$custBankBranch',
		custAddress = '$custAddress', 
		custCity = '$custCity', 
		custState = '$custState', 
		custZip = '$custZip', 
		custEmail = '$custEmail',
		custPhone = '$custPhone',
		balance = '$balance' 
		where custNo = '$id'";
	mysqli_query($conn, $query) or
		die(mysqli_error());
	print "<h3>Update Successful</h3>";
} // end u
// Action= t begin, to make transactions
/* if ($action == 't') {
	$query = "update bankAccount
		set custLast = '$custLast',
		custFirst = '$custFirst', 
		cust_AccNo = '$cust_AccNo',
		custBankBranch = '$custBankBranch',
		custAddress = '$custAddress', 
		custCity = '$custCity', 
		custState = '$custState', 
		custZip = '$custZip', 
		custEmail = '$custEmail',
		custPhone = '$custPhone',
		custChangeDate = '$dt' 
		where custNo = '$id'";
	mysqli_query($conn, $query) or
		die(mysqli_error());
	print "<h3>Update Successful</h3>";
} */ // end t
if ($action == 'd') {

// this is a delete
// so perform a delete query
		$query = "delete from custBank
		where custNo = '$id'";
		mysqli_query($conn, $query)
			 or die("query failed:" . mysqli_error());
	print "<h3>Delete Successful</h3>";
} 
if ($action == 'W'){
	$newbalance =  $balance - $amount;
	$query = "update custBank
		set balance = '$newbalance' 
		where custNo = '$id'";
	mysqli_query($conn, $query) or
		die(mysqli_error());
	print "<h3>Withdraw of $amount successful</h3>";
	
}
if ($action == 'C'){
	$newbalance =  $balance + $amount;
	$query = "update custBank
		set balance = '$newbalance' 
		where custNo = '$id'";
	mysqli_query($conn, $query) or
		die(mysqli_error());
	print "<h3>Deposit of $amount successful</h3>";
	
}

?>

<p><a href="bank_list4.php">Return</a></p>
<p>&nbsp; </p>
</body>
</html>
