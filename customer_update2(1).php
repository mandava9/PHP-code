<?php 


// include the connection streamm here
include 'connect.php';

//  here is the code to read from custTab


?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Customer Entry</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>
<h1>Please Enter Customer Information</h1>
<form action="" method="get" name="form1" onSubmit="MM_validateForm('fname','','R','lname','','R','address','','R','city','','R','state','','R','zip','','RisNum','email','','RisEmail','phone','','RisNum');return document.MM_returnValue">
  <table width="59%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td width="24%"><font size="4">First Name</font></td>
      
      <!-- on the line below, see the coding to show the customer first name, custFirst -->
      <td width="76%"><input name="custFirst" type="text" id="custFirst" value="<?php echo $custFirst;?>" size="25" maxlength="25"></td>
    </tr>
    <tr> 
      <td><font size="4">Last Name</font></td>
      <td><input name="custLast" type="text" id="custLast" value="" size="20" maxlength="20"></td>
    </tr>
    <tr> 
      <td><font size="4">Address</font></td>
      <td><input name="custAddress" type="text" id="custAddress" value="" size="40" maxlength="40"></td>
    </tr>
    <tr> 
      <td><font size="4">City</font></td>
      <td><input name="custCity" type="text" id="custCity" value="" size="15" maxlength="15"></td>
    </tr>
    <tr> 
      <td><font size="4">State</font></td>
      <td><p>
        <label>
<input name="custState" type="radio" id="custState_0" value="MA" checked>          
MA</label>
        <br>
        <label>
          <input type="radio" name="custState" value="NH" id="custState_1">
          NH</label>
        <br>
        <label>
          <input type="radio" name="custState" value="RI" id="custState_2">
          RI</label>
        <br>
      </p></td>
    </tr>
    <tr> 
      <td><font size="4">Zip</font></td>
      <td><input name="custZip" type="text" id="custZip" value="" size="8" maxlength="5"></td>
    </tr>
    <tr> 
      <td><font size="4">Email </font></td>
      <td><input name="custEmail" type="text" id="custEmail" value="" size="40" maxlength="40"></td>
    </tr>
    <tr> 
      <td><font size="4">Phone</font></td>
      <td><input name="custPhone" type="text" id="custPhone" value="" size="10" maxlength="10"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>submit       turned off until next week</td>
    </tr>
  </table>
</form>
<p><a href="customer_list2.php">Return </a></p>
</body>
</html>
